@extends('welcome')
@section('content')
	

	@section('styles')
		<link rel="stylesheet" href=" {{asset('css/ventas.css')}} ">
	@endsection
	
	<div class="site-container">
		<header>
			<div class="titulo_seccion">
				<h1 class="titulo">Puntos de Venta</h1>
				<hr class="hr_85x2_blanco">
			</div>
		</header>
		<section id="ventas">
			<div class="fila">
				<div class="columna puntos_venta">
					<h2>Llamanos al: <strong>0810-222-0160</strong><br>para conocer tu distribuidor<br>más cercano!</h2>
					<div class="row">
						<div class="col-12">
							<h3>Tenemos presencia en más de <strong>60 ciudades del país</strong>.<br>Nos encontrarás en:</h3>
						</div>
					</div>
					<div class="lista_puntos_venta">
						<div class="row">
							<div class="col-12 col-md-5">
								<ul>
									<li data-coords="-45.687,-70.26" class="active">Río Mayo, Chubut</li>
									<li data-coords="-45.866667,-67.5">Comodoro Rivadavia, Chubut</li>
									<li data-coords="-45.933333,-67.533333">Rada Tilly, Chubut</li>
									<li data-coords="-45.6,-69.083333">Sarmiento, Chubut</li>
									<li data-coords="-42.9,-71.316667">Esquel, Chubut</li>
									<li>Trevelin, Chubut</li>
									<li>Epuyén, Chubut</li>
									<li>El Maitén, Chubut</li>
									<li>Gualjaina, Chubut</li>
									<li>Paso del Sapo, Chubut</li>
									<li>Gan Gan, Chubut</li>
									<li>Gastre, Chubut</li>
									<li>Paso de Indios, Chubut</li>
									<li>Las Plumas, Chubut</li>
									<li>Los Altares, Chubut</li>
									<li>Paso de Indios, Chubut</li>
									<li>Pampa de Agnia, Chubut</li>
									<li>Tecka, Chubut</li>
									<li>Florentino Ameghino, Chubut</li>
									<li>Camarones, Chubut</li>
									<li>Garayalde, Chubut</li>
									<li>Malaspina, Chubut</li>
									<li>Bahia Bustamante, Chubut</li>
									<li>Cabo Raso, Chubut</li>
									<li>Gobernador Costa, Chubut</li>
									<li>Facundo, Chubut</li>
									<li>Trelew, Chubut</li>
									<li>Rawson, Chubut</li>
									<li>Dolavon, Chubut</li>
									<li>Gaiman, Chubut</li>
								</ul>
							</div>
							<div class="col-12 col-md-6">
								<ul>
									<li>El Bolsón, Río Negro</li>
									<li>Lago Puelo, Río Negro</li>
									<li>Ing. Jacobacci, Río Negro</li>
									<li>Bariloche, Río Negro</li>
									<li>Villa la Angostura, Río Negro</li>
									<li>San Martín de los Andes, Río Negro</li>
									<li>Junín de los Andes, Río Negro</li>
									<li>Piedra del Aguila, Río Negro</li>
								</ul>
								<ul>
									<li>Caleta Olivia, Santa Cruz</li>
									<li>Cañadón Seco, Santa Cruz</li>
									<li>Pico Truncado, Santa Cruz</li>
									<li>Las Heras, Santa Cruz</li>
									<li>Puerto Deseado, Santa Cruz</li>
									<li>Jaramillo, Santa Cruz</li>
									<li>Perito Moreno, Santa Cruz</li>
									<li>Koluel Kaike, Santa Cruz</li>
									<li>Calafate, Santa Cruz</li>
									<li>Pto. San Julián, Santa Cruz</li>
									<li>Cmte. Piedrabuena, Santa Cruz</li>
									<li>Gob. Gregores, Santa Cruz</li>
									<li>Fitz Roy, Santa Cruz</li>
									<li>Jaramillo, Santa Cruz</li>
								</ul>
								<ul>
									<li>Ciudad Autónoma de Buenos Aires</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="columna proximamente">
					<h4>Próximamente<br><span class="smaller">estaremos llegando a:<span></h4>
					<ul>
						<li>Neuquén, Neuquén</li>
						<li>Plottier, Neuquén</li>
						<li>Cutral Co, Neuquén</li>
						<li>Añelo, Neuquén</li>
						<li>Zapala, Neuquén</li>
						<li>Roca, Río Negro</li>
						<li>Villa Regina, Río Negro</li>
						<li>Cipolletti, Río Negro</li>
						<li>Allen, Río Negro</li>
						<li>Viedma, Río Negro</li>
						<li>Las Grutas, Río Negro</li>
						<li>Choele Choel, Río Negro</li>
						<li>Puerto Madryn, Chubut</li>
						<li>Puerto Pirámides, Chubut</li>
						<li>Bahía Blanca, Buenos Aires</li>
						<li>Carmen de Patagones, Buenos Aires</li>
					</ul>
				</div>
			</div>
		</section>
		<section id="mapa">
			<div id="mapa-ventas"></div>
		</section>
	</div>
	


	
	@section('scripts')
		<script src="js/ventas.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVX7Dh0BDDf5k-V50Wpj6ZimUnB-4uMJ0&callback=initMap" async defer></script>	
	@endsection
	   
	  
@endsection