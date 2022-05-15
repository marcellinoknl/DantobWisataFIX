<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_wisatas', function (Blueprint $table) {
            $table->id('id_event');
            $table->string('judul_event');
            $table->text('deskripsi_event');
            $table->string('file_foto');
            $table->integer('id_sampul_event')->unsigned();
            $table->foreign('id_sampul_event')->references('id')->on('sampul_event')->onDelete('cascade');
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
        Schema::dropIfExists('event_wisatas');
    }
}
