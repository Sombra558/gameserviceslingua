<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gamerecursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Label',250);
            $table->text('Image')->nullable();
            $table->text('Audio')->nullable();
            $table->unsignedbigInteger('rompecabeza_id');
            $table->foreign('rompecabeza_id')->references('id')->on('rompecabezas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recursos');
    }
}
