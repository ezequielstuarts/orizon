<?php

namespace App\Http\Controllers\Admin\api;

use App\Http\Controllers\Controller;
use App\Mensaje;
use App\Http\Resources\Mensaje as MensajeResource;
use App\Http\Resources\MensajeCollection;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    protected $mensaje;

    public function __construct(Mensaje $mensaje)
    {
        $this->mensaje = $mensaje;
    }

    public function index()
    {
        return response()->json(
            new MensajeCollection($this->mensaje->orderBy('created_at', 'desc')->get())
        );
    }

    public function show(Mensaje $mensaje)
    {
        return response()->json(new MensajeResource($mensaje));
    }

    public function update(Request $request, Mensaje $mensaje)
    {
        $mensaje->update($request->all());
        return response()->json(new MensajeResource($mensaje));
    }

    public function destroy(Mensaje $mensaje)
    {
        $mensaje->delete();
        return response()->json(null, 204);
    }

}
