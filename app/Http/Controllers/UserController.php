<?php

namespace App\Http\Controllers;

use App\Models\Profiluser;
use App\Models\User;
use App\Models\Posting;
use App\Models\postloker;
use App\Models\Lamarr;
use App\Models\Lamarran;
use App\Models\Profilpelamar;
use App\Models\Profileusaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    // perusahaan..................................................
    public function userPerusahaantambahPerusahaan()
    {
        return view('admin.tambahPerusahaan');
    }

    public function postTambahPerusahaan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jenisKelamin' => 'required',
            'password' => 'required|min:8|max:20|confirmed',
            'email' => 'required|email|unique:users,email', 
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->level = 'userPerusahaan';
        $user->email = $request->email;
        $user->jenis_kelamin = $request->jenisKelamin;
        $user->password = Hash::make($request->password);
        $user->save();

        if ($user) {
            return back()->with('success', 'Perusahaan baru berhasil ditambah!');
        } else {
            return back()->with('failed', 'Gagal menambah perusahaan baru!');
        }
    }


    // public function userPerusahaanHome(Request $request)
    // {

    //     return view('userPerusahaan.home', compact('data'));
    // }
    public function userPerusahaandetailPostingan(Request $request)
    {
        return view('userPerusahaan.detailPostingan', compact('data'));
    }

    public function profile()
    {
        $user = auth()->user();
        $profileusahas = Profileusaha::where('user_id', $user->id)->first();

        if ($profileusahas) {
            // Tampilkan informasi profil usaha
            return view('userPerusahaan.profile', ['data' => $profileusahas]);
        } else {
            // Profil usaha tidak ditemukan
            return redirect('/userPerusahaan/home')->with('info', 'Profil usaha tidak ditemukan.');
        }
    }

    //POSTINGAN DISINI
    public function tambahPostingan()
    {
        return view('userPerusahaan.tambahPostingan');
    }

    public function postTambahPostingan(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|max:5120',
            'posisi' => 'required',
            'persyaratan' => 'required',
            'deskripsi' => 'required',

        ]);
        $user = auth()->user();

        $postings = new Posting;
        $postings->user_id = $user->id;
        

        $postings->posisi = $request->posisi;
        $postings->persyaratan = $request->persyaratan;
        $postings->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('news_images/', $filename);
            $postings->foto = $filename;
        }
        $postings->save();
        if ($postings) {
            return back()->with('success', 'postingan baru berhasil 
            ditambahkan!');
        } else {
            return back()->with('failed', 'Data gagal ditambahkan!');
        }
    }

    public function editPostingan($id)

    {
        $data = Posting::find($id);
        return view('userPerusahaan.editPostingan', compact('data'));
    }

    public function postEditPostingan(Request $request, $id)
    {
        $request->validate([
            'foto' => 'image|nullable|max:5120',
            'posisi' => 'required',
            'persyaratan' => 'required',
            'deskripsi' => 'required',
            // Add other validation rules for your fields
        ]);

        $posting = Posting::find($id);
        $posting->posisi = $request->posisi;
        $posting->persyaratan = $request->persyaratan;
        $posting->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $filepath = 'news_images/' . $posting->foto;
            if (File::exists($filepath)) {
                File::delete($filepath);
            }
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('news_images/', $filename);
            $posting->foto = $filename;
        }

        $posting->save();

        if ($posting) {
            return back()->with('success', 'Data postingan berhasil di update!');
        } else {
            return back()->with('failed', 'Gagal mengupdate data postingan!');
        }
    }
    public function deletePostingan($id)
    {
        $posting= Posting::find($id);
        $filepath = 'news_images/' . $posting->foto;
        if (File::exists($filepath)) {
            File::delete($filepath);
        }
        $posting->delete();
    
        if ($posting) {
            return back()->with('success', 'Data lulusan berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data lulusan!');
        }
    }

    public function userPerusahaanPostingan()
    {
        $user = auth()->user();
        $postings = Posting::where('user_id', $user->id)->get();

        if ($postings) {
            // Tampilkan informasi profil usaha
            return view('userPerusahaan.postingan', ['data' => $postings]);
        } else {
            // Profil usaha tidak ditemukan
            return redirect('/userPerusahaan/home')->with('info', 'Profil usaha tidak ditemukan.');
        }
    }
    
   
    public function pelamar(Posting $posting)
    {
       
        $pelamar = $posting->pelamar; 
        return view('userPerusahaan.pelamar', compact('pelamar', 'posting'));
    }
    public function userPerusahaanHome(Request $request) {
        $search = $request->input('search');
        $data = Posting::where('posisi', 'LIKE', '%' . $search . '%')->paginate(5);
        return view('userPerusahaan.home', compact('data'));
    }







     //pelamar.........................................................
     public function userHome(Request $request) {
        $search = $request->input('search');
        $data = Posting::where('posisi', 'LIKE', '%' . $search . '%')->paginate(5);
        return view('user.home', compact('data'));
    }
    
     public function userPostingan(Request $request) {
        $search = $request->input('search');
        $data = Posting::where('posisi', 'LIKE', '%' . $search . '%')->paginate(5); // 
        return view('user.Postingan', compact('data'));
    }
     public function userdetail(Request $request)
     {
         return view('user.detail', compact('data'));
     }
     public function profillamar()
     {
         $user = auth()->user();
         $profilepelamar = Profilpelamar::where('user_id', $user->id)->first();
 
         if ($profilepelamar) {
             // Tampilkan informasi profil usaha
             return view('user.profilPelamar', ['data' => $profilepelamar]);
         } else {
             // Profil usaha tidak ditemukan
             return redirect('/user/home')->with('info', 'Profil usaha tidak ditemukan.');
         }
     }


