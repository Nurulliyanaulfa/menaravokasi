<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamarran extends Model
{
    use HasFactory;

    protected $table = 'lamarrans';

    protected $fillable = [
        'user_id',
        'posting_id',
        'ijazah',
        'surat',
        'keterangan',
        'status', 
        'pembayaran',
        'suratpemanggilan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function posting()
    {
        return $this->belongsTo(Posting::class, 'posting_id');
    }
    protected $appends = ['isDiterima'];

    public function getIsDiterimaAttribute()
    {
        return $this->attributes['status'] === 'Lamaran diterima';
    }
    
   

}
