    <!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Festival Latinoamericano de Software Libre</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Entrepreneur Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- font links -->
  <link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!-- /font links -->
  <!-- css links -->
<link href="css/bootstrap.min.css" rel="stylesheet" rel="stylesheet" type="text/css" media="all"/>
<link href="css/owl.carousel.css" rel="stylesheet" rel="stylesheet" type="text/css" media="all"/>
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="icon" type="image/png" href="images/flisol_imagenes/iconognu.png">
<!-- /css links -->
  <!-- js links -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.0/SmoothScroll.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- /js links -->
	<!-- js for portfolio  -->
	<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 5,
						lazyLoad : true,
						autoPlay : true,
						pagination : false,
					});
				});
			</script>
	<!-- js for portfolio  -->
  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-49141806-8', 'auto');
    ga('send', 'pageview');

  </script>
  <!-- / Google analytics -->

  <!-- Google recaptcha -->
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!-- /Google recaptcha -->

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#myPage">Flisol</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#myPage">Inicio</a></li>
				<li><a href="#priorities">Sobre el Flisol</a></li>
				<li><a href="#portfolio">Anteriores</a></li>
				<li><a href="#about">Disertantes</a></li>
        <li><a href="#crono">Cronograma</a></li>
				<li><a href="#team">Organiza</a></li>
				<li><a href="#contact">Inscripción</a></li>
			</ul>
		</div>
	</div>
</nav>
<!-- banner -->
<div class="jumbotron banner">
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inscripcion</h4>
      </div>
      <div class="modal-body">
        <?php
          if (isset($_GET['e'])){
            if($_GET['e'] == "0"){
                echo "El registro se realizo correctamente";
            }elseif($_GET['e'] == "1"){
               echo 'El email ya esta registrado!';
            }elseif($_GET['e'] == "4"){
               echo 'Complete el reCAPTCHA!';
            }else{
              echo 'Hubo un error, no pudimos realizar la inscripcion :( manda un mail a lafuenteunlp@gmail.com';
            }
          }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- /banner -->
<!-- Our Priorities -->
<div class="priority" id="priorities">
	<h3 class="slideanim text-center">Sobre el Flisol</h3>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 placeholder">
				<img class="img-circle img-responsive slideanim" src="images/flisol_imagenes/circulo1.png" alt="Generic placeholder thumbnail" width="140" height="140">
				<h4 class="text-center slideanim">¿Qué es el Flisol?</h4>
				<p class="text-center slideanim">El Festival Latinoamericano de Instalación de Software Libre (F.L.I.S.O.L) es el evento de difusión de software libre más grande en Latinoamérica. Se realiza desde el año 2005 y desde el 2008 se adoptó su realización el 4to sábado de abril de cada año. Su principal objetivo es promover el uso del software libre, dando a conocer al público en general su filosofía, alcances, avances y desarrollo.
A tal fin, las diversas comunidades locales de software libre (en cada país/ciudad/localidad), organizan simultáneamente eventos en los que se instala, de manera gratuita y totalmente legal, software libre en las computadoras que llevan los asistentes. Además, en forma paralela, se ofrecen charlas, ponencias y talleres, sobre temáticas locales, nacionales y latinoamericanas en torno al Software Libre, en toda su gama de expresiones: artística, académica, empresarial y social.</p>
			</div><!-- /.col-xs-4 -->
			<div class="col-sm-4 placeholder">
				<img class="img-circle img-responsive slideanim" src="images/flisol_imagenes/circulo2.png" alt="Generic placeholder thumbnail" width="140" height="140">
				<h4 class="text-center slideanim">¿Quién lo organiza?</h4>
				<p class="text-center slideanim">La Comunidad de Software Libre en Latinoamérica, conformada por personas y grupos de diversa índole, con el apoyo de otras entidades, principalmente educativas, y algunos patrocinadores de los eventos en cada localidad.
