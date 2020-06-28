<?php

namespace App\Http\Controllers\Admin\api;

use App\Http\Controllers\Controller;
use App\MensajeVentas;
use App\Http\Resources\MensajeVentas as MensajeVentasResource;
use App\Http\Resources\MensajeVentasCollection;
use Illuminate\Http\Request;

class MensajeVentasController extends Controller
{
    protected $mensajeVentas;

    public function __construct(MensajeVentas $mensajeVentas)
    {
        $this->mensajeVentas = $mensajeVentas;
    }

    public function index()
    {
        return response()->json(
            new MensajeVentasCollection($this->mensajeVentas->orderBy('created_at', 'desc')->get())
        );
    }

    public function store(Request $request)
    {
        //
    }

    public function show(MensajeVentas $mensajeVentas)
    {
        return response()->json(new MensajeVentasResource($mensajeVentas));
    }

    public function update(Request $request, MensajeVentas $mensajeVentas)
    {
        $mensajeVentas->update($request->all());
        return response()->json(new MensajeVentasResource($mensajeVentas));
    }

    public function destroy(MensajeVentas $mensajeVentas)
    {
        $mensajeVentas->delete();
        return response()->json(null, 204);
    }
}
