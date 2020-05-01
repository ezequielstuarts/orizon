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
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
		
			<form action="{{route('enviar-contacto-ventas')}}" method="post">
				{{csrf_field()}}
<input class="col-100" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>


<input class="col-50-der" type="text" id="telefono" name="telefono" placeholder="Teléfono"  pattern="([0-9]+){9required}" title="Ingresa el código de área Ej: 011 4444 5555" required>



<input class="col-50-izq" type="text" id="email" name="email" placeholder="Mail"  pattern="[a-zA-Z0-9_]+([.required][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>


<input class="col-50-izq" type="text" id="pais" name="pais" placeholder="País" required>
<input class="col-50-der" type="text" id="provincia" name="provincia" placeholder="Provincia" required>
<input class="col-50-izq" type="text" id="localidad" name="localidad" placeholder="Localidad" required>

<select name="razon" class="col-50-der" id="asuntoCont">
<option value="">Asunto</option>
<option value="Quiero ser distribuidor">Quiero ser distribuidor</option>
<option value="Consulta">Consulta</option>
<option value="Exportacion">Exportación</option>
<option value="Trabajar en Orizon">Trabajar en Orizon</option>
</select>

<textarea class="col-100" name="mensaje" type="textarea" id="mensaje" placeholder="Comentario" cols="5" rows="5" ></textarea>

<div class="col-50-izq">
<div class="col-recap">
<div class="g-recaptcha mt-3" data-sitekey="6LfEkHQUAAAAAOY6vDSH-WFWR15m4dCJ-4Zwz8ri"><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfEkHQUAAAAAOY6vDSH-WFWR15m4dCJ-4Zwz8ri&amp;co=ZmlsZTo.&amp;hl=es-419&amp;v=v1549866690836&amp;size=normal&amp;cb=109ksjog5pkk" width="304" height="78" role="presentation" name="a-mu51eb8ut7mp" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
</div><!--end col-recap -->
</div><!--end col-50-izq -->


<div class="col-50-der">
<div class="col-send">
<button id="submit" type="submit" name="submit" class="boton-azul-form">Enviar</button>  
</div>
</div>

</form>
  
 
				  

		
</div>
</div>
		   
	</section>
               
	
	
	@section('scripts')
		<script src="js/nosotros.js"></script>
	@endsection
	 
@endsection