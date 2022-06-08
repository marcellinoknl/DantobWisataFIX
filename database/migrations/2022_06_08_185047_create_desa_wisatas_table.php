<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesaWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa_wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa');
            $table->text('deskripsi');
            $table->string('file_foto');
            $table->integer('id_obj_wisata_kabupaten')->unsigned();
            $table->foreign('id_obj_wisata_kabupaten')->references('id_obj_wisata_kabupaten')->on('objwisatakabupaten')->onDelete('cascade'); 
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
        Schema::dropIfExists('desa_wisatas');
    }
}
