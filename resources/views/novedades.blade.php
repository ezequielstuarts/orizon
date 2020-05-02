@extends('welcome')
@section('content')
	

	@section('styles')
		<link rel="stylesheet" href=" {{asset('css/novedades.css')}} ">
	@endsection
	<div class="site-container">
		<header>
			<div class="titulo_seccion">
				<h1 class="titulo">Novedades</h1>
				<hr class="hr_85x2">
			</div>
		</header>
		<section id="novedades">
			<div class="contenido_novedades">
				@foreach ($noticias as $noticia)
					@if((($noticia->id % 2) == 0))
						<div class="fila noticia dos-columnas" id="par">
							<div class="columna">
								
								<div class="titulo_noticia"><h1>{{$noticia->title}}</h1></div>
								
								<div class="fecha_noticia"><p> {{date('d-m-Y', strtotime($noticia->date))}} </p></div>
								
								<div class="separador"> <hr> </div>
								
								<div class="subtitle_noticia"><p> {{$noticia->subtitle}} </p></div>
								
								<div class="imagen_noticia">
									<img src="/storage/imagenes/img_noticias/{{$noticia->img}}" alt="{{$noticia->title}}">
								</div>
								
								@if (isset($noticia->copete))
									<div class="resumen_noticia"><p>{{$noticia->copete}}</p></div>
								@endif
								
								<div class="resumen_noticia"><p>{!!$noticia->contenido!!}</p></div>
							</div>
							
							<div class="columna img_novedad columna_imagen">
								<img src="/storage/imagenes/img_noticias/{{$noticia->img}}" alt="{{$noticia->title}}">
							</div>

						</div>
					@else
						<div class="fila noticia dos-columnas" id="impar">
							<div class="columna columna_imagen">
								<img src="/storage/imagenes/img_noticias/{{$noticia->img}}" alt="{{$noticia->title}}">
							</div>
							<div class="columna">
								
								<div class="titulo_noticia"><h1>{{$noticia->title}}</h1></div>
								
								<div class="fecha_noticia"><p> {{date('d-m-Y', strtotime($noticia->date))}} </p></div>
								
								<div class="separador"> <hr> </div>
								
								<div class="subtitle_noticia"><p> {{$noticia->subtitle}} </p></div>
								
								<div class="imagen_noticia">
									<img src="/storage/imagenes/img_noticias/{{$noticia->img}}" alt="{{$noticia->title}}">
								</div>
								
								@if (isset($noticia->copete))
									<div class="resumen_noticia"><p>{{$noticia->copete}}</p></div>
								@endif
								
								<div class="resumen_noticia">{!!$noticia->contenido!!}</div>
							</div>
						</div>
					@endif
				@endforeach
				<div class="fila">
					{{$noticias->render()}}
				</div>
			</div>
		</section>
	</div>
@endsection