El FLISoL La Plata es organizado por SOLAR y la conducción del Centro de Estudiantes de la Facultad de Informática, la Agrupación Estudiantil La Fuente.</p>
			</div><!-- /.col-xs-4 -->
			<div class="col-sm-4 placeholder">
				<img class="img-circle img-responsive slideanim" src="images/flisol_imagenes/circulo3.png" alt="Generic placeholder thumbnail" width="140" height="140">
				<h4 class="text-center slideanim">¿Qué beneficios tengo?</h4>
				<p class="text-center slideanim">Tendrás la oportunidad de instalar software libre en tu computadora, apreciar qué es una real y segura alternativa a otros modelos de desarrollo y distribución de software. Informarte sobre la filosofía, cultura y organización alrededor del mismo. Conocer las experiencias, desarrollos e investigaciones de grupos y entidades en torno al Software Libre, tanto a nivel local como nacional e internacional. Tal vez encuentres una alternativa/solución en software libre para ti, tu empresa, colegio, universidad e, incluso, para tu gobierno. Podrás aclarar tus dudas acerca de los temas relacionados y, quizás encuentres en el software libre, una alternativa de investigación, empleo y desarrollo tecnológico. Certificación.
Se entregarán certificados avalados por la Universidad Nacional de la Plata a todos los que asistan al festival.</p>
			</div><!-- /.col-xs-4 -->
		</div><!-- /.row -->
	</div>
</div>
<!-- /Our Priorities -->
<!-- Portfolio -->
<div class="portfolios" id="portfolio">
  <br>
<h3>Flisoles Pasados</h3>
<div class="gallery-cursual slideanim" >
	<!-- start content_slider -->
	<div id="owl-demo" class="owl-carousel text-center">
		<div class="item g1 popup-with-zoom-anim" href="#small-dialog1">
			<img class="lazyOwl img-responsive" data-src="images/flisol_imagenes/pasados/pasados-1-1.jpg" alt="name">
			<div class="caption">
				<span class="glyphicon glyphicon-hand-up"></span>
				<p>Click To Know More</p>
			</div>
		</div>
		<div class="item g1 popup-with-zoom-anim" href="#small-dialog2">
			<img class="lazyOwl img-responsive" data-src="images/flisol_imagenes/pasados/pasados-2-2.jpg" alt="name">
			<div class="caption">
				<span class="glyphicon glyphicon-hand-up"></span>
				<p>Click To Know More</p>
			</div>
		</div>
		<div class="item g1 popup-with-zoom-anim" href="#small-dialog3">
			<img class="lazyOwl img-responsive" data-src="images/flisol_imagenes/pasados/pasados-3-3.jpg" alt="name">
			<div class="caption">
				<span class="glyphicon glyphicon-hand-up"></span>
				<p>Click To Know More</p>
			</div>
		</div>
		<div class="item g1 popup-with-zoom-anim" href="#small-dialog4">
			<img class="lazyOwl img-responsive" data-src="images/flisol_imagenes/pasados/pasados-4-4.jpg" alt="name">
			<div class="caption">
				<span class="glyphicon glyphicon-hand-up"></span>
				<p>Click To Know More</p>
			</div>
		</div>
		<div class="item g1 popup-with-zoom-anim" href="#small-dialog5">
			<img class="lazyOwl img-responsive" data-src="images/flisol_imagenes/pasados/pasados-5-5.jpg" alt="name">
			<div class="caption">
				<span class="glyphicon glyphicon-hand-up"></span>
				<p>Click To Know More</p>
			</div>
		</div>
		<div class="item g1 popup-with-zoom-anim" href="#small-dialog6">
			<img class="lazyOwl img-responsive" data-src="images/flisol_imagenes/pasados/pasados-6-6.jpg"  alt="name">
			<div class="caption">
				<span class="glyphicon glyphicon-hand-up"></span>
				<p>Click To Know More</p>
			</div>
		</div>
		<div class="item g1 popup-with-zoom-anim" href="#small-dialog7">
			<img class="lazyOwl img-responsive" data-src="images/flisol_imagenes/pasados/pasados-7-7.jpg"alt="name">
			<div class="caption">
				<span class="glyphicon glyphicon-hand-up"></span>
				<p>Click To Know More</p>
			</div>
		</div>
		<div class="item g1 popup-with-zoom-anim" href="#small-dialog8">
			<img class="lazyOwl img-responsive" data-src="images/flisol_imagenes/pasados/pasados-8-8.jpg" alt="name">
			<div class="caption">
				<span class="glyphicon glyphicon-hand-up"></span>
				<p>Click para expandir</p>
			</div>
		</div>
	</div>
	<!-- Pop-up -->
	<div class="caption-popup">
		<div id="small-dialog1" class="mfp-hide innercontent slideanim">
			<img class="img-responsive" src="images/flisol_imagenes/pasados/pasados-1.jpg" title="postname" />
		</div>
		<div id="small-dialog2" class="mfp-hide innercontent slideanim">
			<img class="img-responsive" src="images/flisol_imagenes/pasados/pasados-2.jpg" title="postname" />
		</div>
		<div id="small-dialog3" class="mfp-hide innercontent slideanim">
			<img class="img-responsive" src="images/flisol_imagenes/pasados/pasados-3.jpg" title="postname" />
		</div>
		<div id="small-dialog4" class="mfp-hide innercontent slideanim">
			<img class="img-responsive" src="images/flisol_imagenes/pasados/pasados-4.jpg" title="postname" />
		</div>
		<div id="small-dialog5" class="mfp-hide innercontent slideanim">
			<img class="img-responsive" src="images/flisol_imagenes/pasados/pasados-5.jpg" title="postname" />
		</div>
		<div id="small-dialog6" class="mfp-hide innercontent slideanim">
			<img class="img-responsive" src="images/flisol_imagenes/pasados/pasados-6.jpg" ="postname" />
		</div>
		<div id="small-dialog7" class="mfp-hide innercontent slideanim">
			<img class="img-responsive" src="images/flisol_imagenes/pasados/pasados-7.jpg" title="postname" />
		</div>
		<div id="small-dialog8" class="mfp-hide innercontent slideanim">
			<img class="img-responsive" src="images/flisol_imagenes/pasados/pasados-8.jpg" title="postname" />
		</div>
	</div>
