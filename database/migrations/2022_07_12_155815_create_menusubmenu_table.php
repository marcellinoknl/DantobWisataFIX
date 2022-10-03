<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusubmenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menusubmenu', function (Blueprint $table) {
            $table->id();
            $table->text("content")->nullable();
            $table->string("name");
            $table->bigInteger("parent")->unsigned()->nullable();
            $table->boolean("is_parent");
            $table->string("deskripsi");
            $table->timestamps();
            $table->foreign("parent")->references("id")->on("menusubmenu")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menusubmenu');
    }
}
