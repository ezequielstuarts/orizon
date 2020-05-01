<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Noticias extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'date' => $this->date,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'copete' => $this->copete,
            'contenido' => $this->contenido,
            'slug' => $this->slug,
            'status' => $this->status,
            'img' => $this->img,
        ];
    }
}
