<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Carbon\Carbon;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::orderBy('created_at', 'desc')->paginate(2);
        
        return view('novedades', ['noticias' => $noticias]);
    }

}
