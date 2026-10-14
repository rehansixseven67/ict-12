<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ready extends Model
{
    protected $primaryKey ='id_borrow';
    protected $fillable = [ 'id_borrow',
        'nama_alat',
        'jumlah',
        'image',
    ];

    public function borrows()
    {
        return $this->hasMany(Borrow::class, 'borrow_id', 'id_borrow');
    }
}
