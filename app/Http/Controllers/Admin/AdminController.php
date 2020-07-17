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
        $totalNoticias = count($noticias);
        $totalNoticiasVisibles = count(Noticia::where('status', 'PUBLISHED')->get());

        $totalNoticiasOcultas = count(Noticia::where('status', 'DRAFT')->get());

        $mensajes = Mensaje::All();
        $totalMensajes = count(Mensaje::get());
        $noRespondidos = count(Mensaje::where('status', false)->get());

        $mensajeVentas = MensajeVentas::All();
        $totalMensajesVentas = count(MensajeVentas::get());
        $noRespondidosVentas = count(MensajeVentas::where('status', false)->get());

        return view ("admin.dashboard", [
            'noticias' => $noticias,
            'totalNoticias' => $totalNoticias,
            'totalNoticiasVisibles' => $totalNoticiasVisibles,
            'totalNoticiasOcultas' => $totalNoticiasOcultas,

            'mensajes' => $mensajes,
            'totalMensajes' => $totalMensajes,
            'noRespondidos' => $noRespondidos,

            'mensajeVentas' => $mensajeVentas,
            'totalMensajesVentas' => $totalMensajesVentas,
            'noRespondidosVentas' => $noRespondidosVentas
            ]);

    }
}
