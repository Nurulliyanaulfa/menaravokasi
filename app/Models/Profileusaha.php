<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profileusaha extends Model
{
    use HasFactory;
    protected $table = 'profileusahas'; // Sesuaikan dengan nama tabel yang Anda gunakan

    protected $fillable = [
        'user_id',
        'gambar',
        'jenis_bidang_perusahaan',
        'alamat',
        'kontak',
        'deskripsi_perusahaan',
        'visi',
        'misi',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}