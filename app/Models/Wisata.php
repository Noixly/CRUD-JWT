<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata';
    public $timestamps = false;

    /**
     * Daftar atribut yang bisa diisi massal.
     *
     * @var array
     */
    protected $fillable = [
        'kota', 
        'landmark',
        'tarif'
    ];

    /**
     * Atribut yang disembunyikan dalam format JSON model.
     *
     * @var array
     */
    protected $hidden = [];
}