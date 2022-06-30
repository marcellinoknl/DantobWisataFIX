<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSosialMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sosial_media', function (Blueprint $table) {
            $table->increments('id');
            $table->string('facebook')->default('https://www.facebook.com/profile.php?id=100082362470457');
            $table->string('instagram')->default('https://www.instagram.com/toba.journey/?hl=id');
            $table->string('twitter')->default('https://twitter.com/wisatadantob');
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
        Schema::dropIfExists('sosial_media');
    }
}
