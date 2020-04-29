<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public $table = "noticias";
    public $primarykey = "id";
    protected $fillable = [
        'date', 'title', 'subtitle', 'copete', 'contenido', 'img','status'];
}
