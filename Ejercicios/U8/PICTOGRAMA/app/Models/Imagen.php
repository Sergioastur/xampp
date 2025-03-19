<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imagen extends Model
{
    use HasFactory;

    protected $table = 'imagenes'; // Nombre de la tabla en la BD
    protected $primaryKey = 'idimagenes'; // Clave primaria (por defecto "id")
    

}
