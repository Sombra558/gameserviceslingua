<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Silueta extends Model
{
    protected $table = 'siluetas';
    protected $fillable = [
        'name',
    ];
}