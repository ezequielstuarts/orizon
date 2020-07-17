<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mensaje;
use App\Http\Resources\Mensaje as Mensajeresource;

class MensajesController extends Controller
{
    public function index()
    {
        $mensajesNoResp = Mensaje::where('status', 'NORESP')->get();
        $mensajesResp = Mensaje::where('status', 'RESP')->get();

        return view('admin.mensajes.dashboard', ['mensajesNoResp' => $mensajesNoResp, 'mensajesResp' => $mensajesResp]);
    }
}
