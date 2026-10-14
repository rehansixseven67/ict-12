<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Broken extends Model
{
    protected $fillable = [
        'nama_alat',
        'deskripsi',
        'image',
        'status',
    ];
}
