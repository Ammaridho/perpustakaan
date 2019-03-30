<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;

class controllerBuku extends Controller
{
    public function list(){
        $dataBuku = buku::all();
        return view('buku', ['bukuBanyak' => $dataBuku]);
    }
}
