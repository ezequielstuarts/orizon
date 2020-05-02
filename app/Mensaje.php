<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    public $table = "mensajes";
    protected $fillable = [
        'nombre', 'telefono', 'email', 'pais', 'provincia', 'localidad', 'empresa', 'mensaje'];
}