</div>
</div>
<!-- /caption-popup -->
<!-- Portfolio -->
<!-- About-us -->
<br>
<br>
<div class="about-us" id="about">
	<div class="container">
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
          <h4 style="text-align: center">Disertantes</h4>
      </div>
      <div class="col-sm-4">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 slideanim about2">
			<!-- carousel -->
				<div id="myCarousel" class="carousel slide">
				<!-- Indicators -->
				<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/flisol_imagenes/disertantes/daniel_rojas.jpg" alt="Corporate image" class="img-responsive">
						</div>
					</div>
				</div>
			<!-- /carousel -->
			</div>
			<div class="col-sm-6 text-center slideanim about1">
				<hr>
				<p class="p1"><strong>Daniel Rojas</strong> Estudiante de Licenciatura en Informática en Universidad Nacional de La Plata. Estudió Especialización Superior en GNU/Linux en Universidad Tecnológica Nacional, sede Avellaneda. Trabaja como Administrador de Red. Desarrollador Python y miembro del grupo de desarrollo del Proyecto Centrux, colaborando con la creación de sus componentes Huemul (GNU/Linux Forense) y Caraya (GNU/Linux Académico). Apasionado por los Sistemas Operativos y la Seguridad Informática.
</p>
				<p class="p1"><strong>¿Usás Windows? Pasate a Linux y viví mejor ;)</strong> En la era de la digitalización en la que somos testigos de como las prácticas, usos, consumos y creaciones con tecnología mutan de modo exponencial. Cómo se adapta la enseñanza tradicional? qué es lo importante que hay que aprender? La cultura libre es un pulso de este tiempo, pocos lo conocen y podría ser la respuesta a estas preguntas. En este marco, el arte digital ha sido pionero en debates y propone nuevos horizontes de pensamiento para explorar y pensar lo que nos hace realmente humanos.</p>
			</div>
		</div>
    <div class="row">
      <div class="col-sm-6 slideanim about2">
			<!-- carousel -->
				<div id="myCarousel" class="carousel slide">
				<!-- Indicators -->
				<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/flisol_imagenes/disertantes/pablo_ridolfi.png" alt="Corporate image" class="img-responsive">
						</div>
					</div>
				</div>
			<!-- /carousel -->
			</div>
			<div class="col-sm-6 text-center slideanim about1">
				<hr>
				<p class="p1"><strong>Pablo Ridolfi</strong> Ingeniero en electrónica y responsable del desarrollo de hardware del Proyecto CIAA desde sus inicios en Noviembre de 2013. Actualmente se desempeña como docente e investigador en el Laboratorio de Procesamiento Digital de la UTN-FRBA. Ha trabajado durante diez años en el sector privado dedicado al diseño y puesta en marcha de sistemas electrónicos embebidos para la industria.</p>
				<p class="p1"><strong>Taller de CIAA Computadora Industrial Abierta Argentina</strong> En la propuesta de taller se abordará a la CIAA (Computadora Abierta Industrial Argentina) la cual es una plataforma electrónica preparada especialmente para aplicaciones industriales, cuyo diseño está disponible para ser usado libre y gratuitamente en el desarrollo de productos y servicios.</p>
			</div>
		</div>
    <div class="row">
      <div class="col-sm-6 slideanim about2">
			<!-- carousel -->
				<div id="myCarousel" class="carousel slide">
				<!-- Indicators -->
				<!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/flisol_imagenes/disertantes/joaquin_bogado_charla.jpg" alt="Corporate image" class="img-responsive">
            </div>
          </div>
				</div>
			<!-- /carousel -->
			</div>
			<div class="col-sm-6 text-center slideanim about1">
				<hr>
				<p class="p1"><strong>Joaquín Bogado</strong></p>
				<p class="p1"><strong>Escribiendo Software Libre para Hardware no tan Libre</strong> A finales de 2011 adquirí usada una cámara para astronomía QHY5T. Mis esperanzas de hacerla andar en GNU/Linux se marchitaron luego de 20 minutos de búsqueda en Internet. La QHY5 si estaba soportada, la QHY5T no. En esta charla voy a contar parte de la odisea que fue hacerla andar y que derivó un trabajo de tesis y decenas de horas de diversión.</p>
			</div>
		</div>
    <div class="row">
      <div class="col-sm-6 slideanim about2">
			<!-- carousel -->
				<div id="myCarousel" class="carousel slide">
				<!-- Indicators -->
				<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/flisol_imagenes/disertantes/fabricio_costa.jpg" alt="Corporate image" class="img-responsive">
						</div>
					</div>
				</div>
			<!-- /carousel -->
			</div>
			<div class="col-sm-6 text-center slideanim about1">
				<hr>
				<p class="p1"><strong>Fabricio Costa</strong> Egresado en Ciencias Físicas y Matemáticas del Liceo Franco-Argentino Jean-Mermoz en 1993, es programador senior y artista digital, se formó en la facultad de la UBA en Ciencias de la Computación y Ciencias Físicas y Matemáticas especializándose luego en el área de la Computación Gráfica. Experimenta desde el año 1998 en distintos temas de computación gráfica que incluyen el diseño y modelado tridimensional, la interacción entre sistemas analógicos y digitales, la sinestesia, el diseño gráfico y diferentes técnicas de dibujo y pintura además de realizar estudios musicales especializándose en la guitarra española. Funda y desarrolla Moldeo ( www.moldeo.org ), un software de tratamiento audio-visual en tiempo real y código abierto desarrollado completamente en Argentina. Dirige y diseña ambientaciones digitales en las artes escénicas como son el teatro, la ópera, el teatro infantil y la animación, la danza, la danza-teatro, además de instalaciones interactivas difundidas tanto a nivel nacional como internacional, (http://www.alternativateatral.com/persona38349-fabricio-costa ). </p>
				<p class="p1"><strong>Concepción, implementación y evolución de un software libre para el arte y la educación.</strong> Esta charla tiene como objetivo dar a conocer la experiencia desarrollando un software pensado para el trabajo con usuarios novatos, artistas y docentes en el ámbito del arte multimedia y la educación en todos sus niveles. A través del análisis del proceso desarrollado por Moldeo, desde sus comienzos como herramienta de mezcla de elementos multimediales, su evolución como software de guión interactivo y su incorporación como herramienta pedagógica para su uso en el aula de clases, se exponen las condiciones y problemáticas asociados al desarrollo de este tipo de herramientas en el contexto local. En esta charla se da a conocer el estado actual del software y su contexto, esbozando los lineamentos y desafíos que como equipo de desarrollo contemplamos a corto, media y largo plazo.</p>
			</div>
		</div>
    <div class="row">
      <div class="col-sm-6 slideanim about2">
			<!-- carousel -->
				<div id="myCarousel" class="carousel slide">
				<!-- Indicators -->
				<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/flisol_imagenes/disertantes/alejandra_ceriani.jpg" alt="Corporate image" class="img-responsive">
						</div>
					</div>
				</div>
			<!-- /carousel -->
			</div>
			<div class="col-sm-6 text-center slideanim about1">
				<hr>
				<p class="p1"><strong>Alejandra Ceriani</strong> Graduada en la Facultad de Bellas Artes, Universidad Nacional de La Plata, Profesora y Licenciada en Artes Plásticas. Magíster en Estética y Teoría de las Artes. Instigadora categorizada y becada por la UNLP, para el estudio de las interrelaciones entre las disciplinas del cuerpo y el espacio escénico.</p>
			  <p class="p1"><strong>Integración de herramientas de código abierto para la educación artística.</strong> En la actualidad los modos comunicativos que inciden en la praxis artística y educativa requieren de los artistas y de los educadores el conocimiento de recursos tecnológicos que les proporcionen competencias necesarias para desarrollar e implementar nuevos modos de expresión en sus propuestas artísticas y de formación de nuevos contenidos. Es así que en los últimos años se han incorporado en los documentos curriculares de la educación artística en nuestro país, un vocabulario más preciso respecto a las prácticas de producción a través de la inclusión de TICs. En este escenario la impartición de una herramienta de código abierto como Moldeo.org propone un espacio de exploración para artistas y educadores que, sin poseer amplios conocimientos computacionales, puedan incorporarse al uso de estos nuevos medios para la realización de sus proyectos y propuestas áulicas. Presentamos aquí experiencias realizadas en el ámbito educativo de la ciudad de La Plata donde se elaboró conjuntamente con docentes, estudiantes, investigadores y colaboradores la gestión y operatividad del software Moldeo en la Netbooks. </p>
			</div>
		</div>
    <div class="row">
      <div class="col-sm-6 slideanim about2">
			<!-- carousel -->
				<div id="myCarousel" class="carousel slide">
				<!-- Indicators -->
				<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/flisol_imagenes/disertantes/bianca_raccioppe.jpg" alt="Corporate image" class="img-responsive">
						</div>
					</div>
				</div>
			<!-- /carousel -->
			</div>
			<div class="col-sm-6 text-center slideanim about1">
				<hr>
				<p class="p1"><strong>Bianca Racioppe</strong> Doctora en Comunicación, magíster en Planificación y Gestión de Procesos Comunicacionales, licenciada y profesora en Comunicación Social. Se desempeña como docente en la Facultad de Periodismo y Comunicación Social e integra el Instituto de Investigaciones en Comunicación (IICOM). Investiga las relaciones entre arte, Cultura libre y Copyleft con una beca de la UNLP.</p>
			  <p class="p1"><strong>Narrativas online y actitud Copyleft: reconfiguraciones en los modos de entender la “propiedad” intelectual</strong> Surgida del movimiento del Software libre, la actitud Copyleft se transpola al campo del arte y se imbrica con las narrativas que se dan en los espacios de lo online. El Copyleft como hack al “todos los derechos reservados” propone otros modos de producir y circular los bienes simbólicos que entra en tensión con la Ley de Propiedad Intelectual vigente y con las organizaciones que gestionan los derechos de autor. En esta charla se presentarán las principales características del movimiento de la Cultura libre en lo artístico, se reflexionará en torno a los modos de producir y compartir las obras y se debatirán las concepciones de autoría que propone la actitud Copyleft. </p>
			</div>
		</div>
    <div class="row">
      <div class="col-sm-6 slideanim about2">
			<!-- carousel -->
				<div id="myCarousel" class="carousel slide">
				<!-- Indicators -->
				<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/flisol_imagenes/disertantes/eduardo_ocampo.png" alt="Corporate image" class="img-responsive">
						</div>
					</div>
				</div>
			<!-- /carousel -->
			</div>
			<div class="col-sm-6 text-center slideanim about1">
				<hr>
				<p class="p1"><strong>Eduardo Ocampo</strong> </p>
				<p class="p1"><strong>Redes Libres, Abiertas y Comunitarias - Experiencia BuenosAiresLibre.net</strong> Es un proyecto sin fines de lucro, con el objetivo de generar un medio alternativo libre para compartir información a través del uso de redes. </p>
			</div>
		</div>
    <div class="row">
      <div class="col-sm-6 slideanim about2">
			<!-- carousel -->
				<div id="myCarousel" class="carousel slide">
				<!-- Indicators -->
				<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/flisol_imagenes/disertantes/alexis_sarghel.png" alt="Corporate image" class="img-responsive">
						</div>
					</div>
				</div>
			<!-- /carousel -->
			</div>
			<div class="col-sm-6 text-center slideanim about1">
				<hr>
				<p class="p1"><strong>Alexis "TrustedBSD" Sarghel</strong> Trabaja en Free BSD. Actualmente dedicado especialmente a HPC (High-performance computing) on FreeBSD, FreeBSD general documentation, FreeBSD Advocacy.</p>
				<p class="p1"><strong>Instalando FreeBSD en routers y no morir en el intento </strong></p>
			</div>
		</div>
    <div class="row">
      <div class="col-sm-6 slideanim about2">
			<!-- carousel -->
				<div id="myCarousel" class="carousel slide">
				<!-- Indicators -->
				<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/flisol_imagenes/disertantes/sebastian.jpg" alt="Corporate image" class="img-responsive">
						</div>
					</div>
				</div>
			<!-- /carousel -->
			</div>
			<div class="col-sm-6 text-center slideanim about1">
				<hr>
				<p class="p1"><strong>Sebastian Suarez Cores</strong> Estudiante de la carrera de la Facultad de Periodismo y Comunicación Social y apasionado de las tecnologías, ciencias electronicas y todo proyecto con incumbencias tanto ambientales como sociales. Desde muy chico fue un apasionado de los sistemas GNU/Linux y de electrónica en general; actualmente es militante de la agrupación estudiantil La Fuente de la Facultad de Informática de la UNLP donde organiza charlas y eventos referidos a las tecnologías.</p>
			  <p class="p1"><strong>La aventura de fabricar una impresora 3D: para qué son y qué hacen.</strong> A lo largo de la charla se abordara la tematica de las impresoras 3D, tecnología que esta comenzando a revolucionar en muchos aspectos a la sociedad actual.</p>
			</div>
		</div>
	</div>
  <!-- /About-us -->
  <!-- Cronograma-charlas -->
  <br>
  <br>
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4" id="crono">
        <h4 style="text-align: center">Cronograma</h4>
    </div>
    <div class="col-sm-4">
    </div>
  </div>
  <div class="container">
    <div class="row">
      <table class="table table-bordered table-hover">
          <tbody>
            <tr>
                 <th>Hora</th>
                 <th>Evento</th>
                 <th>Disertante</th>
                 <th>Lugar</th>
               </tr>
               <tr>
                 <td>10:00</td>
                 <td>Acreditación</td>
                 <td>-</td>
                 <td>Hall de Entrada</td>
               </tr>
               <tr>
                 <td>10:30</td>
                 <td>Acreditación</td>
                 <td>-</td>
                 <td>Hall de Entrada</td>
               </tr>
               <tr>
                 <td>11:00</td>
                 <td>Apertura</td>
                 <td>Panelistas</td>
                 <td>Aula 5</td>
               </tr>
               <tr>
                 <td>11:30</td>
                 <td>Apertura</td>
                 <td>Panelistas</td>
                 <td>Aula 5</td>
               </tr>
               <tr>
                 <td>12:00</td>
                 <td>¿Usás Windows? Pasate a Linux y viví mejor ;)</td>
                 <td>Daniel Rojas</td>
                 <td>Aula 5</td>
               </tr>
               <tr>
                 <td>12:30</td>
                 <td>Almuerzo</td>
                 <td>-</td>
                 <td>Buffet / Patio</td>
               </tr>
               <tr>
                 <td>13:00</td>
                 <td>Almuerzo</td>
                 <td>-</td>
                 <td>Buffet / Patio</td>
               </tr>
               <tr>
                 <td>13:30</td>
                 <td>Las narrativas digitales y la actitud Copyleft</td>
                 <td>Bianca Racioppe</td>
                 <td>Aula 5</td>
               </tr>
               <tr>
                 <td>14:00</td>
                 <td>Escribiendo Software Libre para Hardware no tan Libre</td>
                 <td>Joaquín Bogado</td>
                 <td>Aula 5</td>
               </tr>
               <tr>
                 <td>14:30</td>
                 <td>Receso</td>
                 <td></td>
                 <td></td>
               </tr>
               <tr>
                 <td>15:00</td>
                 <td>Instalando FreeBSD en routers y no morir en el intento</td>
                 <td>Alexis "TrustedBSD" Sarghel</td>
                 <td>Aula 5</td>
               </tr>
               <tr>
                 <td>15:30</td>
                 <td>La aventura de fabricar una impresora 3D: para qué son y qué hacen</td>
                 <td>Sebastian Suarez Cores</td>
                 <td>Aula 5</td>
               </tr>
               <tr>
                 <td>16:00</td>
                 <td>Taller: Computadora Industrial Abierta Argentina CIAA</td>
                 <td>Pablo Ridolfi</td>
                 <td>Aula de PC 8</td>
               </tr>
               <tr>
                 <td>16:30</td>
                 <td>Redes Libres, Abiertas y Comunitarias - Experiencia BuenosAiresLibre.net</td>
                 <td>Eduardo Ocampo</td>
                 <td>Aula 5</td>
               </tr>
               <tr>
                 <td>17:00</td>
                 <td>Concepción, implementación y evolución de un software libre para el arte y la educación.</td>
                 <td>Fabricio Costa</td>
                 <td>Aula 5</td>
               </tr>
               <tr>
                 <td>17:30</td>
                 <td>Experiencias de uso de la herramienta de software libre Moldeo</td>
                 <td>Alejandra Ceriani, Victoria Dallachiesa y Aime Guzmán</td>
                 <td>Aula 5</td>
               </tr>
               <tr>
                 <td>18:00</td>
                 <td>Cierre</td>
                 <td>-</td>
                 <td>Aula 5</td>
               </tr>
          </tbody>
      </table>
    </div>
  </div>
  <!-- /Cronograma-charlas -->
