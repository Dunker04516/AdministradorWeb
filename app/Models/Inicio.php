<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inicio extends Model
{
    use HasFactory;
    protected $table = "inicio"; //Ponemos nombre a la tabla
    protected $fillable = ["titulo", "descripcion", "url", "imagen"];
}