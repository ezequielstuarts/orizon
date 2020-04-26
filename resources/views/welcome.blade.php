<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Orizon | Agua mineral natural de manantial</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900,900i" rel="stylesheet">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link rel="stylesheet" href=" {{asset('css/bootstrap.css')}} ">
        <link rel="stylesheet" href=" {{asset('css/botones.css')}} ">
        <link rel="stylesheet" href=" {{asset('css/estilo.css')}} ">
        <link rel="stylesheet" href=" {{asset('css/home.css')}} ">
        @yield('styles')
    
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
        @include('includes.nav-bar')
        <div class="mouse-scroll">
            <img src="img/ico_scroll.png" class="scroll" alt="mouse">
            <div><img src="img/ico__flecha_scroll-1.png" class="arrow a"  alt="arrow"></div>
            <div><img src="img/ico__flecha_scroll-2.png" class="arrow b" alt="arrow"></div>
            <div><img src="img/ico__flecha_scroll-3.png" class="arrow c" alt="arrow"></div>
        </div>
        <div class="site-container">
            @include('includes.header')
            <section id="quees_seccion" class="fondo_quees">
                <!--<div class="novedades"></div>-->
    
    <div class="container" id="box219">
    <div class="row">
        <div class="col-md-8">
        <p class="tit_novedades">¿Qué es?</p>
        <p class="subtit_novedades">Agua Mineral Natural de Manantial de Tierras Orgánicas.</p>
        
        <img src="img/grafico.png" class="img-fluid"> 
        
        
        <p class="parr_novedades">De este ciclo surgen las diferentes aguas aptas para el consumo, pero hay una que es <strong>la más pura y premium, y esa es ORIZON</strong>.</p>
        </div>
        
       
        
        <div class="col-md-4">
        <img src="img/quees_botella.png" class="img-fluid py-2">
        </div>
         
         
    </div><!--fin row -->
    </div><!--fin container -->
    
    
    
    
    
    
    
    
    </section><!--fin section -->
    
    
    <section id="premium_seccion" class="fondo_premium">
        <div class="container">
            <div class="row">
          <div class="col-md-12 col-sm-12 text-center"><img src="img/1920/premium-logo.png"> </div>
          
          <div class="col-md-4 col-sm-12">
          <h4 class="tit_prem"><img src="img/bullet.png" width="33" height="27"> Es Agua Mineral</h4>
          <p class="parr_prem">Porque tiene <strong>minerales propios</strong> brindados por la naturaleza en su
    viaje subterráneo hacia su surgente.</p>
    
    <p class="parr_prem"><strong>No necesita</strong> tratamientos artificiales para hacer apto su
    consumo.</p>
          </div>
          
          <div class="col-md-4 col-sm-12">
          <h4 class="tit_prem"><img src="img/bullet.png" width="33" height="27"> Es Agua de Manantial</h4>
          <p class="parr_prem">Porque surge espontáneamente de la tierra sin necesidad de extracción artificial.</p>
          </div>
          
          <div class="col-md-4 col-sm-12">
        <h4 class="tit_prem"><img src="img/bullet.png" width="33" height="27"> Es Agua de Tierras Orgánicas</h4>
          <p class="parr_prem">Porque es filtrada lentamente en tierras que no han sido contaminadas por el hombre. Las mismas están certificadas como tal.</p>
          </div>   
    
    <div style="display:block; margin:0 auto;">
       <iframe width="640" height="360" src="https://www.youtube.com/embed/-xdTSDat-N4" frameborder="0" allowfullscreen></iframe>
    </div> 
       
    </div><!--fin row --> 
    </div><!--fin container -->
    </section><!--fin section -->
    
    
    <!--<section id="video_seccion" class="fondovideo">-->
    
    <section id="video_seccion" class="capa_trasera">
    <div class="container">
    <div class="row" >
    <div class="col-md-12">
    <h3 class="azulor">Llevá Orizon a tu mesa en todas<br>
    sus presentaciones</h3>
    <a href="nuestros-productos" class="boton-orizon ir-a-link">VER MÁS <img src="img/flecha_botones.png" alt="flecha" class="img-flecha"></a>
    </div>
    
    
    </div>
    </div>
    
    <div class="capa_frontal"></div>
    </section>
    
    @yield('content')
    @include('includes.footer')
    
    
    
    
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
    <!--</div>-->
     
    
    
    
    
     
        <!-- botoneras -->
        <div class="image-preloader">
            <img src="img/1920/icono1_h_OVERsmall.png" />
            <img src="img/1920/icono2_h_OVERsmall.png" />
            <img src="img/1920/icono3_h_OVERsmall.png" />
            <img src="img/1920/icono4_h_OVERsmall.png" />
        </div>
        <!-- General -->
        <div class="image-preloader">
            <img src="img/icon_cerrar.png" />
        </div>
        <!-- Nosotros -->
        <div class="image-preloader">
            <img src="img/fondo1_nosotros.jpg" />
        </div>
        <div class="image-preloader">
            <img src="img/guanaco_nosotros.png" />
        </div>
        <div class="image-preloader">
            <img src="img/fondo_iconos.png" />
        </div>
        <div class="image-preloader">
            <img src="img/fondo_empresa.jpg" />
        </div>
        <!-- Nuestros productos -->
        <div class="image-preloader">
            <img src="img/productos.png" />
        </div>
        <div class="image-preloader">
            <img src="img/fondo_productos.jpg" />
        </div>
        <div class="image-preloader">
            <img src="img/fondo_serie_especial.jpg" />
        </div>
        <div class="image-preloader">
            <img src="img/caja_orizon.png" />
        </div>
        <div class="image-preloader">
            <img src="img/circulo_producto1.png" />
        </div>
        <div class="image-preloader">
            <img src="img/circulo_producto2.png" />
        </div>
        <!-- Donde estamos -->
        <div class="image-preloader">
            <img src="img/fondo_donde_estamos.jpg" />
        </div>
        <div class="image-preloader">
            <img src="img/fogata.png" />
        </div>
        <!-- Puntos de venta -->
        <!-- Novedades -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script src=" {{asset('js/jquery.min.js')}} "></script>
        <script src=" {{asset('js/bootstrap.min.js')}} "></script>
        <script src=" {{asset('js/home.js')}} "></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122716520-1"></script>
        
    
        
    </div><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-122716520-1');</script>
    </body>
    </html>

        