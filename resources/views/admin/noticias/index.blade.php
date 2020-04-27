@extends('admin.admin')
@section('content')

<div class="container mb-5">
    <div class="row">

        <div class="col-md-9 ">
            {{-- <h5 class="text-secondary">Listado de noticias. <b>{{$totalNoticias}}</b> Noticias en la base de datos.</h5> --}}
        </div>


        <div class="col-md-1">
            <div class="boton-nueva-noticia">
                {{-- <a class="" href="{{route('admin.noticiasHide')}}" title="Ver noticias ocultas"><i class="fas fa-eye-slash"></i></a> --}}
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
                <th colspan="3">Acciones</th>
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
                        <img style="width:100px" src="/img/noimg.png"/>
                        {{-- <img style="width:100px" src="/storage/imagenes/img_noticias/{{$noticia->img}}"/> --}}
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
                    <a href="{{ route('noticias.hide', $noticia->id) }}" class="btn btn-sm btn-outline-warning">Ocultar</a>
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