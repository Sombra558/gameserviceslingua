<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Memoramarecursos extends Migration
{
    public function up()
    {
        Schema::create('memoramarecursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Label',250);
            $table->text('Image')->nullable();
            $table->text('Audio')->nullable();
            $table->text('idioma')->nullable();
            $table->unsignedbigInteger('memorama_id');
            $table->foreign('memorama_id')->references('id')->on('memorama')->onDelete('cascade');
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('memoramarecursos');
    }
}
