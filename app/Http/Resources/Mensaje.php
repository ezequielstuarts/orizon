<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Mensaje extends JsonResource
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
            'empresa' => $this->empresa,
            'mensaje' => $this->mensaje,
            'status' => $this->status,
            'recibido' => $this->created_at->diffForHumans(),
            'created_at' => $this->created_at->format('d-m-Y')
        ];
    }
}