<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjekWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objek_wisata', function (Blueprint $table) {
            $table->increments('id_obj_wisata');
            $table->string('nama_wisata');
            $table->string('deskripsi');
            $table->string('file_foto');
            $table->integer('id_obj_wisata_kabupaten')->unsigned();
            $table->foreign('id_obj_wisata_kabupaten')->references('id_obj_wisata_kabupaten')->on('objwisatakabupaten')->onDelete('cascade'); 
            $table->integer('id_kat_wisata')->unsigned();
            $table->foreign('id_kat_wisata')->references('id_kategori')->on('kategori_wisata')->onDelete('cascade'); 
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
        Schema::dropIfExists('objek_wisata');
    }
}
