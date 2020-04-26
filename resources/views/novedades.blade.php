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
					@if((!($noticia->id % 2) == 0))
						<div class="fila noticia dos-columnas">
							<div class="columna">
								<div class="titulo_noticia"><h1> {{($noticia->id)}} {{$noticia->title}} </h1></div>
								<div class="fecha_noticia"><p> {{$noticia->subtitle}} </p></div>
								<div class="separador"> <hr> </div>
								<div class="imagen_noticia"><img src="img/noticias/agua_mineral-cosmetico.jpg" alt=""></div>
								<div class="resumen_noticia"><p>{{$noticia->copete}}</p></div>
								<div class="resumen_noticia"><p>{{$noticia->contenido}}</p></div>
							</div>
							<div class="columna img_novedad columna_imagen">
								<img src="img/noticias/agua_mineral-cosmetico.jpg" alt="">
							</div>
						</div>
					@else
						<div class="fila noticia dos-columnas">
							<div class="columna columna_imagen">
								<img style="width: 100%;" src="img/noticias/agua_mineral-receta.jpg" alt="">
							</div>
							<div class="columna">
								<div class="titulo_noticia"><h1>{{($noticia->id)}} {{$noticia->title}}</h1></div>
								<div class="fecha_noticia"><p> {{$noticia->subtitle}} </p></div>
								<div class="separador"> <hr> </div>
								<div class="imagen_noticia"><img src="img/noticias/agua_mineral-cosmetico.jpg" alt=""></div>
								<div class="resumen_noticia"><p>{{$noticia->copete}}</p></div>
								<div class="resumen_noticia"><p>{{$noticia->content}}</p></div>
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