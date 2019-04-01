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
        return view('bikinPenulis');
    }
    public function edit(){
        $idPenulis = Input::get('id');
        $penulis = penulis::find($idPenulis);
        return view('editPenulis', ['penulis' => $penulis]);
    }
    public function prosesBikin(Request $request){
        //ngambil data nama penulis dari POST
        //$_POST['namaPenulis']
        $namaPenulisBaru = $request->input('namaPenulis');
        
        //buat model penulis
        $penulisBaru = new penulis;
        $penulisBaru->penulis = $namaPenulisBaru;
        //INSERT INTO penulis (penulis) VALUES ($namaPenulisBaru);
        $penulisBaru->save();
        
        return $this->read();
    }
    public function prosesEdit(){
        $id = Input::get('id');
        $namaEdit = Input::get('namaPenulis');
        //cari di database
        $penulis = penulis::find($id);
        $penulis->penulis = $namaEdit;

        $penulis->save();

        return $this->read();

    }
    public function prosesHapus(){
        $idHapus = Input::get('id');
        $penulisHapus = penulis::find($idHapus);
        //DELETE penulis WHERE id=$idHapus
        $penulisHapus->delete();

        return $this->read();
    }
    public function update(){
        $penulis = penulis::find(Input::get('id'));
        $penulis->penulis = Input::get('penulis');
        $penulis->save();
    }
    // public function delete(){
    //     $penulis = penulis::find(Input::get('id'));
    //     $penulis->delete();
    // }
}
