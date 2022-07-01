<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_wisata', function (Blueprint $table) {
            $table->increments('id_fasilitas');
            $table->string('nama_fasilitas');
            $table->text('deskripsi');
            $table->text('lokasi'); 
            $table->integer('views')->default(0);
            $table->string('file_foto');
            $table->integer('id_obj_wisata_kabupaten')->unsigned();
            $table->foreign('id_obj_wisata_kabupaten')->references('id_obj_wisata_kabupaten')->on('objwisatakabupaten')->onDelete('cascade'); 
            $table->integer('id_sampul_fasilitas')->unsigned();
            $table->foreign('id_sampul_fasilitas')->references('id')->on('sampul_fasilitas')->onDelete('cascade'); 
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade'); 
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
        Schema::dropIfExists('fasilitas_wisata');
    }
}
