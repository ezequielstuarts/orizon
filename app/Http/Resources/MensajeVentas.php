<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MensajeVentas extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'pais' => $this->pais,
            'provincia' => $this->provincia,
            'localidad' => $this->localidad,
            'razon' => $this->razon,
            'mensaje' => $this->mensaje,
            'status' => $this->status,
            'recibido' => $this->created_at->diffForHumans(),
            'created_at' => $this->created_at->format('d-m-Y')
        ];
    }
}