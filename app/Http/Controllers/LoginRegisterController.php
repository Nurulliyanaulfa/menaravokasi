<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profileusaha;
use App\Models\Profilpelamar;
use Illuminate\Pagination\Paginator; 

class LoginRegisterController extends Controller
{
    public function login()
{
   

    return view('auth.login');
}


    public function register()
    {
        return view('auth.register');
    }
    public function userHome(Request $request) {
        
        return view('user.home');
    }

    public function adminHome(Request $request)
    {
        $search = $request->input('search');
        $data = User::where('level', 'admin')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
            })
            ->paginate(5);
        return view('admin.home', compact('data'));
    }
    public function userPerusahaanHome(Request $request)
    {
        $search = $request->input('search');
        $data = User::where('level', 'userPerusahaan')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
            })
            ->paginate(5);
        return view('userPerusahaan.home', compact('data'));
    }


    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email', // Pastikan email unik di tabel users
            // 'jenisKelamin' => 'required',
            'password' => 'required|min:8|max:20|confirmed',
            
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        // $user->jenis_kelamin = $request->jenisKelamin;
        $user->password = Hash::make($request->password);
        $user->level = 'user'; // Atur level pengguna sebagai 'user' (atau 'admin' jika diperlukan)
        $user->blokir = false;

        $user->save();

        if ($user) {
            // Auto-login setelah registrasi
            Auth::login($user);

            // Arahkan ke halaman lengkapi profil perusahaan
            return redirect()->route('auth.profilPelamar');
        } else {
            // Jika terjadi kesalahan, kembalikan ke halaman registrasi dengan pesan kesalahan
            return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
 }
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        // Check if the user is blocked
        $user = User::where('email', $credentials['email'])->first();
        if ($user && $user->blokir) {
            return back()->with('failed', 'Akun Anda diblokir. Harap hubungi administrator.');
        }
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            switch ($user->level) {
                case 'userPerusahaan':
                    return redirect('/userPerusahaan/home');
                    break;
    
              
                case 'user':
                    return redirect('/user/home');
                    break;
    
                case 'admin':
                    return redirect('/admin/home');
                    break;
    
                default:
                    break;
            }
        }
    
        return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
    
    

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }



    // ini register sebagai perusahaan------------------
    public function registerUsaha()
    {
        return view('auth.registerUsaha');
    }

    public function postRegisterUsaha(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email', 
            'password' => 'required|min:8|max:20|confirmed',
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = 'userPerusahaan'; 
        $user->blokir = false;
        $user->save();

        if ($user) {
            // Auto-login setelah registrasi
            Auth::login($user);

            // Arahkan ke halaman lengkapi profil perusahaan
            return redirect()->route('auth.profileUsaha');
        } else {
            // Jika terjadi kesalahan, kembalikan ke halaman registrasi dengan pesan kesalahan
            return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
 }

}
    

 
public function profilePelamar()
{
    $user = auth()->user();
    $profilepelamar = Profilpelamar::where('user_id', $user->id)->first(); // Ambil data profil dari database

    return view('auth.profilPelamar', compact('profilepelamar'));
}
    public function postProfilePelamar(Request $request)
{
    $request->validate([
        'gambar' => 'required|image|max:5120',
        'asal_lembaga' => 'required',
        'jenjang_pendidikan' => 'required',
        'jk' => 'required',
        'ttl' => 'required',
        'alamat' => 'required',
        
        'status' => 'required',
        'keahlian' => 'required',
    ]);

    $user = auth()->user();

    $profilepelamar = new Profilpelamar;
    $profilepelamar->user_id = $user->id;
    $profilepelamar->asal_lembaga = $request->asal_lembaga;
    $profilepelamar->jenjang_pendidikan = $request->jenjang_pendidikan;
    $profilepelamar->jk = $request->jk;
    $profilepelamar->ttl = $request->ttl;
    $profilepelamar->alamat = $request->alamat;
    $profilepelamar->status = $request->status;
  
    $profilepelamar->keahlian = $request->keahlian;
    

     // Mengelola unggahan gambar
     if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('pelamar_images/', $filename);
        $profilepelamar->gambar = $filename;
    }
    
    if ($profilepelamar->save()) {
        return redirect('/user/profilPelamar')->with('success', 'Akun berhasil dibuat, silakan login!');
    } else {
        return back()->with('failed', 'Gagal menambah perusahaan baru!');
    }
}

//ini untuk profil pelamar
public function profileUsaha()
{
    $user = auth()->user();
    $profileusaha = Profileusaha::where('user_id', $user->id)->first(); // Ambil data profil dari database

    return view('auth.profileUsaha', compact('profileusaha'));
}
    public function postProfileUsaha(Request $request)
{
    $request->validate([
        'gambar' => 'required|image|max:5120',
        'jenis_bidang_perusahaan' => 'required',
        'alamat' => 'required',
        'kontak' => 'required',
        'deskripsi_perusahaan' => 'required',
        'visi' => 'required',
        'misi' => 'required',
    ]);

    $user = auth()->user();

    $profileusahas = new Profileusaha;
    $profileusahas->user_id = $user->id;
    $profileusahas->jenis_bidang_perusahaan = $request->jenis_bidang_perusahaan;
    $profileusahas->alamat = $request->alamat;
    $profileusahas->kontak = $request->kontak;
    $profileusahas->deskripsi_perusahaan = $request->deskripsi_perusahaan;
    $profileusahas->visi = $request->visi;
    $profileusahas->misi = $request->misi;

    // Mengelola unggahan gambar
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('usaha_images/', $filename);
        $profileusahas->gambar = $filename;
    }

    if ($profileusahas->save()) {
        return redirect('/userPerusahaan/home')->with('success', 'Akun berhasil dibuat, silakan login!');
    } else {
        return back()->with('failed', 'Gagal menambah perusahaan baru!');
    }
}


    }