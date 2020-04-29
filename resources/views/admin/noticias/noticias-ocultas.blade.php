@extends('admin.admin')
@section('content')

<div class="container mb-3">
    <div class="row">

        <div class="col-md-9 ">
            {{-- <h5 class="text-secondary">Listado de noticias. <b>{{$totalNoticias}}</b> Noticias en la base de datos.</h5> --}}
        </div>


        <div class="container">
            <div class="boton-nueva-noticia">
                <a class="" href="{{route('noticias.index')}}" title="Ver noticias ocultas"><i class="fas fa-eye"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <table class="table table-hover">
        <thead>
            <tr style="background-color:#13b7da;">
                <th colspan="col">Fecha</th>
                <th colspan="col">Titulo</th>
                <th colspan="col">Imagen</th>
                <th colspan="4">Acciones</th>
                <!-- <th colspan="col">Acciones</th> -->
            </tr>
        </thead>
        @forelse ($noticias as $noticia)
        <tbody>
            <tr>
                <td width="130px">{{date('d-m-Y', strtotime($noticia->date))}}</td>
                <td><b style="font-size:18px;">{{$noticia->title}}</b>
                    <hr>
                    <p class="text-secondary" style="font-size:12px;"><b>Subtitulo: </b>{{$noticia->subtitle}}</p>
                </td>
                
                <td>
                    @if (!empty($noticia->img))
                        <img style="width:100px" src="{{$ruta}}/{{$noticia->img}}"/>
                    @else
                        <img style="width:100px" src="/img/noimg.png" class="card-img-top">
                    @endif
                </td>
                                    
                <td width="10px">
                    <a href="{{ route('noticias.show', $noticia->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                </td>
                
                <td width="10px">
                    <a href="{{ route('noticias.edit', $noticia->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                </td>
                
                <td width="10px">
                    <a href="{{ route('noticias.mostrar', $noticia->id) }}" class="btn btn-sm btn-outline-warning">Mostrar</a>
                </td>
                {{-- <td width="10px">
                    <form action="{{route('noticias.destroy', $noticia->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$noticia->id}}">
                        <input class="btn btn-sm btn-danger" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">
                    </form>
                </td> --}}
                <td width="10px">
                    {!! Form::open(['route' => ['noticias.destroy', $noticia->id], 'method' => 'delete']) !!}
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    {!! Form::close() !!}
                </td>
                
            </tr>
        </tbody>
        @empty
        <div class="alert alert-info" role="alert">
            <h3>No hay Noticias cargadas en la base de datos</h3>
        </div>
        @endforelse
    </table>
</div>

@endsection