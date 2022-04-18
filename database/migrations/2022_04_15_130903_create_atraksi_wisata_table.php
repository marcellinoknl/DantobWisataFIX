<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtraksiWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atraksi_wisata', function (Blueprint $table) {
            $table->increments('atraksi_id');
            $table->string('judul')->nullable();
            $table->text('deskripsi');
            $table->string('file_foto');
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
        Schema::dropIfExists('atraksi_wisata');
    }
}
