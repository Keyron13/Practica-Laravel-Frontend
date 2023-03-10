<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'articulos';
    public $fillable=['nombre','descripcion'];

}
