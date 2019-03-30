<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penulis;
use Illuminate\Support\Facades\Input;

class controllerPenulis extends Controller
{
    public function read(){
        $dataPenulis = penulis::all();
        return view('penulis', ['penulisBanyak' => $dataPenulis]);
    }
    public function create(){
        $penulis = new penulis;
        $penulis->penulis = Input::get('penulis');
        $penulis->save();
    }
    public function update(){
        $penulis = penulis::find(Input::get('id'));
        $penulis->penulis = Input::get('penulis');
        $penulis->save();
    }
    public function delete(){
        $penulis = penulis::find(Input::get('id'));
        $penulis->delete();
    }
}
