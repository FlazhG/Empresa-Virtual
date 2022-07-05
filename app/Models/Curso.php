<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  use HasFactory;
  protected $primaryKey = 'id_curso';
  protected $fillable = [
    'id_curso',
    'nombre_curso',
    'descripcion',
    'precio',
    'clases',
    'id'
  ];
}
