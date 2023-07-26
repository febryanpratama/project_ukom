<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankAssesment extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function soal()
    {
        return $this->hasMany(SoalAssesment::class, 'bank_soal_id', 'id');
    }
}