</div>
<!-- Team -->
<div class="team" id="team">
	<div class="container">
		<h3 class="slideanim">Organiza</h3>
		<div class="row placeholders">
			<div class="col-xs-6 col-md-offset-3 placeholder">
				<img src="images/flisol_imagenes/logo_lf.png" width="200" height="200" class="img-responsive slideanim" alt="Generic placeholder thumbnail">
				<h5 class="slideanim">La Fuente</h5>
				<p class="slideanim">Condución del CEFI</p>
				<div class="social-icons">
					<a href="https://www.facebook.com/lafuenteunlp/?fref=ts"><span class="facebook"></span></a>
					<a href="https://twitter.com/la_fuente_unlp?lang=es"><span class="twitter"></span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Team -->
<!-- Contact -->
<div class="contact-us" id="contact">
	<div class="container">
		<h3 class="text-center slideanim">Inscripción</h3>
		<div class="row">
			<div class="col-sm-5 text-center slideanim">
				<div id="googleMap"></div>
				<!-- Add Google Maps -->
				<script src="//maps.googleapis.com/maps/api/js"></script>
				<script>
				var myCenter = new google.maps.LatLng(-34.903834, -57.937795);

				function initialize() {
				var mapProp = {
				center:myCenter,
				zoom:12,
				scrollwheel:false,
				draggable:false,
				mapTypeId:google.maps.MapTypeId.ROADMAP
				};

				var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

				var marker = new google.maps.Marker({
				position:myCenter,
				});

				marker.setMap(map);
				}

				google.maps.event.addDomListener(window, 'load', initialize);
				</script>

			</div>
			<div class="col-sm-7">
				<form method="post" action="register.php">
					<div class="row">
            <h4 style="padding-left: 16px"></h4>
            <br>
						<div class="col-sm-6 form-group slideanim">
							<input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" required>
						</div>
						<div class="col-sm-6 form-group slideanim">
							<input class="form-control" id="apellido" name="apellido" placeholder="Apellido" type="text" required>
						</div>
						<div class="col-sm-6 form-group slideanim">
							<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
						</div>
					</div>
					<textarea class="form-control" id="comments" name="comments" placeholder="Como te enteraste" rows="5"></textarea><br>
          <div class="g-recaptcha" data-sitekey="6LefAx4TAAAAAPkvbsNjTM64vFAkilqRIfxuuixu"></div>
          <br>
					<div class="row">
						<div class="col-sm-12 form-group slideanim">
							<button class="btn btn-danger btn-lg" id="enviar" type="submit">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Contact -->
