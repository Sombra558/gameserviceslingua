<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rompecabeza extends Model
{
    protected $table= 'rompecabezas';
    protected $fillable = [
        'name',
    ];
}