public function lamar(Posting $posting)
{
    return view('user.lamar', ['posting' => $posting]);
}
public function postLamar(Request $request, $posting)
{
    // Validasi input
    $request->validate([
        'ijazah' => 'file|mimes:pdf,doc,docx|max:2048',
        'surat' => 'file|mimes:pdf,doc,docx|max:2048',
        'keterangan' => 'required|string',
    ]);

    $posting = Posting::find($posting);

    if (!$posting) {
        return redirect()->back()->with('error', 'Posting tidak ditemukan');
    }

    // Ambil user ID dari pengguna yang sedang melakukan lamaran
    $user = auth()->user();

    $lamarr = new Lamarran;
    $lamarr->posting_id = $posting->id;
    $lamarr->user_id = $user->id;
    $lamarr->keterangan = $request->keterangan;
    $lamarr->status = 'sedang diproses';
    $lamarr->pembayaran = null;
    $lamarr->suratpemanggilan = null;

    if ($request->hasFile('ijazah')) {
        $ijazahPath = $request->file('ijazah')->store('ijazah', 'public');
        $lamarr->ijazah = $ijazahPath;
    }

    // Upload file surat jika diunggah
    if ($request->hasFile('surat')) {
        $suratPath = $request->file('surat')->store('surat', 'public');
        $lamarr->surat = $suratPath;
    }

    // Simpan lamaran
    $lamarr->save();

    return redirect()->back()->with('success', 'Data lamaran berhasil dikirim.');
}

//detail postingan
public function userDetailPost($id)
{
    $posting = Posting::find($id);

    return view('user.detailPost', compact('posting'));
}




// ----------------------------------------------------------------------------riwayat
public function userRiwayat()
{
    $user = auth()->user();
    $lamarr = Lamarran::with('posting')->where('user_id', $user->id)->get();

   

    $lamarr->each(function ($item) {
        $item->isDiterima = $item->status === 'Lamaran diterima';
    });

    return view('user.Riwayat', ['data' => $lamarr]);
}

public function Pembayaran($id){
    $lamarr = Lamarran::find($id);
    return view('user.pembayaran', compact('lamarr'));
}
public function postPembayaran(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'pembayaran' => 'file|mimes:pdf,doc,docx|max:2048',
    ]);

    // Ambil lamaran berdasarkan ID
    $lamarr = Lamarran::find($id);

    if (!$lamarr || $lamarr->status != 'Lamaran diterima') {
        return redirect()->back()->with('error', 'Lamaran tidak ditemukan atau bukan dalam status Lamaran Diterima');
    }
    
    // Upload file bukti pembayaran (foto)
    $buktiPembayaranPath = $request->file('pembayaran')->store('pembayaran', 'public');
    $lamarr->pembayaran = $buktiPembayaranPath;
    $lamarr->save();

    return redirect()->back()->with('success', 'Bukti pembayaran berhasil diunggah. Lamaran diterima.');
}

