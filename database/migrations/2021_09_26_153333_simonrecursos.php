<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Simonrecursos extends Migration
{
    
    public function up()
    {
        Schema::create('simonrecursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Label',250);
            $table->text('Image')->nullable();
            $table->text('Audio')->nullable();
            $table->text('idioma')->nullable();
            $table->unsignedbigInteger('simondice_id');
            $table->foreign('simondice_id')->references('id')->on('simondice')->onDelete('cascade');
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('simonrecursos');
    }
}
