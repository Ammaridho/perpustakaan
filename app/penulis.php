<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    protected $table = 'penulis';
    public function buku(){
        return $this->belongsToMany('App\buku', 'buku_penulis', 'id_penulis', 'buku');
    }
}
