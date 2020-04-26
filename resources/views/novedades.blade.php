@section('content')
	

@section('styles')
	<link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}} ">
	<link rel="stylesheet" href=" {{asset('css/botones.css')}} ">
	<link rel="stylesheet" href=" {{asset('css/estilo.css')}} ">
	<link rel="stylesheet" href=" {{asset('css/novedades.css')}} ">

@endsection
	<title>Orizon Agua mineral natural de manantial | Novedades</title>
	
	<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122716520-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
	  	function gtag(){dataLayer.push(arguments);}
	  	gtag('js', new Date());
	  	gtag('config', 'UA-122716520-1');
	</script>

	
</head>
<body>
	<div id="load-overlay" class="overlay"></div>
	<nav id="navbar" class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="index.html"><img src="img/logo_barra.png" alt=""></a>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#img_open" aria-controls="img_open" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="img_open">
			<ul class="navbar-nav mr-auto padding2">
				<li class="nav-item">
					<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="nosotros.html">Nosotros</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="productos.html">Nuestros productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="ubicacion.html">Dónde estamos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="ventas.html">Puntos de venta</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="novedades.html">Novedades</a>
				</li>
			</ul>
		</div>
		<div class="navbar-icons">
			
			<div class="social-icons">
				<div class="texto-redes"><p>SEGUINOS EN</p></div>
				<a href="https://www.facebook.com/orizonAguaMineral" target="_blank"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.youtube.com/channel/UCTxnACbSg7SFKoHJ_lly3VQ" target="_blank"><i class="fab fa-youtube"></i></a>
				<a href="https://www.instagram.com/orizonaguamineral" target="_blank"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</nav>
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
		
<footer>
<div class="container" style="padding-top:200px;">	
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="fila img-logo-footer"><img src="img/logo_footer_info.png" alt=""></div>
<div class="fila link mt-4">
<ul>
<li>
<a  href="nosotros.html">Nosotros</a>
</li>
<li>
<a href="productos.html">Nuestros productos</a>
</li>
<li>
<a href="ubicacion.html">Dónde estamos</a>
</li>
<li>
<a href="ventas.html">Puntos de venta</a>
</li>
<li>
<a class="font-weight-bold" href="novedades.html">Novedades</a>
</li>

</ul>
<div class="col-100"><a href="contacto.html" class="boton-azul">¿querés vender orizon?</a></div>

<div class="fila" style="padding-top:130px;">
<a href="#popup-legales" class="popup-link">Términos y Condiciones</a>
</div>


</div>

</div>
<div class="col-lg-3 col-md-6 col-sm-12 align-content-center">
<div class="footerbox" style="margin-top:100px; padding-top:30px;">
<h3>SEGUINOS!</h3>

<a href="https://www.facebook.com/orizonAguaMineral" target="_blank"><i class="fab fa-facebook-f"></i></a>
<a href="https://www.youtube.com/channel/UCTxnACbSg7SFKoHJ_lly3VQ" target="_blank"><i class="fab fa-youtube"></i></a>
<a href="https://www.instagram.com/orizonaguamineral" target="_blank"><i class="fab fa-instagram"></i></a>

</div>
<div class="footerbox" style="padding-top:30px;height: 190px;">

<p class="direfooter">
<span style="font-size:18px; color:#0f275c;font-weight: 700;">Nuestra dirección</span><br>

BARDAS BLANCAS SA Constituyentes 84, Comodoro Rivadavia, Chubut Patagonia
<strong>Argentina</strong></p>
</div>

</div>
<div class="col-lg-5 col-md-12 col-sm-12">
<form class="form-orizon" action="enviar.php" method="post" style="margin-top:100px;">
 
<input class="col-100" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
<input class="col-50-der" type="text" id="telefono" name="telefono" placeholder="Teléfono" required pattern="([0-9]+){9}" title="Ingresa el código de área Ej: 011 4444 5555">
<input class="col-50-izq" type="text" id="email" name="email" placeholder="Mail" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
<input class="col-50-izq" type="text" id="pais" name="pais" placeholder="País" required>
<input class="col-50-der" type="text" id="provincia" name="provincia" placeholder="Provincia" required>
<input class="col-50-izq" type="text" id="localidad" name="localidad" placeholder="Localidad" required>
<input class="col-50-der" type="text" id="compania" name="empresa" placeholder="Empresa" required>

