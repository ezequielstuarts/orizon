<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Noticia;
use App\Mensaje;
use App\MensajeVentas;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        $noticias = Noticia::all();
        $totalNoticiasVisibles = count(Noticia::where('status', 'PUBLISHED')->get());

        $totalNoticiasOcultas = count(Noticia::where('status', 'DRAFT')->get());

        $mensajes = Mensaje::All();
        $totalMensajes = count(Mensaje::get());

        $mensajeVentas = MensajeVentas::All();
        $totalMensajesVentas = count(MensajeVentas::get());

        return view ("admin.dashboard", [
            'noticias' => $noticias,
            'totalNoticiasVisibles' => $totalNoticiasVisibles,
            'totalNoticiasOcultas' => $totalNoticiasOcultas,

            'mensajes' => $mensajes,
            'totalMensajes' => $totalMensajes,

            'mensajeVentas' => $mensajeVentas,
            'totalMensajesVentas' => $totalMensajesVentas
            ]);

    }
}
