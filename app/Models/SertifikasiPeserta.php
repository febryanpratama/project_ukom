<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SertifikasiPeserta extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function sertifikasi()
    {
        return $this->belongsTo(Sertifikasi::class, 'sertifikasi_id', 'id')->withTrashed();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
