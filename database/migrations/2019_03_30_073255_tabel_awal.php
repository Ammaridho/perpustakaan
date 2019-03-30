<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelAwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table){
            $table->increments('id');
            $table->string ('judul');
            $table->integer('id_kategori');
            $table->integer('tahun');
            $table->integer('id_penerbit');
            $table->timestamps();
        });

        Schema::create('kategori', function (Blueprint $table){
            $table->increments('id');
            $table->string('kategori');
            $table->timestamps();
        });

        Schema::create('penulis', function (Blueprint $table){
            $table->increments('id');
            $table->string ('penulis');
            $table->timestamps();
        });

        Schema::create('buku_penulis', function (Blueprint $table){
            $table->increments('id');
            $table->integer('buku');
            $table->integer('id_penulis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
        Schema::dropIfExists('kategori');
        Schema::dropIfExists('penulis');
        Schema::dropIfExists('buku_penulis');
    }
}
