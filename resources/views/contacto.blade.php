@extends('welcome')
@section('content')
	
	@section('styles')
		<link rel="stylesheet" href=" {{asset('css/contacto.css')}} ">
	@endsection
	<div class="site-container">
		<header>
			<div class="fondo_productos capa_trasera"></div>
			<div class="titulo_seccion">
				<h1>¿Queres vender Orizon?</h1>
				<hr class="hr_85x2_blanco">	
			</div>
			<div class="subtitulo_seccion">
				<p>Si querés vender el agua más pura de la Patagonia completá este formulario y en breve nos comunicaremos con vos.</p>
			</div>
			<div class="fondo_productos capa_frontal"></div>
		</header>	
	<section id="contacto">
		<div class="contacto_fondo"></div>
	
		
		<div class="container">
		<div class="row">
			@if(count($errors))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul style="padding-left:10px;">
                                        @foreach ($errors->all() as $error)
                                            <li style="color:red;"> {{$error}} </li>
                                        @endforeach
                                    </ul>
                                <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
		
			{{-- <form class="formulario-contacto" action="{{route('enviar-contacto-ventas')}}" method="post"> --}}
				<div id="errors" class="container" style="color:#fff;font-weigth:bold;">
					<p>Todos los campos son necesarios...</p>
				</div>
				<div class="success">
					<p>Hemos enviado tu mensaje, en breve nos contactatremos.</p>
					<a class="nav-link" href="/">Volver a inicio</a>
				</div>
			<form id="formulario-contacto" method="post" data-route="{{route('enviar-contacto-ventas')}}">
				{{csrf_field()}}


<input class="col-100" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido" >


<input class="col-50-der" type="text" id="telefono" name="telefono" placeholder="Teléfono"  pattern="([0-9]+){9}" title="Ingresa el código de área Ej: 011 4444 5555" >



<input class="col-50-izq" type="text" id="email" name="email" placeholder="Mail"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" >


<input class="col-50-izq" type="text" id="pais" name="pais" placeholder="País" >
<input class="col-50-der" type="text" id="provincia" name="provincia" placeholder="Provincia" >
<input class="col-50-izq" type="text" id="localidad" name="localidad" placeholder="Localidad" >

<select name="razon" class="col-50-der" id="asuntoCont">
<option value="">Asunto</option>
<option value="Quiero ser distribuidor">Quiero ser distribuidor</option>
<option value="Consulta">Consulta</option>
<option value="Exportacion">Exportación</option>
<option value="Trabajar en Orizon">Trabajar en Orizon</option>
</select>

<textarea class="col-100" name="mensaje" type="textarea" id="mensaje" placeholder="Comentario" cols="5" rows="5" ></textarea>



<div class="col-50-der">
<div class="col-send">
	<button id="submit" type="submit" name="submit" class="boton-azul-form">Enviar 
	</button>  
	
</div>
</div>

</form>
  
 
				  

		
</div>
</div>
		   
	</section>
               
	
	
	@section('scripts')
		{{-- <script src="js/nosotros.js"></script> --}}
		<script src=" {{asset('js/enviar.js')}} "></script>
	@endsection
	 
@endsection