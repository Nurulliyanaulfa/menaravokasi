<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    protected $table = 'postingans';
protected $fillable = [
    'perusahaan_id',
    'foto',
    'posisi',
    'persyaratan',
    'deskripsi',
];
public function perusahaan()
    {
        return $this->belongsTo(Profileusaha::class, 'perusahaan_id');
    }
}