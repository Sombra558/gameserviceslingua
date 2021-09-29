<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Memorama extends Migration
{
    public function up()
    {
        Schema::create('memorama', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
        });
    }
    public function down()
    {
        Schema::dropIfExists('memorama');
    }
}
