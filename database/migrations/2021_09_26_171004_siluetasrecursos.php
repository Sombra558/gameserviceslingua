<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siluetasrecursos extends Migration
{
    public function up()
    {
        Schema::create('siluetasrecursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Label',250);
            $table->text('Image')->nullable();
            $table->text('Audio')->nullable();
            $table->text('idioma')->nullable();
            $table->unsignedbigInteger('silueta_id');
            $table->foreign('silueta_id')->references('id')->on('siluetas')->onDelete('cascade');
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('siluetasrecursos');
    }
}
