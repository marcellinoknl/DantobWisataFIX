<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjwisatakabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objwisatakabupaten', function (Blueprint $table) {
            $table->increments('id_obj_wisata_kabupaten');
            $table->string('file_foto');
            $table->string('nama_kab');
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
        Schema::dropIfExists('objwisatakabupaten');
    }
}
