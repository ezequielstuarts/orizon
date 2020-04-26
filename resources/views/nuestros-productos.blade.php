@extends('welcome')
@section('content')
	
	@section('styles')
		<link rel="stylesheet" href=" {{asset('css/productos.css')}} ">
	@endsection

	<div class="site-container">
		<header>
			<div class="fondo_productos capa_trasera"></div>
			<div class="titulo_seccion">
				<h1>Nuestros productos</h1>
				<hr class="hr_85x2_azul">
			</div>
			<div class="subtitulo_seccion">
				<h2><strong>ORIZON es la compañera ideal para disfrutar y cuidar la vida.</strong></h2>
			</div>
			<div class="info_productos">
				<div class="descripcion_productos">
					<p>Tenemos a su disposición, presentaciones individuales y familiares que responden a las necesidades de la vida cotidiana. Toda la pureza y frescura del agua mineral natural de manantial envasada en <strong>botellas, botellones, bidones y bag in box.</strong></p>
				</div>
				<div class="detalle_productos">
					<ul>
						<li><strong>Bidones retornables</strong> de: 12 lts. y 20 lts.</li>
						<li><strong>Bag in Box</strong> de: 5 lts., 10 lts. y 20 lts.</li>
						<li><strong>Botellones</strong> de: 6.250 cc. y 8.000 cc.</li>
						<li><strong>Botellas</strong> de 500 cc., 1.500 cc. y 2.250 cc.</li>
					</ul>
				</div>
			</div>
			<div class="fondo_productos capa_frontal"></div>
		</header>
		<section id="productos">
			<h3>Serie especial</h3>
			<hr class="hr_85x2_azul">
			<div class="fila">
				<div class="columna right imagen">
					<img src="img/caja_orizon.png" />
				</div>
				<div class="columna right">
					<h4>Bag-in-box</h4>
					<p>Nuestro novedoso sistema Bag-in- box utiliza dos tipos de materiales: cartón para el exterior y compuestos plásticos de alta calidad, polietilenos desarrollados específicamente para el agua mineral. Disponemos de envases de 5 lts., 10 lts. y 20 lts. para el hogar u oficina; y de 1000 lts. para usos especiales para la industria minera, petrolera y campos.</p>
					<p><strong>El envasado Bag-in- box es resistente, seguro, cómodo versátil higiénico y económico.</strong></p>
				</div>
			</div>
			
<div class="container">
<div class="row col-lg-12">
      <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <img src="img/circulo_producto1.png" class="img-fluid"/>
      </div>
      <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <img src="img/circulo_producto2.png" class="img-fluid"/>
      </div>
</div>
</div>
		
		</section>

	</div>
	
	<script>
	$(function() {
		// Parallax effect binding to onscroll event:
		$(window).scroll(function() {
			// console.log('scroll event');
			var scroll_ratio = 0.5;
			var scroll_front = $(this).scrollTop();
			var scroll_back  = scroll_front * scroll_ratio;
			$('div.capa_trasera').css('top', scroll_back +'px');
		});
	});
	$(window).on('load', function() {
		// Load-Overlay fadeout when page finish loading:
		$('#load-overlay').fadeOut();
		$('body').css('overflow-y', 'auto');
	});
	</script>
@endsection