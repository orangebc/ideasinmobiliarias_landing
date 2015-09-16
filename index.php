<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ideas Inmobiliarias</title>

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff ">
		<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff ">
		<!-- SEO Kit -->
		<meta name="description" content="IDEAS INMOBILIARIAS es una empresa especializada en la asesoría para la comercialización de inmuebles en Puebla y Ciudad de México. Tanto propietarios como compradores encontrarán la respuesta en nuestro servicio ya que nos salimos de lo convencional y estamos constantemente buscando IDEAS nuevas e innovadoras que se adapten al mercado inmobiliario de manera rápida y eficiente.">
		<meta name="keywords" content="Departamento en DF, departamento en Puebla, departamento en angelopolis, departamento en la del valle, departamento en la napoles, departamento en benito juarez, departamento en cholula, casa en df, casa en puebla, renta, compra, hipoteca, credito hipotecario, ideas inmobiliarias, inmoideas, inmobiliaria, departamento de lujo, desarrollo inmobliario, lotes, residencial" />
		<!-- /seokit -->
		<!-- HeatMap -->

		<!-- /heatmap -->
	</head>
	<body>

	<!-- Header -->
	<header class="header">
		<div class="container-fluid">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
				<div class="header__logo">
					<img src="images/logo1.png" alt="Ideas inmobiliarias">
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
				<div class="col-lg-8 text-center">
					<ul class="list-inline header__details">
						<li class="icon-phone">
							Puebla: (222) 169.1718 <br>
							México: (55) 5559.6060
						</li>
						<li class="icon-email">
							<span class="invisible">-</span> <br>
							ventas@ideasinmobiliarias.com

						</li>
					</ul>
				</div>
				<div class="col-lg-4 col-sm-12">
					<div class="header__button">
						<button class="btn btn-cta" id="cTa">Contáctanos</button>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /header -->

	<!-- Form -->
	<main class="main">
		<span class="glyphicon glyphicon-remove"></span>
		<form action="php/send.php" method="POST" role="form" id="form">

			<div class="form-group">
				<label for="name">Nombre</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div class="form-group">
				<label for="phone">Teléfono</label>
				<input type="tel" class="form-control" id="phone" name="phone" maxlength="10" onkeypress="return isNumberKey(event)" required>
			</div>
			<div class="form-group">
				<label for="email">Mail</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="row">
				<div class="col-xs-4">
					<div class="radio" id="comprar">
						<label>
							<input type="radio" name="actions" id="actionBuying" value="Comprar" required>
							Comprar
						</label>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="radio">
						<label>
							<input type="radio" name="actions" id="actionSelling" value="Vender">
							Vender
						</label>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="radio">
						<label>
							<input type="radio" name="actions" id="actionRent" value="Rentar">
							Rentar
						</label>
					</div>
				</div>
			</div>
			<div class="col-xs-12 text-center" id="togglePuebla">
				<div class="radio">
					<label>
						Desarrollos en Puebla
					</label>
				</div>
			</div>
			<div class="row" id="desarrollosPuebla">
				<div class="col-xs-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="desarrollosEnPuebla[]" value="Maestranza">
								Maestranza
						</label>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="desarrollosEnPuebla[]" value="La Loma Gran Reserva">
								La Loma Gran Reserva
						</label>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="desarrollosEnPuebla[]" value="Atlixco">
								Atlixco
						</label>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="desarrollosEnPuebla[]" value="High Towers Elite">
								Hight Towers Elite
						</label>
					</div>
				</div>
			</div>
			<div class="col-xs-12 text-center" id="toggleMx">
				<div class="radio">
					<label>
						Desarrollos en Ciudad de México
					</label>
				</div>
			</div>
			<div class="row" id="desarrollosMx">
				<div class="col-xs-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="desarrollosEnMexico[]" value="Alure N.Y. Nápoles">
								Alure N.Y. Nápoles
						</label>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="desarrollosEnMexico[]" value="Alure Condesa">
								Alure Condesa
						</label>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="desarrollosEnMexico[]" value="Alure Lomas">
								Alure Lomas
						</label>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="desarrollosEnMexico[]" value="Sánchez Azcona Del Valle">
								Sánchez Azcona Del Valle
						</label>
					</div>
				</div>
			</div>
			<input type="submit" class="btn" value="Enviar" name="submit">
		</form>
	</main>
	<!-- /form -->

	<!-- About -->
	<section class="about">
		<div class="container-fluid nopadding">
			<div class="col-lg-4 col-xs-12 nopadding">
				<div class="about__ideas">
					<h1 class="about__ideas--tagline">
						Ideas <br>
						Inmobiliarias
					</h1>
					<p class="about__ideas--info">Somos una empresa especializada en la asesoría para la comercialización de inmuebles. <br>
					Tanto propietarios como compradores encontrarán la respuesta en nuestro servicio ya que nos salimos de lo convencional y estamos constantemente buscando ideas nuevas e innovadoras que se adapten al mercado inmobiliario de manera rápida y eficiente.</p>
				</div>
			</div>
			<div class="visible-xs nopadding">
				<img src="images/img1.jpg" alt="img" class="about__img">
			</div>
		</div>
	</section>
	<!-- /about -->

	<!-- Benefits -->
	<section class="benefits">
		<div class="container-fluid">
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<!-- Benefits item -->
				<article class="benefits__item">
					<figure class="benefits__item--icon">
						<img src="images/ic-atn.png" alt="Atención personalizada">
					</figure>
					<h5 class="benefits__item--title">Atención Personalizada</h5>
					<p class="benefits__item--info">Nos comprometemos al máximo con nuestros clientes, tendrás una asesoría permanente.</p>
				</article>
				<!-- /benefitsItem-->
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<!-- Benefits item -->
				<article class="benefits__item">
					<figure class="benefits__item--icon">
						<img src="images/ic-calidad.png" alt="Calidad">
					</figure>
					<h5 class="benefits__item--title">Calidad</h5>
					<p class="benefits__item--info">Contamos con un equipo muy completo de expertos profesionales que garantizan el éxito de cada operación.</p>
				</article>
				<!-- /benefitsItem-->
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<!-- Benefits item -->
				<article class="benefits__item">
					<figure class="benefits__item--icon">
						<img src="images/ic-agilidad.png" alt="Agilidad">
					</figure>
					<h5 class="benefits__item--title">Agilidad</h5>
					<p class="benefits__item--info">Entendemos que su tiempo es importante por lo que agilizamos la venta en todos sus procesos.</p>
				</article>
				<!-- /benefitsItem-->
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<!-- Benefits item -->
				<article class="benefits__item">
					<figure class="benefits__item--icon">
						<img src="images/ic-experiencia.png" alt="Experiencia">
					</figure>
					<h5 class="benefits__item--title">Experiencia</h5>
					<p class="benefits__item--info">Somos una empresa joven con un gran número de  operaciones exitosas.</p>
				</article>
				<!-- /benefitsItem-->
			</div>
		</div>
	</section>
	<!-- /benefits -->

	<!-- Services -->
	<section class="services">
		<div class="container-fluid">
			<div class="col-lg-6">
				<div class="col-lg-6"></div>
				<!-- Services items -->
				<div class="col-lg-6 col-xs-12 nopadding">
					<div class="services__item">
						<h5 class="services__item--title">Servicios</h5>
						<p class="services__item--info">Además, al contratar nuestros servicios, <br><strong>usted obtiene</strong>:</p>
					</div>
				</div>
				<!-- /servicesItems -->
			</div>
			<div class="col-lg-6">
				<!-- Services list -->
				<div class="services__list--container">
					<ul class="services__list">
						<li>Trámite sin costo de su crédito hipotecario con la institución que más le convenga.</li>
						<li>Les ofrecemos servicios de remodelación, plomería, electricidad, pintura, a precios preferenciales por contar con alianzas con empresas especializadas.</li>
						<li>Descuento en los gastos de escrituración al hacer la operación con nuestros notarios.</li>
						<li>Descuento en los servicios de mudanzas y muebles.</li>
					</ul>
					<h6 class="services__list--subtitle">Si deseas comprar, vender o rentar somos tu mejor opción.</h6>
					<a href="#cTa" class="btn btn-cta">Contáctanos</a>
				</div>
				<!-- /servicesList -->
			</div>
		</div>
	</section>
	<!-- /services -->

	<!-- Puebla -->
	<section class="puebla">
		<h5 class="puebla__tagline">Algunos de nuestros desarrollos destacados en <strong>Puebla:</strong></h5>
		<h5 class="puebla__tagline visible-xs"><strong>Tel: (222) 169.1718</strong></h5>
		<!-- Puebla Builds -->
		<div class="container-fluid nopadding">
			<div class="col-lg-3 col-sm-6 nopadding">
				<!-- Puebla item -->
				<figure class="puebla__item">
					<img src="images/img-pue1.jpg" alt="Maestranza">
					<figcaption>
						<h5 class="puebla__item--name">Maestranza, Angelópolis</h5>
						<span class="glyphicon glyphicon-chevron-down" data-info="p1"></span>
					</figcaption>
				</figure>
				<div class="item-details" id="p1">
					<p>
						<strong>Residencial Maestranza</strong> se encuentra dentro del desarrollo «Lomas de la Toscana» que cuenta con un concepto único dentro de <strong>Lomas de Angelópolis</strong>, junto a la zona comercial <strong>Sonata.</strong> Este desarrollo cuenta con una Casa Club y canchas deportivas de uso exclusivo para los condóminos. maestranza, es el primer desarrollo inmobiliario proyectado por el despacho de <strong>Humberto Artigas.</strong>
					</p>
					<h5>www.ideasinmobiliarias.com.mx/maestranza</h5>
					<a href="#cTa" class="btn btn-cta">Recibir más información</a>
					<span class="glyphicon glyphicon-remove"></span>
				</div>
				<!-- /pueblaItem -->
			</div>
			<div class="col-lg-3 col-sm-6 nopadding">
				<!-- Puebla item -->
				<figure class="puebla__item">
					<img src="images/img-pue2.jpg" alt="Atlixco">
					<figcaption>
						<h5 class="puebla__item--name">Entre Alamedas, Atlixco</h5>
						<span class="glyphicon glyphicon-chevron-down" data-info="p2"></span>
					</figcaption>
				</figure>
				<div class="item-details" id="p2">
					<p>
						<strong>Lotes residenciales en Atlixco, Puebla a sólo 15 minutos de Lomas de Angelópolis y San Andrés Cholula.</strong>
						Casas en dos niveles. <br>
						Totalmente bardeado. <br>
						Servicios ocultos. <br>
						Seguridad.

					</p>
					<h5>www.ideasinmobiliarias.com.mx/laloma</h5>
					<a href="#cTa" class="btn btn-cta">Recibir más información</a>
					<span class="glyphicon glyphicon-remove"></span>
				</div>
				<!-- /pueblaItem -->
			</div>
			<div class="col-lg-3 col-sm-6 nopadding">
				<!-- Puebla item -->
				<figure class="puebla__item">
					<img src="images/img-pue3.jpg" alt="La Loma">
					<figcaption>
						<h5 class="puebla__item--name">La Loma Gran Reserva, Angelópolis</h5>
						<span class="glyphicon glyphicon-chevron-down" data-info="p3"></span>
					</figcaption>
				</figure>
				<div class="item-details" id="p3">
					<p>
						<strong>38 lotes en la zona más exclusiva de Lomas junto a las cascadas. Madera, cantera y acero es nuestro estilo, vialidad interior de 4 carriles.</strong> Entrega en julio 2015. créditos hipotecarios disponibles para compra de terreno y financiamiento para casa y terreno.</strong>
					</p>
					<h5>www.ideasinmobiliarias.com.mx/granreserva</h5>
					<a href="#cTa" class="btn btn-cta">Recibir más información</a>
					<span class="glyphicon glyphicon-remove"></span>
				</div>
				<!-- /pueblaItem -->
			</div>
			<div class="col-lg-3 col-sm-6 nopadding">
				<!-- Puebla item -->
				<figure class="puebla__item">
					<img src="images/img-pue4.jpg" alt="High Towers">
					<figcaption>
						<h5 class="puebla__item--name">High Towers Elite, Angelópolis</h5>
						<span class="glyphicon glyphicon-chevron-down" data-info="p4"></span>
					</figcaption>
				</figure>
				<div class="item-details" id="p4">
					<p>
						Este desarrollo cuenta con <strong> la mejor ubicación, amenidades excelentes y vista espectacular a los volcanes y a la gran ciudad de puebla. </strong>
						Para la creación de <strong>HT Elite, Arquitectoma</strong> se basó en el exitoso desarrollo HT Residencial, además de los años de experiencia adquirida al construir más de 1000 viviendas residenciales, complejos turísticos y comerciales.
					</p>
					<h5>www.ideasinmobiliarias.com.mx/htelite</h5>
					<a href="#cTa" class="btn btn-cta">Recibir más información</a>
					<span class="glyphicon glyphicon-remove"></span>
				</div>
				<!-- /pueblaItem -->
			</div>
		</div>
		<!-- /pueblaBuilds -->
	</section>
	<!-- /puebla -->

	<!-- C.D. México -->
	<section class="mx">
		<h5 class="mx__tagline">Algunos de nuestros desarrollos destacados en <strong>Ciudad de México:</strong></h5>
		<h5 class="mx__tagline visible-xs"><strong>Tel: (55) 5559.6060</strong></h5>
		<!-- Mx Builds -->
		<div class="container-fluid nopadding">
			<div class="col-lg-3 col-sm-6 nopadding">
				<!-- Mx item -->
				<figure class="mx__item">
					<img src="images/img-mx1.jpg" alt="Maestranza">
					<figcaption>
						<h5 class="mx__item--name">Alure Nueva York, Nápoles</h5>
						<span class="glyphicon glyphicon-chevron-down" data-info="mx1"></span>
					</figcaption>
				</figure>
				<div class="item-details" id="mx1">
					<p>
						Colonia Nápoles Alure Nueva York, ofrece mejorar la calidad de vida a quien lo habita pues tiene <strong>servicios excepcionales, una ubicación estratégica y una plusvalía asegurada.</strong> <br>
						Cuenta con: <br>
						<strong>Alberca</strong>
						<strong>Gimnasio</strong>
						<strong>Sauna</strong>
						<strong>Robot Parking</strong>
					</p>
					<h5>www.ideasinmobiliarias.com.mx/alureny</h5>
					<a href="#cTa" class="btn btn-cta">Recibir más información</a>
					<span class="glyphicon glyphicon-remove"></span>
				</div>
				<!-- /mxItem -->
			</div>
			<div class="col-lg-3 col-sm-6 nopadding">
				<!-- Mx item -->
				<figure class="mx__item">
					<img src="images/img-mx2.jpg" alt="Atlixco">
					<figcaption>
						<h5 class="mx__item--name">Alure, Lomas de Chapultepec</h5>
						<span class="glyphicon glyphicon-chevron-down" data-info="mx2"></span>
					</figcaption>
				</figure>
				<div class="item-details" id="mx2">
					<p>
						Excelente ubicación , cerca de Polanco, Av. de Las Palmas, Reforma. Muy iluminado con un baño y vestidor, canceles de cristal, cocina integral con cubierta de granito, pisos de porcelanato. <br> <br>
						Alberca <br>
						Gimnasio <br>
						Terrazas
					</p>
					<h5>www.ideasinmobiliarias.com.mx/alureny</h5>
					<a href="#cTa" class="btn btn-cta">Recibir más información</a>
					<span class="glyphicon glyphicon-remove"></span>
				</div>
				<!-- /mxItem -->
			</div>
			<div class="col-lg-3 col-sm-6 nopadding">
				<!-- Mx item -->
				<figure class="mx__item">
					<img src="images/img-mx3.jpg" alt="La Loma">
					<figcaption>
						<h5 class="mx__item--name">Alure, Condesa</h5>
						<span class="glyphicon glyphicon-chevron-down" data-info="mx3"></span>
					</figcaption>
				</figure>
				<div class="item-details" id="mx3">
					<p>
						A unos pasos de los principales corredores económicos, culturales, parques, lugares exclusivos de entretenimiento y de vida nocturna de la ciudad, donde vivirás con tranquilidad y lujo. <br><br>
						<strong>Amenities</strong> <br>
						Carril de nado, jacuzzi, gimnasio, sauna, sala de proyecciones,  terrazas, raquetball, coffee lounge,
					</p>
					<h5>www.ideasinmobiliarias.com.mx/alureny</h5>
					<a href="#cTa" class="btn btn-cta">Recibir más información</a>
					<span class="glyphicon glyphicon-remove"></span>
				</div>
				<!-- /mxItem -->
			</div>
			<div class="col-lg-3 col-sm-6 nopadding">
				<!-- Mx item -->
				<figure class="mx__item">
					<img src="images/img-mx4.jpg" alt="High Towers">
					<figcaption>
						<h5 class="mx__item--name">Sánchez Azcona, del Valle</h5>
						<span class="glyphicon glyphicon-chevron-down" data-info="mx4"></span>
					</figcaption>
				</figure>
				<div class="item-details" id="mx4">
					<p>
						<strong>Pre-venta</strong><br>
						2 recámaras, con opción a una tercera recámara o family room. 2 baños completos. la recámara principal con baño y vestidor. Cocina integral amplia con cubiertas de granito, área de lavado, área de tendido. 2 lugares de estacionamiento.
					</p>
					<h5></h5>
					<a href="#cTa" class="btn btn-cta">Recibir más información</a>
					<span class="glyphicon glyphicon-remove"></span>
				</div>
				<!-- /mxItem -->
			</div>
		</div>
		<!-- /mxBuilds -->
	</section>
	<!-- /cdMéxico -->

	<!-- Logo -->
	<div class="logo">
		<img src="images/logo1.png" alt="Ideas inmobiliarias">
	</div>
	<!-- /logo -->

	<!-- Footer -->
	<footer class="footer">
		<h5 class="footer__privacy">Aviso de Privacidad</h5>
		<p class="avisoDePrivacidad">INMOIDEAS, S.A. DE C.V., con domicilio en MORAS 409, COL. DEL VALLE, DELEGACION BENITO JUAREZ, MÉXICO D.F. C.P.03100. EN PUEBLA (222) 169-17-18 VIA AXTLIXCAYOTL #5208, COL. TLAXCALCINGO (RESERVA TERRITORIAL ANGELOPOLIS), SAN ANDRES CHOLULA, PUEBLA, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección. Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales: Nombre completo, dirección, email y teléfonos, considerado como sensible según la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su dirección y teléfonos. Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nuestro departamento de datos personales en MEXICO D.F. (55) 5559-27-00 MORAS 409, COL. DEL VALLE, DELEGACION BENITO JUAREZ, MÉXICO D.F. C.P.03100 PUEBLA (222) 169-17-18 VIA AXTLIXCAYOTL #5208, COL. TLAXCALCINGO (RESERVA TERRITORIAL ANGELOPOLIS), SAN ANDRES CHOLULA, PUEBLA. CONTACTO VIA E-MAIL: protecciondedatos@ideasinmobiliarias.com o visitar nuestra página de Internet www.ideasinmobiliarias.mx Asimismo, le informamos que sus datos personales pueden ser transferidos y tratados dentro y fuera del país, por personas distintas a esta empresa. En ese sentido, su información puede ser compartida con otras agencias inmobiliarias pertenecientes a la Asociación Mexicana de Profesionales Inmobiliarios, A.C., para la oferta de bienes inmuebles. Si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello. No consiento que mis datos personales sean transferidos en los términos que señala el presente aviso de privacidad. Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través de los teléfonos en MEXICO D.F. (55) 5559-27-00, en PUEBLA (222) 169-17-18, o bien al correo electrónico protecciondedatos@ideasinmobiliarias.com . Cualquier modificación a este aviso de privacidad podrá consultarla en www.ideasinmobiliarias.mx Actualización al 01/01/2015</p>
		<h6 class="footer__orange"><strong>Powered by</strong> | www.orangeboutiquecreativa.com</h6>
	</footer>
	<!-- footer -->

	<script>
       function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
   </script>
		<!-- jQuery -->
		<script src="js/jquery-1.11.3.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.validate.js"></script>
		<script src="js/additional-methods.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/validate.js"></script>
	</body>
</html>
