<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_wisata', function (Blueprint $table) {
            $table->increments('id_berita');
<<<<<<< HEAD
            $table->string('judul_berita')->nullable();
=======
            $table->string('judul_berita');
>>>>>>> c9819573eb4ad6f9c87daee1db5f52830b53ebed
            $table->longtext('isi_berita');
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
        Schema::dropIfExists('berita_wisata');
    }
}
