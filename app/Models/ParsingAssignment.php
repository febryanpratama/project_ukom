<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParsingAssignment extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function assesment()
    {
        return $this->belongsTo(Assesment::class, 'assesment_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class, 'periode_id', 'id');
    }
}
