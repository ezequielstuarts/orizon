<?php

namespace App\Http\Controllers\Admin\api;

use App\Http\Controllers\Controller;
use App\MensajeVentas;
use App\Http\Resources\MensajeVentas as MensajeVentasResource;
use App\Http\Resources\MensajeVentasCollection;
use Illuminate\Http\Request;

class MensajeVentasController extends Controller
{
    protected $mensajesVenta;

    public function __construct(MensajeVentas $mensajesVenta)
    {
        $this->mensajesVenta = $mensajesVenta;
    }

    public function index()
    {
        return response()->json(
            new MensajeVentasCollection($this->mensajesVenta->orderBy('created_at', 'desc')->get())
        );
    }

    public function store(Request $request)
    {
        //
    }

    public function show(MensajeVentas $mensajesVenta)
    {
        return response()->json(new MensajeVentasResource($mensajesVenta));
    }

    public function update(Request $request, MensajeVentas $mensajesVenta)
    {
        $mensajesVenta->update($request->all());
        return response()->json(new MensajeVentasResource($mensajesVenta));
    }

    public function destroy(MensajeVentas $mensajesVenta)
    {
        $mensajesVenta->delete();
        return response()->json(null, 204);
    }
}
