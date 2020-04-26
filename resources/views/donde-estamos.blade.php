@extends('welcome')
@section('content')
	
	@section('styles')
		
		<link rel="stylesheet" href=" {{asset('css/ubicacion.css')}} ">
	@endsection

	<div class="site-container">
		<header>
			<div class="fondo_ubicacion capa_trasera"></div>
			<div class="fondo_ubicacion capa_frontal"></div>
			<div class="titulo_seccion">
				<h1>¿Dónde estamos?</h1>
				<hr class="hr_85x2_blanco">
			</div>
			<div class="subtitulo_seccion">
				<h2><strong>ORIZON</strong> nace en las meseta de GuenGuel, en el sudoeste de la mítica Patagonia Argentina:</h2>
				<h3><strong>Tierra energética de horizontes infinitos.</strong></h3>
			</div>
			<div class="descripcion_ubicacion">
				<p>Nos encontramos en Río Mayo, departamento de Senguer, un lugar privilegiado en el corazón del corredor binacional a 230 km del océano Pacífico y a 270 km del océano Atlántico, en un paisaje formado por extensos valles, ríos y manantiales.</p>
			</div>
			<div class="bottom_header col-lg-3 col-md-4 col-xs-12">
				<a href="puntos-de-venta"><button class="boton-azul">VER PUNTOS DE VENTA</button></a>
			</div>
			<div class="video_ubicacion">
				<div class="video_box">
					<div>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/-xdTSDat-N4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</header>

        
<section id="mapa">
<!--<div id="mapa-ubicacionx"></div>-->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6267969.079357232!2d-70.89089767506081!3d-44.45912623036604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdf1fdb6cb18b779%3A0xc12e6a72b3ca283c!2sORIZON!5e0!3m2!1ses-419!2sar!4v1551990326343" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>

</section>
		
	</div>
	
	
	  
@endsection