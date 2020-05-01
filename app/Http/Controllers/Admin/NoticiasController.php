<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoticiaStoreRequest;
use App\Http\Requests\NoticiaUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Noticia;

use App\Http\resources\Noticias as NoticiasResource;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = $request['titleSearch'];
        

        $ruta = '/storage/imagenes/img_noticias';
        $totalNoticias = count(Noticia::get());
        
        $noticias = Noticia::where('status', 'PUBLISHED')->orderBy('date', 'desc')
        ->title($title)->get();

        return view('admin.noticias.index', ['noticias' => $noticias, 'ruta' => $ruta, 'totalNoticias' => $totalNoticias, 'title' => $title]);
    }
    
    public function ocultas()
    {
        $ruta = '/storage/imagenes/img_noticias';
        $noticias = Noticia::where('status', 'DRAFT')->orderBy('created_at', 'desc')->get();
        return view('admin.noticias.noticias-ocultas', ['noticias' => $noticias, 'ruta' => $ruta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            "date" => "required",
            "title" => "required",
            'img' => 'required|file|mimes:jpg,jpeg,png'
        ];
        $mensajes = [
            "required" => "Debe ingresar :attribute de la noticia.",
        ];
        
        $this->validate($request, $reglas, $mensajes);

        $noticia = Noticia::create($request->all());
        $carpeta = 'imagenes/img_noticias';
        $rutaImg = $request->file("img")->store($carpeta, 'public');
        $nombreImg = basename($rutaImg);
        $noticia->img = $nombreImg;
        $noticia->slug = str_slug($request["title"]);
        
        $noticia->save();
        return redirect('admin/noticias')->with('info', 'Noticia creada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ruta = '/storage/imagenes/img_noticias';
        $noticia = Noticia::find($id);
        return view('admin.noticias.show', ['noticia' => $noticia, 'ruta' => $ruta]);
    }

   
   
    public function edit($id)
    {
        $ruta = '/storage/imagenes/img_noticias';
        $noticia = Noticia::find($id);
        return view('admin.noticias.edit', ['noticia' => $noticia, 'ruta' => $ruta]);
    }

   
    public function update(Request $request, $id)
    {
        $reglas = [
            "title" => "required|string",
        ];
        $mensajes = [
            "string" => "El campo :attribute debe ser un nombre.",
            "required" => "El campo :attribute es necesario.",
        ];

        $this->validate($request, $reglas, $mensajes);

        $noticia = Noticia::find($id);
        $diff = array_diff($request->toArray(), $noticia->toArray());

        if ($request->has('img')) {

            $basename_preview = basename($request->file("img")->store('public/imagenes/img_noticias/'));

            $img = $noticia['img'];
            Storage::delete('public/imagenes/img_noticias/'.$img);
            $diff["img"] = $basename_preview;
        }

        $diff['slug'] = str_slug($request["title"]);
        $noticia->update($diff);
        return redirect('admin/noticias')->with('info', 'Noticia Actualizada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function ocultar($id)
    {
        $noticia = Noticia::find($id);
        $noticia->status = 'DRAFT';
        $noticia->save();
        return back()->with('info', 'Noticia Ocultada.');
    }
    
    public function mostrar($id)
    {
        $noticia = Noticia::find($id);
        $noticia->status = 'PUBLISHED';
        $noticia->save();
        return back()->with('info', 'Noticia Mostrada.');
    }
    
    public function destroy($id)
    {
        $noticia = Noticia::find($id);
        $img = $noticia['img'];
        
        Storage::delete('public/imagenes/img_noticias/'.$img);
        
        $noticia->delete();
        return redirect('admin/noticias-ocultas')->with('info', 'Noticia Eliminada');
    }

    public function getNoticias()
    {
        $noticias = Noticia::all();
        if($noticias)
        {
            return NoticiasResource::collection($noticias);
        }
        else
        {
            return response()->json(['Error' => 'Algo salió mal'], 404);
        }
        
    }
}
