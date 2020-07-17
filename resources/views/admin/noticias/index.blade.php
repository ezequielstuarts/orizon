@extends('admin.admin')
@section('content')

<div class="container mb-3">
    <div class="row">

        <div class="col-md-5 ">
            <h5 class="text-secondary"><b>{{$totalNoticias}}</b> Noticias en la base de datos.</h5>
        </div>
        <div class="col-md-5">
            {{ Form::open(['url' => 'admin/noticias', 'method' => 'GET', 'class' => 'form-inline'])}}
                {{ Form::text('titleSearch', null, ['class' => 'form-control form-control-sm ml-sm-2', 'placeholder' => 'Buscar Noticia']) }}
                <button class="btn btn-default my-2 my-sm-0 btn-sm" type="submit"><i class="fas fa-search"></i></button>
                {{ Form::close() }}
            </div>
        <div class="col-md-2">
            <div class="boton-nueva-noticia">
                <a href="{{route('admin.noticias-ocultas')}}" title="Ver noticias ocultas"><i class="fas fa-eye-slash"></i></a>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <table class="table table-hover">
        <thead>
            <tr class="tr-background">
                <th colspan="col">Fecha</th>
                <th colspan="col">Titulo</th>
                <th colspan="col">Imagen</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        @forelse ($noticias as $noticia)
        <tbody>
            <tr>
                <td width="130px">{{date('d-m-Y', strtotime($noticia->date))}}</td>
                <td><b style="font-size:18px;">{{$noticia->title}}</b>
                    @if ($noticia->subtitle != NULL)
                        <hr>
                        <p class="text-secondary" style="font-size:12px;"><b>Subtitulo: </b>{{$noticia->subtitle}}</p>
                    @endif
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
                    <a href="{{ route('noticias.ocultar', $noticia->id) }}" class="btn btn-sm btn-outline-warning">Ocultar</a>
                </td>

            </tr>
        </tbody>



        @empty
        <div class="alert alert-info" role="alert">
            <h3>No hay Noticias cargadas en la base de datos</h3>
        </div>
        @endforelse


    </table>
    <div class="conteiner">
        {{ $noticias->links() }}
    </div>

</div>

@endsection