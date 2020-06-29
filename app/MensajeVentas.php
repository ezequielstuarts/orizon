<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MensajeVentas extends Model
{
    public $table = "mensajes_venta";
    public $primarykey = "id";
    protected $fillable = [
        'nombre', 'telefono', 'email', 'pais', 'provincia', 'localidad', 'razon', 'mensaje', 'status'];
}
