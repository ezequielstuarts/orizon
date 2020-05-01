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
    <strong>Argentina</strong></p>
    </div>
    
    </div>
    <div class="col-lg-5 col-md-12 col-sm-12">
    <form class="form-orizon" action="{{route('enviar-contacto')}}" method="post" style="margin-top:100px;">
      {{csrf_field()}}
     
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
    
    @include('includes.legales')
     </footer> 
     