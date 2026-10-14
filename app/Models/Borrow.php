<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = [
        'image',
        'nama_siswa',
        'kelas',
        'borrow_id',
    ];

    public function ready()
    {
        return $this->belongsTo(Ready::class, 'borrow_id',
        'id_borrow');
    }
}
