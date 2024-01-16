<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profilpelamar extends Model
{
    use HasFactory;
    protected $table = 'pelamars'; // Sesuaikan dengan nama tabel yang Anda gunakan

    protected $fillable = [
        'user_id',
        'gambar',
        'asal_lembaga',
        'jenjang_pendidikan',
        'jk',
        'ttl',
        'alamat',
        'status',
        
        'keahlian',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}