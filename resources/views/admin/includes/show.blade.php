<div class="card-header">
    Ver noticia.
    <a href=" {{ URL::previous() }} " class="btn btn-sm btn-info float-right">Volver</a>
    
    <a href="{{ route('noticias.edit', $noticia->id) }}" class="float-right btn btn-sm btn-outline-secondary mr-3">Editar</a>
    
</div>
<div class="card-body row">
    <div class="col-md-8">
        <p class="mt-3"><b>Fecha:</b> {{date('d-m-Y', strtotime($noticia->date))}} </p>
        <p class="mt-3"><b>Titulo:</b> {{ $noticia->title}} </p>
        <p class="mt-3"><b>Subtitulo:</b> {{ $noticia->subtitle}} </p>
        <p class="mt-3"><b>Copete:</b> {{ $noticia->copete}} </p>
        <p class="mt-3"><b>Contenido:</b> {!! $noticia->contenido !!} </p>
    </div>
    <div class="col-md-4">
        @if (!empty($noticia->img))
            <img style="width:100%" class="img-responsive" src="{{$ruta}}/{{$noticia->img}}"/>
        @else
            <img style="width:100%" class="img-responsive" src="/img/noimg.png" class="card-img-top">
        @endif
    </div>
</div>