<!-- Footer -->
<footer class="footer-distributed">
	<div class="container">
		<div class="row">
			<div class="col-md-4 footer-left">
				<div class="footer-left-header">
					<p>Centro de Estudiantes de Informática UNLP</p>
				</div>
				<div class="footer-links">
					<div><a href="http://lafuenteunlp.com.ar/web/"><i class="glyphicon glyphicon-phone"></i><p>La Fuente UNLP</p></a></div>
				</div>
			</div>
			<div class="col-md-4 footer-center">
				<div class="footer-center-header">
					<p>Dirección</p>
				</div>
				<div class="footer-info">
					<div>
						<i class="glyphicon glyphicon-map-marker"></i>
						<p><span>Calle 50 y 120</span> La Plata, Buenos Aires, Argentina</p>
					</div>
					<div>
						<i class="glyphicon glyphicon-earphone"></i>
						<p>0221 427-7270 / 427-7271</p>
					</div>
					<div>
						<i class="glyphicon glyphicon-envelope"></i>
						<p><a href="http://www.info.unlp.edu.ar/">www.info.unlp.edu.ar</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 footer-right">
				<p class="footer-company-about">
				<span>Sobre La Fuente</span>
        Somos un grupo de compañeros y compañeras de la facultad de Informática fuertemente comprometidos con acercar lo máximo posible a las ciencias informáticas con la soberanía latinoamericana en pos de lograr una sociedad mejor, mas inclusiva y con igualdad de derechos y posibilidades.
				</p>
				<div class="social-icons">
					<a href="https://www.facebook.com/lafuenteunlp"><span class="facebook"></span></a>
					<a href="https://twitter.com/la_fuente_unlp?lang=es"><span class="twitter"></span></a>
				</div>
			</div>
      <br>
      <br>
      <br>
      <div class="col-md-10 col-md-offset-1">
        <img class="img-responsive" src="images/flisol_imagenes/logos-todos.png" alt="logos de secretarías" />
      </div>
      <br>
		</div>
		<hr>
		<div class="copyright">
			<p class="text-center">© 2016 FLISOL. Copy Left | Diseñado por <a href="https://www.facebook.com/lafuenteunlp"> La Fuente UNLP</a></p>
		</div>
		<a href="#myPage" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a>
	</div>
</footer>
<!-- /Footer -->
<!-- js for portfolio popup -->
<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});

						});
		</script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<!-- /js for portfolio popup -->

		<!-- carousel -->
		<script>
$(document).ready(function(){
    // Activate Carousel
    <?PHP
      if(isset($_GET['e'])){
        echo "$('#myModal').modal('show');";
      }
    ?>
    $('#enviar').click(function(){
       var captcha_response = grecaptcha.getResponse();
       if(captcha_response.length != 0){

       }
    });
    $("#myCarousel").carousel({interval: 500, pause: "hover"});

    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });

    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>
<!-- /carousel -->
<!-- nav sliding -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<!-- /nav sliding -->
<!-- js for slideanim -->
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js for slideanim -->
</body>
</html>
