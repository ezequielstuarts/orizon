<footer>
  <div class="container" style="padding-top:200px;">
  <div class="row">
     <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="fila img-logo-footer"><img src="img/logo_footer_info.png" alt=""></div>
        <div class="fila link mt-4">
           <ul>
           <li class="{{ Request::is( 'nosotros') ? 'font-weight-bold' : '' }}">
              <a href="{{ URL::to( 'nosotros') }}">Nosotros</a>
           </li>
           <li class="{{ Request::is( 'nuestros-productos') ? 'font-weight-bold' : '' }}">
              <a href="{{ URL::to( 'nuestros-productos') }}">Nuestros productos</a>
           </li>
           <li class="{{ Request::is( 'donde-estamos') ? 'font-weight-bold' : '' }}">
              <a href="{{ URL::to( 'donde-estamos') }}">Dónde estamos</a>
           </li>
           <li class="{{ Request::is( 'puntos-de-venta') ? 'font-weight-bold' : '' }}">
              <a href="{{ URL::to( 'puntos-de-venta') }}">Puntos de venta</a>
           </li>
           <li class="{{ Request::is( 'novedades') ? 'font-weight-bold' : '' }}">
              <a href="{{ URL::to( 'novedades') }}">Novedades</a>
           </li>
           <div class="col-100"><a href="contacto" class="boton-azul">¿querés vender orizon?</a></div>
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
              <strong>Argentina</strong>
           </p>
        </div>
     </div>
     <div class="col-lg-5 col-md-12 col-sm-12">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="success-contacto" class="hide" role="alert">
                    <p>
                        <b class="respuesta-success-contacto"></b><span class="mensaje-success-contacto"></span> 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <form id="formulario-contacto" class="form-orizon" action="#" method="post" style="margin-top:100px;">
        <input class="col-100" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido" >
        
        <input class="col-50-der" type="number" id="telefono" name="telefono" placeholder="Teléfono"  title="Ingresa el código de área Ej: 011 4444 5555" >
        
        <input class="col-50-izq" type="text" id="email" name="email" placeholder="Mail" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
        
        <input class="col-50-izq" type="text" id="pais" name="pais" placeholder="País" >
        
        <input class="col-50-der" type="text" id="provincia" name="provincia" placeholder="Provincia" >
        
        <input class="col-50-izq" type="text" id="localidad" name="localidad" placeholder="Localidad" >
        
        <input class="col-50-der" type="text" id="compania" name="empresa" placeholder="Empresa" >
        
        <textarea class="col-100" name="mensaje" type="textarea" id="mensaje" placeholder="Comentario" cols="5" rows="5" ></textarea>
        <!--end col-50-izq -->
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding-top:20px;">
                    <div id="alerta-contacto" class="hide" role="alert">
                        <p>
                            <b class="respuesta-contacto">epojrepojpojh</b><span class="mensaje-alerta-contacto"> repogkprogkeprogkerpgok</span> 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-50-der">
            <div class="col-send">
                <button id="submit-contacto" type="submit" name="submit" class="boton-azul-form">Enviar</button>
                <button id="enviando-contacto" type="button" class="boton-azul-form hide">Enviando... </button>
            </div>
        </div>
        <div class="col-50-izq">
                <div class="g-recaptcha" data-sitekey="6LeecfcUAAAAABEOQW_kO7Wce3RMbkgIAzZK4QWK"></div>
            </div>
    </form>
     </div>
     <!-- end ROW -->
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
  </div>
  <!-- end container -->
  @include('includes.legales')
</footer>