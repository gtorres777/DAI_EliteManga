<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**Schema::create('mangas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
        */
    }

   
    public function down()
    {
        Schema::dropIfExists('mangas');
    }
}
