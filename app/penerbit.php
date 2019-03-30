<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penerbit extends Model
{
    protected $table = 'penerbit';
    public function buku(){
        return $this->hasMany('App\buku', 'id_penerbit', 'id');
    }
}
