<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MensajeVentas extends Model
{
    public $table = "mensajes_venta";
    protected $fillable = [
        'nombre', 'telefono', 'email', 'pais', 'provincia', 'localidad', 'razon', 'mensaje'];
}
