<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mochilarecursos extends Migration
{
    public function up()
    {
        Schema::create('mochilarecursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Label',250);
            $table->text('Image')->nullable();
            $table->text('Audio')->nullable();
            $table->text('idioma')->nullable();
            $table->unsignedbigInteger('mochila_id');
            $table->foreign('mochila_id')->references('id')->on('mochila')->onDelete('cascade');
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('mochilarecursos');
    }
}