<textarea class="col-100" name="mensaje" type="textarea" id="mensaje" placeholder="Comentario" cols="5" rows="5" required></textarea>

<div class="col-50-izq">
<div class="col-recap">
<div class="g-recaptcha mt-3" data-sitekey="6LfEkHQUAAAAAOY6vDSH-WFWR15m4dCJ-4Zwz8ri"><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfEkHQUAAAAAOY6vDSH-WFWR15m4dCJ-4Zwz8ri&amp;co=ZmlsZTo.&amp;hl=es-419&amp;v=v1549866690836&amp;size=normal&amp;cb=109ksjog5pkk" width="304" height="78" role="presentation" name="a-mu51eb8ut7mp" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
</div><!--end col-recap -->
</div><!--end col-50-izq -->


<div class="col-50-der">
<div class="col-send">
<button id="submit" type="submit" name="submit" class="boton-azul-form">Enviar</button>
        
</div>
</form>
</div><!--end COL-MD-5 -->
</div><!-- end ROW -->


<div class="float-right col-6 mb-5 invisible">
<div class="developer"> 
<a href="">Desarrollo de <img src="img/logo_mas54.png" alt=""></a>
</div>
</div>


<!--lo muevo a donde quiero -->
<div class="clip">
  <div class="chat"><img src="img/icono_mensaje.png" alt=""></div>
  <div class="texto">
  <p>Atención al<br>consumidor</p>
  <p class="font-weight-bold">0810-222-0160</p>
  </div>
  <div class="flecha"><img src="img/flecha.png" alt=""></div>
  
</div>


</div><!-- end container -->






<div class="modal-wrapper" id="popup-legales">
<div class="popup-contenedor-legales col-lg-7 col-md-7 col-sm-12">

<h3 style="color: #13b7da;">Términos y condiciones</h3>
<hr class="hr_85x2_celeste">

