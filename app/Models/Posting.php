<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;
    protected $table = 'postings';
protected $fillable = [
    'user_id',
    'foto',
    'posisi',
    'persyaratan',
    'deskripsi',
];
public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
public function profileusaha()
    {
        return $this->belongsTo(Profileusaha::class, 'user_id', 'user_id');
}
// Model Posting
public function pelamar()
{
    return $this->hasMany(Lamarran::class, 'posting_id');
}

}