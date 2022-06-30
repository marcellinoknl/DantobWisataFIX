<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDesaWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_desa_wisatas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_desawisata')->unsigned();
            $table->foreign('id_desawisata')->references('id')->on('desa_wisatas')->onDelete('cascade'); 
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_desa_wisatas');
    }
}
