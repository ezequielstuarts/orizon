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
        $title = $request->get('titleSearch');

        $ruta = '/storage/imagenes/img_noticias';
        $totalNoticias = count(Noticia::get());

        $noticias = Noticia::where('status', 'PUBLISHED')->orderBy('date', 'DESC')
        ->title($title)->get();

        return view('admin.noticias.index', ['noticias' => $noticias, 'ruta' => $ruta, 'totalNoticias' => $totalNoticias, 'title' => $title]);
    }

    public function ocultas()
    {
        $ruta = '/storage/imagenes/img_noticias';
        $noticias = Noticia::where('status', 'DRAFT')->orderBy('date', 'DESC')->get();
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
    public function store(NoticiaStoreRequest $request)
    {
        $noticia = new Noticia();
        $noticia->title = $request['title'];
        $slug = str_slug($request["title"]);
        $noticia->slug;

        if(isset($request['subtitle'])){
            $noticia->subtitle = $request['subtitle'];
        }
        if(isset($request['copete'])){
            $noticia->copete = $request['copete'];
        }
        if(isset($request['contenido'])){
            $noticia->contenido = $request['contenido'];
        }
        if($request->hasFile("img")) {
            $carpeta = '/public/imagenes/img_noticias';
            $nombreImg = $slug.'-'.time();
            $extension = $request->file('img')->extension();
            $file = $request->file("img")->storeAs($carpeta,$nombreImg.'.'.$extension);
            $noticia->img = $nombreImg.'.'.$extension;
        }
        $date = Carbon::createFromFormat('d-m-Y', $request->date)->toDateString();
        $noticia->date = $date;


        $noticia->save();
        $noticias = Noticia::all();
        $last = $noticias->last();
        return redirect()->route('noticias.show', $last->id)->with('info', 'Noticia creada');
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


    public function update(NoticiaUpdateRequest $request, $id)
    {
        $reglas = [
            "title" => "required|string",
            "img" => "image | mimes:jpg,jpeg,png",
        ];
        $mensajes = [
            "string" => "El campo :attribute debe ser un nombre.",
            "required" => "El campo :attribute es necesario.",
        ];

        $this->validate($request, $reglas, $mensajes);

        $noticia = Noticia::find($id);
        $diff = array_diff($request->toArray(), $noticia->toArray());

        if ($diff['date']) {
            $date = Carbon::createFromFormat('d-m-Y', $request->date)->toDateTimeString();
            $diff['date'] = $date;
        }

        if ($request->has('title')){
            $diff['slug'] = str_slug($request["title"]);
        }
        if ($request->has('img')) {
            $img = $noticia['img'];
            $carpeta = '/public/imagenes/img_noticias/';
            Storage::delete($carpeta.$img);
            $nombreImg = $noticia['slug'].'-'.time();
            $extension = $request->file('img')->extension();
            $file = $request->file("img")->storeAs($carpeta,$nombreImg.'.'.$extension);
            $diff["img"] = $nombreImg.'.'.$extension;
        }
        $noticia->update($diff);
        return redirect()->route('noticias.show', $noticia->id)->with('info', 'Noticia Actualizada');

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
