<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Posting;
use App\Models\Lamarran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminperusahaan(Request $request)
    {
        $search = $request->input('search');
        $data = User::where('level', 'userPerusahaan')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
            })
            ->paginate(5);
        return view('admin.perusahaan', compact('data'));
    }
    public function admintambahPerusahaan()
    {
        return view('admin.tambahPerusahaan');
    }

    public function postTambahPerusahaan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // 'jenisKelamin' => 'required',
            'password' => 'required|min:8|max:20|confirmed', // Perbaikan pada validasi passwordF
            'email' => 'required|email|unique:users,email', // Perbaikan pada validasi email
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->level = 'userPerusahaan';
        $user->email = $request->email;
        // $user->jenis_kelamin = $request->jenisKelamin; 
        $user->password = Hash::make($request->password);
        $user->save();

        if ($user) {
            return back()->with('success', 'Perusahaan baru berhasil ditambah!');
        } else {
            return back()->with('failed', 'Gagal menambah perusahaan baru!');
        }
    }
    public function edituserPerusahaan($id){
        $data = User::find($id);
        return view('admin.edituserPerusahaan', compact('data'));
        }
        public function postEdituserPerusahaan(Request $request, $id) {
        $request->validate([
        'name' => 'required',
        'email' => 'required|email:dns',
        //  'jenisKelamin' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->jenis_kelamin = $request->jenisKelamin;
        $user->save();
        if($user){
        return back()->with('success', 'Data admin berhasil di update!'); 
        } else {
        return back()->with('failed', 'Gagal mengupdate data perusahaan!');
        }
        }
        public function deleteuserPerusahaan($id){
        $data = User::find($id);
        $data->delete();
        if($data){
        return back()->with('success', 'Data berhasil di hapus!'); 
        } else {
        return back()->with('failed', 'Gagal menghapus data!');
        }
        }


        public function adminvokasi(Request $request)
        {
            $search = $request->input('search');
        
            $data = User::where('level', 'user')
                ->where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%')
                        ->orWhereHas('lamarrans', function ($query) use ($search) {
                            $query->where('status', 'LIKE', '%' . $search . '%');
                        });
                })
                ->paginate(5);
        
            return view('admin.vokasi', compact('data'));
        }

        

        
        
        public function adminLoker(Request $request)
        {
            $search = $request->input('search');
            $data = Posting::where('posisi', 'LIKE', '%' . $search . '%')->paginate(5);
        
            return view('admin.loker', compact('data'));
        }
        public function unblockUser($id)
    {
        $user = User::find($id);

        if ($user) {
            // Tambahkan logika untuk membuka blokir akun sesuai kebutuhan
            $user->blokir = false; // Contoh: Menggunakan kolom 'blokir' sebagai penanda pembukaan blokir
            $user->save();

            return back()->with('success', 'Akun berhasil dibuka!');
        } else {
            return back()->with('failed', 'Gagal membuka blokir akun!');
        }
    }

    public function blokirUser($id)
    {
        $user = User::find($id);

        if ($user) {
            // Tambahkan logika pemblokiran akun sesuai kebutuhan
            $user->blokir = true; // Contoh: Menggunakan kolom 'blokir' sebagai penanda pemblokiran
            $user->save();

            return back()->with('success', 'Akun berhasil diblokir!');
        } else {
            return back()->with('failed', 'Gagal memblokir akun!');
        }
    }



    public function unblockUserPerusahaan($id)
    {
        $userPerusahaan = User::find($id);

        if ($userPerusahaan) {
            // Tambahkan logika untuk membuka blokir akun sesuai kebutuhan
            $userPerusahaan->blokir = false; // Contoh: Menggunakan kolom 'blokir' sebagai penanda pembukaan blokir
            $userPerusahaan->save();

            return back()->with('success', 'Akun berhasil dibuka!');
        } else {
            return back()->with('failed', 'Gagal membuka blokir akun!');
        }
    }

    public function blokirUserPerusahaan($id)
    {
        $userPerusahaan = User::find($id);

        if ($userPerusahaan) {
            // Tambahkan logika pemblokiran akun sesuai kebutuhan
            $userPerusahaan->blokir = true; // Contoh: Menggunakan kolom 'blokir' sebagai penanda pemblokiran
            $userPerusahaan->save();

            return back()->with('success', 'Akun berhasil diblokir!');
        } else {
            return back()->with('failed', 'Gagal memblokir akun!');
        }
    }
    public function konfirmasiPembayaran($id)
{
    $lamarr = Lamarran::find($id);
    return view('admin.konfirmasiPembayaran', compact('lamarr'));
}

public function postKonfirmasiPembayaran(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'status' => 'required|string',
    ]);

    // Cari lamaran berdasarkan ID
    $lamarr = Lamarran::find($id);

    if (!$lamarr) {
        return redirect()->back()->with('error', 'Lamaran tidak ditemukan');
    }

    // Update status lamaran
    $lamarr->status = $request->status;
    $lamarr->save();

    return redirect()->back()->with('success', 'Status lamaran berhasil diperbarui.');
}

        
}