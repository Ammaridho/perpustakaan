<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    //
    protected $table = 'buku';
    
    public function penerbit(){
        return $this->belongsTo('App\penerbit', 'id_penerbit');
    }
    public function penulis(){
        return $this->belongsToMany('App\penulis', 'buku_penulis', 'buku', 'id_penulis');
    }
    public function kategori(){
        return $this->belongsTo('App\kategori', 'id_kategori');
    }
}
    