<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'copete', 'contenido', 'slug', 'img','status'];
}
