<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    public function buku(){
        return $this->hasMany('App\buku', 'id_kategori');
    }
}
