<?php

use Illuminate\Database\Seeder;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')->insert([
            'date' => '2019-03-25',
            'title' => '55 Corrida Internacional Diario Crónica',
            'subtitle' => 'ORIZON SPONSOR CORRIDA EN COMODORO',
            'copete' => '',
            'contenido' => '<p>Felices de haber hidratado y compartido con todos los corredores y el p&uacute;blico la 55 Corrida Internacional Diario Cr&oacute;nica realizada en Comodoro Rivadavia. Muchas gracias por la solidaridad y el talento deportivo. Para nosotros fue un orgullo.</p>',
            'slug' => '55-corrida-internacional-diario-cronica',
            'status' => 'PUBLISHED',
            'img' => 'B6XuRo8smw9Ok7xjzvG82ExKTdw8t46feA5ZLqsW.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-28',
            'title' => 'Razones para elegir Orizon',
            'subtitle' => 'ORIZON EN EL MEDIO AMBIENTE',
            'copete' => '',
            'contenido' => '<p>Diversos estudios realizados por biol&oacute;gos indican que los animales en su h&aacute;bitat eligen agua natural para hidratarse. &iexcl;Ellos saben elegir! Vos tambi&eacute;n pod&eacute;s elegir agua natural, eleg&iacute; Orizon: Agua Natural de Manantial de Tierras Org&aacute;nicas.</p>',
            'slug' => 'razones-para-elegir-orizon',
            'status' => 'PUBLISHED',
            'img' => '8L6Yl0sUEs8G40KFjpwey8HFVc1jKgvG6rSs8xkG.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-28',
            'title' => 'Running Motivacional',
            'subtitle' => 'ORIZON SPONSOR CLUB DE CHICAS RUNNING & PIA SLAPKA',
            'copete' => '',
            'contenido' => '<p>&iexcl;La pasamos genial en el Running Motivacional! Gracias a Club de Chicas Argentina y Pia Slapka por compartir y elegir&nbsp;#OrizonAguaMineral&nbsp;. Estos eventos nos hacen reafirmar nuestra dedicaci&oacute;n por llevarles una opci&oacute;n saludable y rica al momento de hidratarse.</p>',
            'slug' => 'running-motivacional',
            'status' => 'PUBLISHED',
            'img' => 'X1dxyIlYZ8Uc2rqqGNhkwIYJ207hmexXqOpXS9hl.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-28',
            'title' => 'Orizon y su pureza',
            'subtitle' => 'LA NARURALEZA Y SUS PROPIEDADES EN ORIZON',
            'copete' => '',
            'contenido' => '<p>Orizon Agua Mineral proviene de un acu&iacute;fero subterr&aacute;neo. Durante muchos a&ntilde;os, a veces centenares o miles, la naturaleza filtra el agua de lluvia a trav&eacute;s de las rocas y la almacena en estos acu&iacute;feros, donde se encuentra libre de cualquier tipo de contaminaci&oacute;n. En Orizon nos encargamos de embotellar la naturaleza para llevarla a tu mesa. &iexcl;Probala!</p>',
            'slug' => 'orizon-y-su-pureza',
            'status' => 'PUBLISHED',
            'img' => 'XG6zwFLqF4sZpzXahxqGCOrB8bd6Kft7hrxlazD8.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-28',
            'title' => 'Rugby Playero Rada Tilly',
            'subtitle' => 'ORIZON SPONSOR RUGBY',
            'copete' => '',
            'contenido' => '<p>Para garantizar una hidrataci&oacute;n de calidad con agua pura de manantial compartimos momentos con quienes eligen Orizon Agua Mineral. Estamos en distintas ciudades para vos y hasta en la playa para que la diversi&oacute;n sea saludable y divertida. &iquest;Te anim&aacute;s?</p>',
            'slug' => 'rugby-playero-rada-tilly',
            'status' => 'PUBLISHED',
            'img' => 'EWSr42E7xsgGcY7leXsTxgVEKr2EgKNSw6IPAEUT.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-28',
            'title' => 'Una súper receta para mantenerte hidratada y con energía',
            'subtitle' => 'AGUA DE LIMÓN CON SEMILLAS DE CHÍA, QUE NO FALTE EN TU BOLSO.',
            'copete' => '',
            'contenido' => '<p>El agua de lim&oacute;n con ch&iacute;a, es una s&uacute;per receta para tener en cuenta todos los d&iacute;as, pero por sobre todo ahora que asoma la primavera y los d&iacute;as de sol.<br /> Esta natural preparaci&oacute;n va a aportarle a tu cuerpo fibras, prote&iacute;nas e hidratos de carbono; una porci&oacute;n, como la que te mostramos abajo, contiene solo 32 calor&iacute;as.</p> <p><strong>Para una porci&oacute;n lo que necesitas es:</strong></p> <ul> <li>250 mililitros de agua Orizon</li> <li>1 cucharadita de ch&iacute;a</li> <li>1 cucharadita de az&uacute;car / endulzante natural bajo en calor&iacute;as (opcional)</li> </ul> <p><strong>La preparaci&oacute;n es muy sencilla:</strong></p> <ul> <li>Enfr&iacute;a es agua Orizon</li> <li>o Una vez fr&iacute;a remoj&aacute; la ch&iacute;a dentro del agua</li> </ul> <h3>&iquest;Te gust&oacute; nuestra receta? Pod&eacute;s mandarnos las fotos de tu preparaci&oacute;n a nuestras redes sociales, para compartirlas con nuestros seguidores.</h3> <p><a href="https://www.instagram.com/orizonaguamineral/" target="_blank"><img alt="@orizonaguamineral" src="https://www.orizon.com.ar/img/noticias/instagram.png" style="float:left; height:30px; margin-left:10px; margin-right:10px; width:30px" /></a><a href="https://www.facebook.com/orizonAguaMineral/" target="_blank"><img alt="https://www.facebook.com/orizonAguaMineral/" src="https://www.orizon.com.ar/img/noticias/facebook.png" style="float:left; height:30px; margin-left:10px; margin-right:10px; width:30px" /></a></p> <p>&nbsp;</p> <p>&nbsp;</p> <p>Fuente: www.melodijolola.com</p>',
            'slug' => 'una-super-receta-para-mantenerte-hidratada-y-con-energia',
            'status' => 'PUBLISHED',
            'img' => 'hSuaAbA4tFqAkB9xaLcyBbsE1dBK9ja5BTvU9tQa.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-28',
            'title' => 'El agua mineral es la nueva aliada para tu rutina de belleza.',
            'subtitle' => 'LAS PROPIEDADES DEL AGUA MINERAL CAUTIVAN EN EL ORIENTE, PARA EL CUIDADO DE LA PIEL',
            'copete' => '',
            'contenido' => '<p>Qu&eacute; es el &ldquo;facial de agua mineral&rdquo;, el m&eacute;todo de belleza que cautiva a las mujeres orientales, en esta nota te contamos &eacute;l y sobre sus beneficios. Es una nueva t&eacute;cnica que tiene su origen en Jap&oacute;n pero que est&aacute; siendo furor en Corea, se proclama como la salvadora de la piel porque adem&aacute;s de purificarla, le da frescura y firmeza.<br /> En muchos spas de los diferentes continentes el agua carbonatada (agua mineral), es utilizada para curar afecciones de la piel. Existen diferentes formas de aplicarla, pero lo cierto es que su uso se ha hecho muy popular en las rutinas de belleza caseras de las mujeres coreanas.<br /> Algunas la utilizan para aplicarla en el rostro y otras la mezclan con su agua de ba&ntilde;era para darse ba&ntilde;os de inmersi&oacute;n donde se sumergen fortaleciendo as&iacute; tambi&eacute;n al cuero cabelludo.<br /> El secreto de su &eacute;xito es una mezcla muy simple, solo basta con mezclar el agua mineral carbonatada (agua con gas) con agua mineral con el fin de bajar el gas y que la misma se vuelva m&aacute;s amigable con la piel.<br /> El porcentaje es medio litro de agua mineral con gas por medio litro de agua mineral, el contenido lo colocas en un recipiente donde puedas sumergir tu cara entre 10 y 15 segundos, luego lava y seca tu cara. Este procedimiento hacelo no m&aacute;s de una o dos veces por semana.<br /> No queremos sobrecargar nuestra piel de agua con gas, porque si bien es un proceso sencillo y tiene su efecto y debe ser controlado y moderado.<br /> Un Golden Tip que damos desde Orizon, si quer&eacute;s m&aacute;s frescura en tu piel pod&eacute;s aplicar mascarillas naturales, una vez finalizado el tratamiento. Las mismas pueden ser de pepino, miel, s&aacute;bila, etc. Probalo y cotanos c&oacute;mo te fue.</p>',
            'slug' => 'el-agua-mineral-es-la-nueva-aliada-para-tu-rutina-de-belleza',
            'status' => 'PUBLISHED',
            'img' => 'K1cy8CXa6vd1fGnGiQndD2pr1BXUJX7fblRfnF4Z.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-28',
            'title' => 'H2O IS THE NEW BLACK',
            'subtitle' => 'PASA TODO MENOS LA MODA, QUE ES COMO EL AGUA, SIEMPRE ESTÁ A LA VANGUARDIA.',
            'copete' => '',
            'contenido' => '<p>Ya hemos escuchado mucho acerca del agua, que hace bien al cuerpo, que es un l&iacute;quido de vital importancia, que debemos ser conscientes de su uso por ser uno de los recursos m&aacute;s importantes de nuestro planeta y componente esencial paran nuestro cuerpo.<br /> Sab&iacute;as que la mayor&iacute;a de las funciones que realiza el metabolismo involucran al agua, de ah&iacute; la importancia de incorporarla en tu dieta diaria.<br /> Qui&eacute;n m&aacute;s sufre la falta de consumo de agua, es nuestra piel, ya que, a diferencia de la comida, no tenemos la capacidad de almacenar agua. Lo que se usa es lo que se consume.<br /> Por eso se recomienda tomar al menos 1 Litro y medio de agua por d&iacute;a, para ayudar al cuerpo a desechar todos los excesos.</p> <p><strong>&iquest;Qu&eacute; pasa con el agua mineral embotellada?</strong><br /> Como seguramente habr&aacute;s notado, cada vez son m&aacute;s las personas que han empezado a tomar conciencia acerca de llevar una vida saludable. Por eso, para que sigas tomando agua, te contamos que el porcentaje de sodio que tiene el agua embotellada es muy bajo y no afecta al consumo diario de sal que el cuerpo necesita. &iexcl;Buen&iacute;simo!<br /> A lo que s&iacute; ten&eacute;s que prestar atenci&oacute;n al momento de elegir agua embotellada es a las que son minerales, de las purificadas. Las primeras, al igual que Orizon, provienen de una fuente natural por lo que no es sometida a ning&uacute;n tipo de proceso y se encuentra libre de contaminantes, mientras que la purificada necesita de ciertos tratamientos para no hacer da&ntilde;o a la salud.&nbsp;<strong>Por eso al momento de elegir, eleg&iacute; Orizon que es agua natural, mineral, de manantial de tierras org&aacute;nicas.</strong></p> <p>Fuente: www.blastingnews.com</p>',
            'slug' => 'h2o-is-the-new-black',
            'status' => 'PUBLISHED',
            'img' => 'PlCJ1QDFKFsnGNGiDLC2tFXB03eHzLPZLxnLbLpC.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-28',
            'title' => 'El Guanaco, herencia de la Patagonia.',
            'subtitle' => 'ARGENTINA CUENTA CON LA MAYOR CANTIDAD DE GUANACOS DEL PLANETA, UN ANIMAL SILVESTRE DESCENDIENTE DE LA LLAMA QUE SÓLO EXISTE EN CINCO PAÍSES DE AMÉRICA DEL SUR. EN PAÍSES COMO BOLIVIA, PARAGUAY Y PERÚ QUEDAN POCOS EJEMPLARES, LO QUE LLEVÓ A DECLARAR A LA ESPECIE EN PELIGRO DE EXTINCIÓN.',
            'copete' => '',
            'contenido' => '<p>El agua de lim&oacute;n con ch&iacute;a, es una s&uacute;per receta para tener en cuenta todos los d&iacute;as, pero por sobre todo ahora que asoma la primavera y los d&iacute;as de sol.<br /> Esta natural preparaci&oacute;n va a aportarle a tu cuerpo fibras, prote&iacute;nas e hidratos de carbono; una porci&oacute;n, como la que te mostramos abajo, contiene solo 32 calor&iacute;as.</p> <p>El Guanaco es una especie que desciende de llama y habita la Patagonia Argentina, aunque en algunos pa&iacute;ses de Am&eacute;rica del Sur este declarado como una especie en peligro de extinci&oacute;n, en la austral provincia argentina de Santa Cruza guanacos, su magnitud el tal que algunos ciudadanos lo consideran una plaga.</p> <p>A pesar de las discrepancias que presentan los habitantes de la provincia, El Consejo Nacional de Investigaciones Cient&iacute;ficas y T&eacute;cnicas de Argentina (Conicet) explic&oacute; a trav&eacute;s de un comunicado que lejos de ser perjudicial, el guanaco tiene caracter&iacute;stica que ayudan a preservar la regi&oacute;n, adem&aacute;s de ser un enorme potencial econ&oacute;mico a&uacute;n sin explotar.</p> <p>Este animal posee una de las fibras m&aacute;s final de reino animal, debido a su impermeabilidad y suavidad; lo que la vuelve muy apreciada para el mercado textil internacional.</p> <p>El empresario Juan Jos&eacute; Mazquiar&aacute;n sostiene que &ldquo;El Guanaco es la ganader&iacute;a del futuro de la Patagonia&rdquo; y sostiene que los guanacos ofrecen muchas m&aacute;s ventajas, es por eso que desde 1998 desarrolla la cr&iacute;a de estos animales.</p> <p>Por su parte, Ricardo Baldi, investigador del Centro Nacional Patag&oacute;nico expreso que &ldquo;el guanaco al tener almohadillas en los dedos impacta menos en el suelo preservando mejor los pastizales. Estas y muchas m&aacute;s ventajas nos provee esta especie que abunda nuestra Patagonia, pero ser&aacute; cuesti&oacute;n de esperar unos a&ntilde;os para saber si se convertir&aacute; en el nuevo rey de la Patagonia.</p>',
            'slug' => 'el-guanaco-herencia-de-la-patagonia',
            'status' => 'PUBLISHED',
            'img' => 'Lh1SFHTSacEiPKYPvEO9bWw5Z45nPbgedf2Ru34N.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-28',
            'title' => 'El agua => Un derecho de todos.',
            'subtitle' => 'EN JULIO DE 2010, LA ASAMBLEA GENERAL DE LAS NACIONES UNIDAS RECONOCIÓ EL DERECHO AL AGUA Y AL SANEAMIENTO, DETERMINANDO QUE TODO SER HUMANO TIENE DERECHO A ENTRE 50 Y 100 LITROS DE AGUA SEGURA Y ASEQUIBLE POR PERSONA Y DÍA Y QUE SU ACCESO ESTÉ A MENOS DE MIL METROS O A UN MÁXIMO DE MEDIA HORA DE SU HOGAR. ¿QUÉ PLANTEAN PARA LOGRARLO?',
            'copete' => '',
            'contenido' => '<p>Para lograr que el derecho a un agua asequible y segura en el corto plazo, se cre&oacute; el &ldquo;Objetivo de Desarrollo Sostenibles (ODS) 6 que busca garantizar la disponibilidad de agua y su gesti&oacute;n sostenible y el saneamiento para todos debido a que la escasez de agua afecta actualmente a m&aacute;s del 40% de la poblaci&oacute;n mundial.<br /> <br /> Es por eso que las metas de las ODS cubren desde los aspectos del ciclo del agua, as&iacute; como tambi&eacute;n concientizar desde la educaci&oacute;n generando diferentes medidas medioambientales.<br /> <br /> Es por esta necesidad que nacen la celebraci&oacute;n del D&iacute;a Mundial del Agua que se realiza cada 22 de marzo acompa&ntilde;ada de una campa&ntilde;a p&uacute;blica que trata de crear conciencia sobre los problemas del agua, centr&aacute;ndose en un tema particular y tratando de inspirar actuaciones.<br /> <br /> En Orizon entendemos la problem&aacute;tica y apostamos a tener un agua pura, natural y Premium y expandirnos cada vez m&aacute;s para estar m&aacute;s cerca de nuestros consumidores.</p>',
            'slug' => 'el-agua-un-derecho-de-todos',
            'status' => 'PUBLISHED',
            'img' => 'zcQC9AeixzG88PGBjjlWETxqACK3cNAiOhwwtRgg.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-28',
            'title' => 'Tomar conciencia de un recurso finito e indispensable => el agua.',
            'subtitle' => 'TANTO EL PLANETA TIERRA COMO EL SER HUMANO, SON 70% AGUA; QUIZÁS SEA POR ESO QUE LO RECOMENDABLE PARA TENER UNA DIETA SALUDABLE Y UNA LARGA VIDA SEA EL COMER ALIMENTOS CON UN PORCENTAJE DEL 70 % EN AGUA. PERO LO VERDADERAMENTE IMPORTANTE ES CUIDAR EL AGUA Y EN ESTA NOTA TE DECIMOS CÓMO Y POR QUÉ HACERLO. LA NECESIDAD DEL AGUA, TANTO PARA EL PLANETA TIERRA COMO PARA EL SER HUMANO ES PRIMORDIAL; ES POR ESO QUE ESTE BIEN TAN NECESARIO ES CONOCIDO COMO “EL ORO LÍQUIDO” DEBIDO AL VALOR QUE REPRESENTA PARA EL ECOSISTEMA DE LA VIDA.',
            'copete' => '',
            'contenido' => '<p>Por eso debemos replantearnos el uso que hacemos del agua en nuestras vidas cotidianas con el fin de cuidar este recurso finito para las generaciones venideras, ya que si bien, como comentamos, el 70% del planeta es agua solo es 1% representa agua dulce, es decir, consumible, para las especies vivientes y un 3% es agua que se encuentra en los polos en forma de hielo.<br /> En este contexto tambi&eacute;n es necesario remarcar que adem&aacute;s de ser un recurso vital, es tambi&eacute;n un recurso econ&oacute;mico e industrial que se utiliza para innumerables actividades industriales donde su pureza termina siendo afectada.<br /> <br /> <strong>Pero &iquest;por qu&eacute; es agua es una mol&eacute;cula tan crucial para la vida?</strong><br /> Varias propiedades qu&iacute;micas del agua hacen que sea indispensable para los seres vivos, ya que el agua no s&oacute;lo puede disolver casi cualquier coca, sino que tambi&eacute;n es uno de los pocos materiales que pueden existir en estado s&oacute;lido, l&iacute;quido y gaseoso dentro de un peque&ntilde;o rango de temperaturas.<br /> <br /> <strong>&iquest;Qu&eacute; es lo que proponemos desde Orizon?</strong><br /> En principio ser conscientes que, aunque parezca que disponemos de forma ilimitada del agua, es todo lo contrario. La tierra cada vez est&aacute; m&aacute;s caliente, generando desertizaci&oacute;n en zona donde antes gozaban de r&iacute;os y pantanos, lo que se suma la imposibilidad de poder cultivar y regar la tierra.<br /> Entender que ahorrar agua es suma importancia. Con peque&ntilde;os cambios ayudamos un mont&oacute;n y ahorramos miles de litros por d&iacute;a. Podemos utilizar reguladores en los grifos, realizar duchas r&aacute;pidas, cepillarnos los dientes o afeitarnos con la canilla cerrada, por nombrar solo unos ejemplos.<br /> Cerramos esta nota con una frase del antrop&oacute;logo Loran Eisely que sostiene que;<br /> <strong>&ldquo;Si hay magia en este planeta, est&aacute; contenida en el agua&rdquo;.</strong></p>',
            'slug' => 'tomar-conciencia-de-un-recurso-finito-e-indispensable-el-agua',
            'status' => 'PUBLISHED',
            'img' => '3nPmMcGoFafMcnffvTNYrUyZaearHchOmp0SVVDu.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-28',
            'title' => 'Orizon galardonada en los premios APSAL 2019',
            'subtitle' => 'EL PASADO 2 DE OCTUBRE EN LA CIUDAD DE BUENOS AIRES SE CELEBRARON LOS PREMIOS APSAL 2019. ORIZON ESTUVO PRESENTE Y FUE GALARDONADO EN LA CATEGORÍA AGUAS POR SU PRODUCTO AGUA MINERAL NATURAL DE MANANTIAL DE TIERRAS ORGÁNICAS.',
            'copete' => '',
            'contenido' => '<p>La entrega fue realizada por la Asociaci&oacute;n de Profesionales de la Salud y Alimentaci&oacute;n donde anualmente se premian productos con cualidades e innovaciones destacadas dentro del sector alimenticio, otorgando un reconocimiento a la excelencia en producci&oacute;n alimentaria.<br /> <br /> El responsable de la entrega del premio fue el sommelier de aguas y especialista en t&eacute; Horacio Bustos recibiendo la Ing. en Alimentos, Mar&iacute;a Virginia Cruces como Directora T&eacute;cnica de Calidad de Orizon.<br /> <br /> Orizon es una empresa que nace en 2012 y se desprende del trabajo de cuatro generaciones dedicadas a las actividades rurales en La Patagonia Argentina, haciendo honor a su esp&iacute;ritu innovador y siempre respetando la cultura ecol&oacute;gica y sustentable. Localizada en la provincia de Chubut, Argentina, brinda al mundo un agua mineral natural de manantial de tierras org&aacute;nicas mientras preserva la pureza del acu&iacute;fero.<br /> <br /> Actualmente Orizon es proveedor de varias cadenas de supermercados en toda la Patagonia presente en m&aacute;s de 60 sucursales y cuenta con distribuidores en 5 diferentes provincias del pa&iacute;s.<br /> <br /> Adem&aacute;s en los &uacute;ltimos a&ntilde;os, se ha transformado en una marca referente en la provisi&oacute;n de la industria petrolera y minera, encontr&aacute;ndose hoy en d&iacute;a en la realizaci&oacute;n de un plan de comercio internacional, donde exporta calidad y pureza a China.<br /> <strong>Orizon es m&aacute;s que un agua mineral, es la sinergia entre el trabajo y la sustentabilidad del medio ambiente.</strong></p>',
            'slug' => 'orizon-galardonada-en-los-premios-apsal-2019',
            'status' => 'PUBLISHED',
            'img' => 'hma9RTgO1AWNbJjozLKRyv2pTiWEQsY3NwSkhQ8I.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-28',
            'title' => 'Participamos del evento; Don Bosco Corre por los Jóvenes y las Familias.',
            'subtitle' => 'ORIZON PARTICIPÓ DE LA ACTIVIDAD DON BOSCO CORRE, EN CALETA OLIVIA. UN EVENTO QUE CONVOCA A LOS PARTICIPANTES A INCULCAR VALORES SOBRE LA IMPORTANCIA DE LA VIDA DE LOS JÓVENES.',
            'copete' => 'El pasado lunes 21 de Octubre se llevó a cabo la actividad Don Bosco Corre por los Jóvenes y las Familias en la localidad de Caleta Olivia. La convocatoria reunió gran cantidad de corredores y aficionados que se juntaron para ayudar a continuar con la obra Don Bosco, que se basa en inculcar valores y ser conscientes de la importancia de la vida de los jóvenes.',
            'contenido' => '<p>El pasado lunes 21 de Octubre se llev&oacute; a cabo la actividad Don Bosco Corre por los J&oacute;venes y las Familias en la localidad de Caleta Olivia.<br /> La convocatoria reuni&oacute; gran cantidad de corredores y aficionados que se juntaron para ayudar a continuar con la obra Don Bosco, que se basa en inculcar valores y ser conscientes de la importancia de la vida de los j&oacute;venes.</p>',
            'slug' => 'participamos-del-evento-don-bosco-corre-por-los-jovenes-y-las-familias',
            'status' => 'PUBLISHED',
            'img' => 'VNEhqIB2z6SEomIS7xMwHLxskFQY6D9wgKZsVGc8.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-03-25',
            'title' => 'Protocolos de seguridad COVID-19',
            'subtitle' => 'ORIZON INFORMA, QUE DEBIDO A LA SITUACIÓN DEL COVID 19, SE IMPLEMENTARON PROTOCOLOS ESPECÍFICOS DE SEGURIDAD ALIMENTARIA RECOMENDADOS POR EL MINISTERIO DE SALUD DE LA NACIÓN, FORTALECIENDO Y PROFUNDIZANDO LOS PROCEDIMIENTOS OPERATIVOS DE SANITIZACIÓN EN CADA ETAPA DEL PROCESO PRODUCTIVO Y DE EXPEDICIÓN.',
            'copete' => '',
            'contenido' => '<p>Adem&aacute;s de brindar las capacitaciones adecuadas al personal, se formalizaron los nuevos instructivos de trabajo, realizando los registros internos pertinentes de Calidad. Instruyendo al personal en medidas de prevenci&oacute;n personal y hacia terceros (evitando contacto con boca, nariz y ojos), incorporando nueva indumentaria y renovando procedimientos de trabajo, seg&uacute;n l&iacute;nea productiva y de operaciones.</p> <p><big><strong>PRODUCCION:</strong></big></p> <ul> <li>Uso de barbijo, anteojos de seguridad o los recetados, y guantes de nitrilo, para aquellos que usan lo de seguridad para cargas.</li> <br /> <li>Kit de seguridad con mamelucos de friselina y cofias.</li> <br /> <li>Aumentar la frecuencia de lavado de manos y/o guantes cada 40 minutos durante 20 segundos cada lavado. Siempre usando t&eacute;cnica de OMS.</li> <br /> <li>Se incorpor&oacute; un doble proceso de sanitizaci&oacute;n de envases antes del ingreso de estos a la l&iacute;nea productiva, ya adentro se proceder&aacute; a mantener especial y minuciosa higiene de los envases antes de ser llenados (seg&uacute;n las t&eacute;cnicas en uso).</li> <br /> <li>A tal fin los operarios encargados de dicho procedimiento fueron instruidos y provistos de indumentaria, equipamiento y sanitizantes aprobados por SENASA.</li> <br /> <li>&nbsp;</li> </ul> <p><big><strong>TRANSPORTE / DEPOSITO:</strong></big></p> <ul> <li>Uso de guantes, antiparras o anteojos recetados, barbijo aire (cada 40 o 60 min de trabajo con barbijo).</li> <br /> <li>Sanitizar&aacute;n todos los envase vac&iacute;os al momento de retirarlos del cliente y antes de ser trasladado a planta elaboradora.</li> <br /> <li>Al momento de hacer la entrega de la mercader&iacute;a, evitaran la cercan&iacute;a con otras personas (1,5 m de distancia m&iacute;nima), el remito debe ser firmado con la lapicera del comprador, de lo contrario deber&aacute; sanitizarla (soluci&oacute;n del alcohol o lavandina u otro desinfectante) luego del uso del mismo.</li> <br /> <li>Luego de cada entrega deber&aacute;n sanitizar los guantes y las superficies de contacto del cami&oacute;n y/o veh&iacute;culo (volantes, guantera, todo lo que toque etc.)</li> <br /> <li>Ventilaci&oacute;n frecuente de los espacios, permitiendo la circulaci&oacute;n de aire.</li> <br /> <li>&nbsp;</li> </ul> <p><big><strong>COMPRAS / DESPACHO / OFICINAS:</strong></big></p> <ul> <li>Toda compra que ingresa del exterior ser&aacute; previamente sanitizada por pulverizado o trapeo con soluci&oacute;n sanitizante (de envases, librer&iacute;a, alimentos, higiene, etc)</li> <br /> <li>Los clientes no ingresan a las oficinas y de hacerlo es por excepci&oacute;n autorizada de una persona por vez. Debiendo aguardar en el exterior en fila, respetando la distancia entre ellos solicitada por la OMS.</li> <br /> <li>En cada puesto/oficina de proceso se pondr&aacute; a disposici&oacute;n del personal y del cliente alcohol en gel u otro sanitizante que usara por cambio de actividad o acci&oacute;n de posible riesgo.</li> <br /> <li>El personal de limpieza y manipuladores deben sanitizar con mayor frecuencia las superficies de apoyo o agarre de manos o insumos que provengan del exterior (manijas, mesones, pisos, estanter&iacute;as, teclas de llaves de luz y enchufes)</li> <br /> <li>Los posnet, el teclado de la computadora y todo control remoto se proteger&aacute;n con film de recambio por d&iacute;a.</li> <br /> <li>El cajero o quien cobra o entrega de forma directa el bid&oacute;n usar&aacute; guantes.</li> <br /> <li>Ventilaci&oacute;n frecuente de los espacios, permitiendo la circulaci&oacute;n de aire.</li> </ul> <p>&nbsp;</p> <p><big><strong>Tambi&eacute;n se instruy&oacute; en la conducta a tener en comedor del personal, sanitarios, en las medidas preventivas fuera del lugar de trabajo (in itinere) y en los hogares de cada empleado.</strong></big></p>',
            'slug' => 'protocolos-de-seguridad-covid-19',
            'status' => 'PUBLISHED',
            'img' => 'JToVR1xNAILzV69KKYdUIFHn5iMhWwPJPBpEqhns.png'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '1980-06-11',
            'title' => 'Condiciones Aval Rural Octubre 2019',
            'subtitle' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAa',
            'copete' => '',
            'contenido' => '',
            'slug' => 'condiciones-aval-rural-octubre-2019',
            'status' => 'PUBLISHED',
            'img' => '86GQwyMN86hDCNOD2UAWKRVWpMK659v2rZYwkz2g.jpeg'
            ]);
            
            DB::table('noticias')->insert([
            'date' => '2020-04-30',
            'title' => 'titulo',
            'subtitle' => 'subtitulo',
            'copete' => 'copete',
            'contenido' => '',
            'slug' => 'titulo',
            'status' => 'PUBLISHED',
            'img' => '7ByX3lqdU0v30g9j23bpvvYHqTFIcp55xNit5Lyl.png'
            ]);
    }
}
