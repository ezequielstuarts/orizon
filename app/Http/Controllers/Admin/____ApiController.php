<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mensaje;
use App\Http\Resources\Mensaje as Mensajeresource;
use App\MensajeVentas;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(new Mensajeresource($mensaje));
    }

    public function getMensajesVentas()
    {
        return datatables()->eloquent(MensajeVentas::query())->toJson();
    }


    public function show(Mensaje $mensaje)
    {
        return $mensaje;
    }

    public function destroy($id)
    {
        //
    }
}