//...........................................................................konfirmasi
public function konfirmasi($id)
{
    $lamarr = Lamarran::find($id);
    return view('userPerusahaan.konfirmasi', compact('lamarr'));
}
public function postKonfirmasi(Request $request, $id)
{
    // Validasi input form
    $request->validate([
        'status' => 'required|in:Pemanggilan Interview,Lamaran diterima,Lamaran Ditolak',
        'suratpemanggilan' => 'nullable|mimes:pdf,doc,docx|max:2048',
    ]);

    // Ambil data lamaran berdasarkan ID
    $lamarr = Lamarran::findOrFail($id);

    // Update status lamaran
    $lamarr->status = $request->input('status');

    // Jika status adalah 'Lamaran diterima' dan ada file surat pemanggilan
    if ($request->input('status') == 'Lamaran diterima' && $request->hasFile('suratpemanggilan')) {
        // Simpan file surat pemanggilan ke dalam direktori storage tanpa menyertakan nama file
        $suratPemanggilanPath = $request->file('suratpemanggilan')->store('suratpemanggilan', 'public');
    
        // Simpan nama file surat pemanggilan ke dalam database
        $lamarr->suratpemanggilan = $suratPemanggilanPath;
    }
    

    // Simpan perubahan
    $lamarr->save();

    // Redirect atau response sesuai kebutuhan Anda
    return redirect()->back()->with('success', 'Konfirmasi lamaran berhasil disimpan');
}


// public function postKonfirmasi(Request $request, $id)
// {
//     // Validasi input
//     $request->validate([
//         'status' => 'required|string',
//     ]);

//     // Cari lamaran berdasarkan ID
//     $lamarr = Lamarran::find($id);

//     if (!$lamarr) {
//         return redirect()->back()->with('error', 'Lamaran tidak ditemukan');
//     }

//     $lamarr->status = $request->status;
//     $lamarr->save();

//     return redirect()->back()->with('success', 'Status lamaran berhasil diperbarui.');
// }

// edit
public function editProfilPelamar($id)
    {
        $data = Profilpelamar::findOrFail($id);

        return view('user.editProfilPelamar', compact('data'));
    }
public function postEditProfilePelamar(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|max:5120',
            'asal_lembaga' => 'required',
            'jenjang_pendidikan' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'keahlian' => 'required',
            'status' => 'required',
           
            'name' => 'required|string|max:255', // Tambahkan validasi untuk nama
        ]);

        $profilepelamar = Profilpelamar::findOrFail($request->id);


        $profilepelamar->asal_lembaga = $request->asal_lembaga;
        $profilepelamar->jenjang_pendidikan = $request->jenjang_pendidikan;
        $profilepelamar->jk = $request->jk;
        $profilepelamar->alamat = $request->alamat;
        $profilepelamar->status = $request->status;
       
        $profilepelamar->keahlian = $request->keahlian;
        $profilepelamar->user->name = $request->name;


        if ($request->hasFile('gambar')) {
            // Proses upload gambar
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/pelamar_images'), $imageName);
            $profilepelamar->gambar = $imageName;
        }
        
        $profilepelamar->user->save();
        $profilepelamar->save();

        if ($profilepelamar) {
            return back()->with('success', 'Data profil berhasil di update!');
        } else {
            return back()->with('failed', 'Gagal mengupdate data postingan!');
        }
    }




    // edit
public function editProfilPerusahaan($id)
{
    $data = Profileusaha::findOrFail($id);

    return view('userPerusahaan.editProfilPerusahaan', compact('data'));
}
public function postEditProfilePerusahaan(Request $request)
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

    $profileusahas = Profileusaha::findOrFail($request->id);
    $profileusahas->jenis_bidang_perusahaan = $request->jenis_bidang_perusahaan;
    $profileusahas->alamat = $request->alamat;
    $profileusahas->kontak = $request->kontak;
    $profileusahas->deskripsi_perusahaan = $request->deskripsi_perusahaan;
    $profileusahas->visi = $request->visi;
    $profileusahas->misi = $request->misi;
    $profileusahas->user->name = $request->name;


    if ($request->hasFile('gambar')) {
        // Proses upload gambar
        $file = $request->file('gambar');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('/usaha_images'), $fileName);
        $profileusahas->gambar = $fileName;
    }
    

    $profileusahas->user->save();
    $profileusahas->save();

    if ($profileusahas) {
        return back()->with('success', 'Data profil berhasil di update!');
    } else {
        return back()->with('failed', 'Gagal mengupdate data postingan!');
    }

}
    
}
