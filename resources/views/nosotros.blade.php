@extends('welcome')
@section('content')
	
	@section('styles')
		<link rel="stylesheet" href=" {{asset('css/nosotros.css')}} ">
	@endsection
	    
	<div class="site-container">
		<header>
			<div class="fondo_nosotros capa_trasera"></div>
			<div class="fondo_nosotros capa_frontal"></div>
			<div class="titulo_seccion">
				<h1>Nosotros</h1>
				<hr class="hr_85x2_blanco">
			</div>
			<div class="subtitulo_seccion">
				<h2>Trabajar en equipo <br>es bien de la patagonia<br><br></h2>
				<p>Conocé el trabajo y la pasión de la familia Mazquiaran. Cuatro generaciones desarrollando actividades rurales en la Patagonia Argentina.</p>
				<a href="#mistica" class="boton-celeste ir-a-link lk-mistica">VER MÁS <img src="img/flecha_abajo.png" alt="flecha" class="img-flecha"></a>
			</div>
			
		</header>

		<section id="mistica">


			<div class="fondo_iconos">
				<div class="panel_iconos">
					<ul>
						<li id="agua" class="btn-arrow-1 active" data-icon="1"></li>
						<li id="misticax" class="btn-arrow-2" data-icon="2"></li>
						<li id="historia" class="btn-arrow-3" data-icon="3"></li>
						<li id="sustentabilidad" class="btn-arrow-4" data-icon="4"></li>
						<li id="empresa" class="btn-arrow-5" data-icon="5"></li>
					</ul>
				</div>
			</div>
			<div class="panel_detalles">
				<div id="slider-detalles" class="slider_detalles">
                    <!-- EL AGUA -->
					<div class="detalle_icono">
					<div class="detalle_icono-int detalle-agua">
						<div class="row fila">
							<div class="col-md-7 mb-4">
								<h3>El agua</h3>
								<hr class="hr_41x2_azul">
								<h4>Valorar lo que nos da la naturaleza <br> es <strong>bien de la Patagonia.</strong></h4>
								<p><strong>ORIZON es un agua mineral natural de manantial de tierras orgánicas, sin aditivos ni agregados de ningún tipo.</strong> Su equilibrio justo en minerales lo brinda el tipo de suelo donde filtra lentamente y de forma natural. Está envasada en origen con estrictos controles de calidad que aseguran su máxima pureza y frescura. Está catalogada como una de las mejores aguas del mundo. </p>
							</div>
							<div class="col-md-5 mt-5">
								<img src="img/img_agua1-2.jpg" alt="">
							</div>
						</div>
						<div class="row fila">
							<div class="col-md-4 mb-4"><img class="img-fluid" src="img/img_agua2-2.jpg" alt="Responsive image"></div>
								<div class="col-md-4 descripcion mb-4">
								<!-- <div class="hr_invertido"></div> -->
								<p><strong>Sus componentes físico-químicos provienen del tipo de suelo</strong> y tienen el equilibrio justo para la mejor hidratación con la estructura mineral óptima que ayuda a mejorar el metabolismo. <img src="img/circulo_ph.png" class="mt-4 img-circulo" alt="Responsive image"></p>

								</div>
								<div class="col-md-4">
									<img class="img-fluid" src="img/img_agua3-2.jpg" alt="Responsive image">
								</div>
								
								<div class="col-md-8 composicion mb-4">
									<table>
										<tr>
											<td class="titulo_tabla" colspan="2">Análisis físico-químico
												<p class="sub">Estar atento a los detalles es bien de la patagonia.</p></td>
										</tr>
										<tr>
											<td class="elemento">CALCIO</td>
											<td class="miligramos">24 mg/l</td>
										</tr>
										<tr>
											<td class="elemento">MAGNESIO</td>
											<td class="miligramos">13 mg/l</td>
										</tr>
										<tr>
											<td class="elemento">SODIO</td>
											<td class="miligramos">65 mg/l</td>
										</tr>
										<tr>
											<td class="elemento">POTASIO</td>
											<td class="miligramos">3,7 mg/l</td>
										</tr>
										<tr>
											<td class="elemento">BICARBONATOS</td>
											<td class="miligramos">214,6 mg/l</td>
										</tr>
										<tr>
											<td class="elemento">SULFATOS</td>
											<td class="miligramos">42 mg/l</td>
										</tr>
										<tr>
											<td class="elemento">FLÚR</td>
											<td class="miligramos">0,86 mg/l</td>
										</tr>
										<tr>
											<td class="elemento">TOTAL SOLIDOS DISUELTOS</td>
											<td class="miligramos">312 mg/l</td>
										</tr>
									</table>
								</div>
								<div class="legal mb-4"><p>*Envasada en su fuente de origen por Bardas Blancas SA en Estancia Don José, Ruta Nacional n° 40 KM 1363, Río Mayo, Chubut, Patagonia, Argentina. RNE: 025-07000431. RNPA: 025-07004475.</p></div>

								<!-- <button class="add-padding boton_a_secciones">Ir a La mistica <img src="img/flecha_botones.png" alt="">	</button></div> -->
								<br>
								<div class="columna mb-5">
									<div class="container text-center">
										<button class="boton_a_secciones bt2 lk-mistica" data-icon="2">Ir a La Mística</button>
									</div>
								</div>
							</div>
							
						</div>	
						</div>

                    
                    			<!-- LA MISTICA -->
						<div class="detalle_icono">
						<div class="detalle_icono-int detalle-mistica">
							<div class="row fila">
								<div class="col-md-7">
									<h3>La mística</h3>
									<hr class="hr_41x2_azul">
									<h4>Despertarse y sonreír <br><strong> es bien de la patagonia.</strong></h4>
									<p><strong>No hay nada como la Patagonia Argentina. Es uno de los paisajes más hermosos y puros del mundo.</strong> Con historia, con misterio, con leyendas, con magia, tradiciones, con mar, lagos, montañas, llanos, ríos, es árida y es verde, es todo el planeta en un solo sitio. Su naturaleza generosa hace que sea el lugar más deseado por turistas y viajeros.</p>
								</div>
								<div class="col-md-5 mt-5">
									<img src="img/img_mistica_1.jpg" alt="">
								</div>
							</div>
							<div class="row fila">
                            
							<div class="col-md-3 col-sm-12 col-xs-12 mb-4">
							<img class="img-fluid" src="img/historia_3-2.jpg" alt="Responsive image">
							</div>
															
							<div class="col-md-5 col-sm-12 col-xs-12">
							<!-- <div class="hr_invertido"></div> -->
							<p class="font-weight-bold text-left">Y como contar leyendas es bien de la Patagonia, tenemos una para compartir.Hace muchos años, uno de nuestros gauchos se enfermó. Tuvo fiebre muy alta y en esa época la atención médica se hacía muy difícil, a caballo, con frio, nieve y viento, cualquier ayuda demoraba en llegar.</p>

							<p class="text-left">Este gaucho estaba temblando en su cama y su esposa decidió enfrentar las condiciones climáticas para buscar ayuda. Tomo su caballo y cabalgo hasta nuestra casa. Cuando llegamos a verlo, su marido ya no estaba. Lo encontramos sumergido en el manantial, “Estábamos preocupados” Él nos miró, hizo una pausa y nos respondió “Esta es un agua mágica, tiene propiedades curativas”, escépticos lo llevamos urgente para su casa, pero nos miramos sorprendidos cuando a las pocas horas le bajo la fiebre y mejoro su salud notablemente. </p>

							<p>Nunca supimos si fue el agua lo que lo curo, nunca supimos si era cierto lo que dijo respecto de la magia del agua de nuestro manantial y sus propiedades, pero fue ahí cuando sentimos que algo teníamos que hacer con ella.</p>
							</div>

							<div class="col-md-4 col-sm-12 col-xs-12">
							<img class="img-fluid" src="img/mistica_2.jpg" alt="Responsive image">
							</div>
						</div>	
						<div class="row fila">								
							<div class="col-lg-12 col-md-12 col-xs-12">
								<div class="videobox">
								<video class="videorizon" preload="auto" controls>
								<source src="orizon.mp4" type="video/mp4">
								Tu navegador no soport html5.
								</video>
								</div>
							</div>
						</div>
                        <br>
							<div class="columna">
								<div class="container text-center">
									<button class="boton_a_secciones bt3 lk-mistica" data-icon="3">Ir a Historia</button>
								</div>
							</div>
						</div>
					</div>	
					<!-- HISTORIA -->
					<div class="detalle_icono">
						<div class="detalle_icono-int detalle-historia">
						<div class="fila row">
							<div class="col-md-8 col-sm-6 col-xs-12 mb-4">
								<h3>La Historia</h3>
								<hr class="hr_41x2_azul">
								<h4>Conservar las tradiciones es<br><strong>bien de la Patagonia.</strong></h4>
								<p><strong>Desde hace ya cuatro generaciones en la familia Mazquiaran desarrollamos actividades rurales en la Patagonia, Argentina.</strong> Producimos fibra de guanaco, nos dedicamos a la actividad ganadera ovina y al turismo rural. Pero siempre conservando el respeto al medio ambiente.</p>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<img src="img/historia_1.jpg" alt="">
							</div>
						</div>
						<div class="fila row">
							<div class="col-md-3 col-sm-12 col-xs-12 mb-4">
								<img class="img-fluid" src="img/historia_2.jpg">
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12 descripcion">
								<!-- <div class="hr_invertido"></div> -->
								<p><strong>En 2012, haciéndole honor a nuestro espíritu innovador y respetando la cultura ecológica sustentable, creamos ORIZON, un orgullo familiar.</strong></p>
								<div class="p2">
									<p><strong>La empresa está localizada en la provincia de Chubut, Argentina</strong>, y brinda al mundo un agua mineral natural de manantial de tierras orgánicas mientras preserva la pureza del acuífero.</p>
								</div>
							</div>	
							<div class="col-md-5 col-sm-12 col-xs-12">
								<img class="img-fluid" src="img/historia_3.jpg">
							</div>
							
						</div>
						<div class="fila row">
							<div class="container text-center">
							<button class="boton_a_secciones bt4 lk-mistica" data-icon="4">Ir a desarrollo sustentable</button>
							</div>
						</div>
						</div>


											
					</div>

					<!-- SUSTENTA -->
					<div class="detalle_icono">
					<div class="detalle_icono-int detalle-sustentable">
						<div class="fila row">
							<div class="col-md-8">
								<h3>La Sustentabilidad</h3>
								<hr class="hr_41x2_azul">
								<h4>Respetar el medio ambiente <br>es <strong>bien de la Patagonia.</strong></h4>
								<p><strong>ORIZON es más que un agua mineral, es la sinergia entre el trabajo y la sustentabilidad del medio ambiente. </strong> El nombre tiene origen en la palabra “horizonte”, que delinea los paisajes de los campos patagónicos y la O, por tierras orgánicas.</p>
							</div>
							<div class="col-md-4">
								<img src="img/sustentab_1-2.jpg" alt="">
							</div>
						</div>

						<div class="row fila">
							<div class="col-md-4 mb-4"><img class="img-fluid" src="img/sustentab_2.jpg" alt="Responsive image">
							</div>

							<div class="col-md-5 descripcion">
								<!-- <div class="hr_invertido"></div> -->
								<p><strong>Un agua diferente cuenta con ventajas competitivas sustentables únicas: </strong>Embotellamos en origen en nuestra planta embotelladora ecológica de última tecnología, in-situ sobre el reservorio freático, en la precordillera patagónica.</p>
							</div>
							<div class="col-md-3 mb-4"><img class="img-fluid" src="img/sustentab_3-1.jpg" alt="Responsive image">
							</div>
							<div class="col-md-12">
								<div class="p2">
									<p>La materia prima, el agua, nunca se ve comprometida, porque nuestra planta no tiene extracción mecánica de impacto ambiental. Ofrecemos un producto excepcional, con una calidad que es considerada por especialistas hidro-sommeliers como una de las mejores aguas del mundo sin alteraciones físico-químicas. <br> <br> <strong>Ser uno de los primeros campos orgánicos de la Patagonia es un privilegio que respetamos, por lo que día a día nos ocupamos de preservar la pureza del acuífero.</strong></p>

								</div>
							</div>
							
						</div>	
						<div class="container text-center">
							<br>
							<br>
							<br>
							<button class="boton_a_secciones align-center bt5 lk-mistica" data-icon="5">Ir a La empresa</button>		
						</div>				
					</div>
					</div>

	<!-- LA EMPRESA - (nosotros) -->
					<div class="detalle_icono">
						<div class="detalle_icono-int detalle-empresa">
						<div class="fila row">
							<div class="col-md-7">
								<h3>La empresa</h3>
								<hr class="hr_41x2_azul">
								<h4>Amar lo que uno hace es<strong><br>bien de la Patagonia.</strong></h4>
								<p><strong>Nuestra misión es poder capturar toda la magia de la Patagonia </strong>para satisfacer las necesidades de las generaciones presentes y futuras con un agua mineral natural de manantial de tierras orgánicas de máxima pureza, garantizando su calidad de origen, preservando el medioambiente y contribuyendo al bienestar general.</p>
							</div>
							<div class="col-md-5 mt-5">
								<img src="img/img_nosotros1.jpg" alt="">
							</div>
						</div>
						<div class="fila row mb-5">
							<div class="col-md-6 col-sm-12 mb-4">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/-xdTSDat-N4" frameborder="0" allowfullscreen></iframe>
							
                            </div>

							<div class="col-md-6 col-sm-12 ">
								<!-- <div class="hr_invertido"></div> -->
								<div class="descripcion">
									<p><strong>Nuestra visión es ser reconocidos en el ámbito nacional e internacional como empresa líder en la producción y comercialización de agua mineral natural de manantial de tierras orgánicas, destacándonos por nuestra práctica sustentable, responsable y transparente.</strong></p>
								</div>
							</div>
						</div>	
						<img src="img/fondo_seccion_nosotros_empresa.png" class="bg-img" alt="">
						<div class="cont-box">
							<div class="fila row">
								<div class="col-md-6"></div>
								<div class="col-md-6">
									<p class="mb-5 color-movil-azul"><strong>Tenemos 4 pilares que son la base de nuestros valores y guían nuestro camino.</strong></p>
								</div>
							</div>
							<div class="fila row">
								<div class="col-md-1"></div>
								<div class="col-md-5">
									<div class="box">
										<div class="row">
											<div class="col-md-2">
												<div class="descripcion number"><h2>1</h2></div>
											</div>
											<div class="col-md-10 line">
												
													<h2>Cercanía y compromiso con la cadena de valor.</h2>
													<p style="border: none!important" >Tenemos una relación cercana y comprometida con todos los involucrados: proveedores, colaboradores, clientes, consumidores y comunidad en general.</p>
												
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="box">
										<div class="row">
											<div class="col-md-2">
												<div class="descripcion number"><h2>2</h2></div>
											</div>
											<div class="col-md-10 line">
												
													<h2>Respeto por la comunidad. </h2>
													<p style="border: none!important" >Brindamos oportunidades de trabajo en nuestra región, beneficiando a la comunidad en la que su actividad tiene influencia.</p>
												
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-1"></div>
								<div class="col-md-1"></div>
								<div class="col-md-5">
									<div class="box">
										<div class="row">
											<div class="col-md-2">
												<div class="descripcion number"><h2>3</h2></div>
											</div>
											<div class="col-md-10 line">
												
													<h2>Respeto por el medioambiente.</h2>
													<p style="border: none!important" >Llevamos la naturaleza a cada mesa preservándola con un exhaustivo cuidado en los procesos de elaboración.</p>
												
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="box">
										<div class="row">
											<div class="col-md-2">
												<div class="descripcion number"><h2>4</h2></div>
											</div>
											<div class="col-md-10 line">
												
													<h2>Transparencia.</h2>
													<p style="border: none!important" >Creemos que la integridad, el respeto, la seriedad profesional, la colaboración y la honestidad en la gestión son clave para nuestro presente y futuro.</p>
												
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-1"></div>
							</div>
						</div>
						
						<div class="mb-5">
							<div class="container text-center">
								<button class="boton_a_secciones bt1 lk-mistica" data-icon="1">Ir a El agua</button>
							</div>
						</div>	
						</div>			
					</div>
					</div><!--end main slider -->
				</div>
		</section>


	
	@section('scripts')
		<script src="js/nosotros.js"></script>
	@endsection
	 
@endsection