<p>El acceso a este sitio importa la conformidad con las siguientes condiciones sin perjuicio de las obligaciones impuestas por la legislación vigente y el consentimiento para que cualquier diferendo sea resuelto conforme la legislación argentina y por los tribunales competentes de la República Argentina. <br>
<strong>Propiedad intelectual</strong> <br>
Tanto esta página virtual, cuanto las marcas aquí exhibidas son de propiedad de Bardas Blancas S.A. y se encuentran protegidas por la legislación vigente. <br>
<strong>Denegación de acceso</strong> <br>
Será facultad exclusiva de la empresa, denegar el acceso a la página a aquellos usuarios que incumplan las condiciones aquí establecidas y/o disposiciones legales y/o incurran en cualquier conducta ética o legalmente reprochable. <br>
<strong>Política de Confidencialidad y Privacidad</strong> <br>
El envío de información es absolutamente libre y voluntaria e importa la conformidad para el archivo, reproducción y libre uso de dicha información en la forma que Bardas Blancas S.A. lo estime conveniente, sin derecho a retribución alguna. Por otra parte Bardas Blancas S.A. no certifica ni da garantía alguna respecto del contenido de la información remitida por usuarios y publicada en la página. Quien desee utilizar dicha información, deberá hacerlo bajo su exclusiva responsabilidad tomando las precauciones y recabando el asesoramiento necesario conforme a la naturaleza de la información utilizada. <br>
<strong>Protección de menores</strong> <br>
Los menores de 18 años de edad, no pueden enviar información personal sin contar con el previo consentimiento de sus padres. <br>
<strong>Destino de las bases de datos personales</strong> <br>
A los efectos de establecer un contacto con Bardas Blancas S.A. y/o realizar algún tipo de consulta, los usuarios podrán dirigirse a la sección "Contacto" de la página. Es obligatorio completar el formulario de Contacto en todos los campos con datos válidos y verdaderos, de manera exacta y precisa. Bardas Blancas S.A. no se responsabiliza por la veracidad o certeza de los datos provistos por los usuarios. 
Sin perjuicio de la libre utilización por Bardas Blancas S.A. de la información que sea enviada, aquellos que merezcan la calificación legal de “datos personales” serán utilizados para la conformación de una base de datos personales destinada a informar a los usuarios de acciones publicitarias o datos de interés relativos a los temas y propósitos que contiene esta página u otros que sean afines a la misma. El responsable de dicha base es Bardas Blancas S.A., con domicilio en Constituyentes 84, Comodoro Rivadavia, Chubut. Conforme lo dispone la legislación vigente el titular de los datos podrá, en cualquier momento, solicitar se le informe los datos que sobre dicho titular existan en la base, como así también su modificación o supresión. Tal petición podrá realizarse mediante mensaje electrónico, a través del link “Contacto”. El titular de los datos personales tiene la facultad de ejercer el derecho de acceso a los mismos en forma gratuita a intervalos no inferiores a seis meses, salvo que se acredite un interés legítimo al efecto conforme lo establecido en el artículo 14, inciso 3 de la Ley Nº 25.326. Conforme lo ordenado por la Resolución 14/2018 de la Agencia de Acceso a la Información Pública, se informa que: "La AGENCIA DE ACCESO A LA INFORMACIÓN PÚBLICA en su carácter de Órgano de Control de la Ley Nº 25.326, tiene la atribución de atender las denuncias y reclamos que interpongan quienes resulten afectados en sus derechos por incumplimiento de las normas vigentes en materia de protección de datos personales". <br>
<strong>Cookies </strong> <br>
Esta página genera “cookies” que el usuario es libre de aceptar o rechazar (utilizando las herramientas que, para ello, le proporciona el navegador). Es posible que la inhabilitación de las “cookies” impida aprovechar todas las características de nuestro sitio.
Un “cookie” es un archivo “solo texto” que este sitio transfiere al archivo correspondiente del navegador instalado en el disco rígido de la computadora. Su objetivo es permitir que este sitio pueda recordar quién es el usuario. 
Los cookies son utilizados para: a) reconocer al usuario como visitante cuando vuelva a ingresar a nuestro sitio (la identificación se verifica mediante un número) de modo tal que se puedan presentar las publicidades conforme a los intereses del usuario o evitar enviar avisos en forma repetida; b) elaborar estadísticas para conocer como es utilizado este sitio y poder mejorarlo.
Cuando se accede a nuestro sitio, se envían dos tipos de “cookies”: a) “de sesión” que son solo temporarios y permanecen en la computadora hasta que se abandone el sitio, b) “persistentes” que permanecen en el archivo del navegador (por un tiempo que no es similar en todos los casos). <br>
<strong>Contenidos de la página</strong> <br>
La información contenida en esta página es de tipo general y deberá ser adaptada a cada caso particular bajo la responsabilidad de quien así lo haga. De ninguna forma podrá considerarse que la información aquí facilitada constituye asesoramiento vinculado a casos concretos. Las consultas que se deseen hacer, deberán ser formuladas por correo electrónico, mediante el link “Contacto”, y serán respondidas de esta misma forma. <br>
<strong>Presentación de productos</strong> <br>
Las presentaciones exhibidas en esta página pueden diferir total o parcialmente de los productos realmente ofertados. Bajo ningún concepto podrá interpretarse que los contenidos de este sitio importan una oferta genérica al público. Esta página podrá ser modificada, suspendida o suprimida total o parcialmente, sin aviso alguno. <br>
<strong>Hipervínculos</strong> <br>
En los casos en que esta página contenga un hipervínculo que remita a otra página, o se llegue a esta página a través de un hipervínculo existente en otro sitio virtual, Bardas Blancas S.A. no será responsable por los contenidos o servicios ofrecidos en, o por las manifestaciones o información contenidas en páginas distintas de aquellas que pertenecen a la empresa. <br>
<strong>Reclamos de terceros</strong> <br>
En caso que cualquier persona considere que esta página afecta en alguna forma sus derechos, agradeceremos que presente su reclamo a través de la pestaña de “Contacto” para poder clarificar y – en su caso – solucionar la situación brindando la información en forma completa.
<strong>Daños a terceros</strong> <br>
El acceso a esta página debe hacerse bajo exclusiva responsabilidad del interesado. Bardas Blancas S.A. no asume responsabilidad alguna por los daños producidos a los sistemas de computación (físicos o lógicos) de los usuarios ocasionados por el uso del sitio o la descarga archivos (incluyendo los que sean consecuencia de la actividad de programas malintencionados o virus informáticos)</p>
<a class="popup-cerrar" href="#"><img src="img/close.png" width="45" height="45"></a>
</div>
</div>




</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
	$(window).on('load', function() {
		// Load-Overlay fadeout when page finish loading:
		$('#load-overlay').fadeOut();
		$('body').css('overflow-y', 'auto');
	});
	</script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122716520-1"></script>
	<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-122716520-1');</script>
</body>
</html>

@endsection