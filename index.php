<?
ob_start();
session_start();



///print_r($_SESSION);


///120819 se agegar 4 lista precios y se agrega decimales a echo en cantidad
/// 051019 opciones de vestuario
///301019 en cuentas emprendedor vestuario se modificaron campos talla, color, genero
///150120 de oculto listas de precios de las CUENTAS POS TEXTILES

/// 280120 SE AGREGO BOTON CRERA ITEM FACTURA ELECTRONICA Y ventana modal detalles delos ITEMS ELECTRONICOS ATENCION FALTA QUE SE PUEDA EDITAR



$rtt = $_SESSION['username'];

//echo $rtt;
$regimen = $_SESSION['regimen'];
$creando = $_SESSION['crea_empresa'];



if (isset($_SERVER['HTTPS'])) {
    // Codigo a ejecutar si se navega bajo entorno seguro.
} else {
header('Location: https://amonca.com/');
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="title" content="amonca" />
    
<meta name="description" content="Tu eCommerce gratis de ropa conectado a WhatsApp en minutos" />



<meta name="keywords" content="Tu eCommerce gratis de ropa conectado a WhatsApp en minutos. Tiendas virtuales gratis Colombia.">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5WM43W5');</script>
<!-- End Google Tag Manager -->

    <title>amonca</title>



<!-- FAVICON chrome-->

<link rel="icon" type="image/png" sizes="64x64" href="https://amonca.com/img/faviconfinal.png">

<!-- FAVICON android-->
<link rel="apple-touch-icon" sizes="180x180" href="https://amonca.com/img/faviconfinal.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style829.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
		
<?   //// etiqueta amonca  ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3D11S8X1E2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3D11S8X1E2');
</script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        //To minimise the height of chatbox
        $(document).ready(function() {
            window.addEventListener('dfMessengerLoaded', function (event) {
            $r1 = document.querySelector("df-messenger");
            $r2 = $r1.shadowRoot.querySelector("df-messenger-chat");
            $r3 = $r2.shadowRoot.querySelector("df-messenger-user-input"); //for other mods
            var sheet = new CSSStyleSheet;
            // manage box height from here
            sheet.replaceSync( `div.chat-wrapper[opened="true"] { height: 400px }`);
            $r2.shadowRoot.adoptedStyleSheets = [ sheet ];
            });
        });
    </script>
	</head>

	<body>

<style>
.whatsapp {
position:fixed;
width:60px;
height:60px;
bottom:40px;
right:40px;
color:#FFF;
border-radius:50px;
text-align:center;
font-size:30px;
z-index:100;
}

.whatsapp-icon {
margin-top:13px;
}

</style>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="Asistente IA"
  agent-id="b1aa34f3-7cd6-4a9d-865a-ec631b18cd5d"
  language-code="es"
></df-messenger>

<style>
  df-messenger {
   --df-messenger-bot-message: #0779e4;
   --df-messenger-button-titlebar-color: #0779e4;
   --df-messenger-chat-background-color: #fafafa;
   --df-messenger-font-color: white;
   --df-messenger-send-icon: #0779e4;
   --df-messenger-user-message: #0779e4;
  }
</style>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>

<!--
<a href="https://wa.me/3024885083?text=Me%20gustaría%20saber%20sobre%20la%20tienda%20virtual" class="whatsapp" ><img src="/img/whatsapp-logo-png-hd-2.png" width="100px"></a>
-->

		

    <!-- Your Plugin de chat code <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "104556735683775");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>
-->
    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WM43W5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
		<div class="main-page-wrapper">



		
				<header class="theme-main-header" style="background: #0779e4"><!--fondo menu -->
				<div class="container" style="background: #0779e4" ><!--fondo loader -->
					<a href="https://amonca.com/" class="lowwgo float-left trassn4s"><img src="/img3/LOGO20221.png" width="170" height="30" alt="Logo"></a>
					<?
					///<!-- ========================= Theme Feature Page Menu ======================= -->
					?>
					<nav class="navbar float-right theme-main-menu one-page-menu">
					   <!-- Brand and toggle get grouped for better mobile display -->
					   <div class="navbar-header">
					     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       <span class="sr-only">Toggle navigation</span>
					       Menu
					       <i class="fa fa-bars" aria-hidden="true"></i>
					     </button>
					   </div>
					   <!-- Collect the nav links, forms, and other content for toggling -->
					   <div class="collapse navbar-collapse" style="background: #0779e4; border-radius: 7px" id="navbar-collapse-1">
					     <ul class="nav navbar-nav">
					       	<li class="active"><a href="#home">INICIO</a></li>
							<li><a href="#service-section">COMIENZA</a></li>
							
								<li><a href="#project-section">CARACTERÍSTICAS</a></li>
								<li class="dropdown-holder"><a href="#precios-section2">precios</a>
							
							<li><a href="/ayuda/">AYUDA</a></li>
					
					<li><a href="/blog/">BLOG</a></li>
					
						
							
									<li>

								<?

if ($rtt=="") { ?>


	<a href="/login/">
INGRESAR
		</a>

<?
}else{
?>
<a href="../app/">Mi cuenta</a>
	

<?
}


								?>
	</li>
						<!--		
									<li><a href="#pricing-section">Pricing</a></li>

							</li>
							<li><a href="#contact-section">CONTACT</a></li>
					  	  -->
					     </ul>
					   </div><!-- /.navbar-collapse -->
					</nav> <!-- /.theme-feature-menu -->
				</div>
			</header> <!-- /.theme-main-header -->


			<!--
			=====================================================
				Theme Main SLider
			=====================================================
			-->
			<div id="home" class="banner">
	        	<div class="rev_slider_wrapper">
			<?//////	<!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
				?>		<div id="main-banner-slider" class="rev_slider video-slider" data-version="5.0.7">
							<ul>

								<!-- SLIDE1  -->
								<li data-index="rs-0" data-transition="fade"  data-masterspeed="default"  data-title="" data-description="">
									<!-- MAIN IMAGE -->
									<img src="../../img3/imag_1110650323.jpg"  alt="image" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="4000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="110">
									<!-- LAYERS -->

									<!-- LAYER NR. 1 -->
									<div class="tp-caption" 
										data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['-58','-58','0','-50']" 
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:[100%];" 
										data-mask_out="x:inherit;y:inherit;" 
										data-start="1000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										style="z-index: 6; white-space: nowrap;">
										<h1  style="color: white" >Tu e-Commerce</h1>
									</div>

									<!-- LAYER NR. 2 -->
						<div class="tp-caption" 
										data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['-05','93','93','20']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:[100%];" 
										data-mask_out="x:inherit;y:inherit;" 
										data-start="2000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										style="z-index: 6; white-space: nowrap;">
										<h4  style="color: white; text-overflow: ellipsis;  border-radius: 5px;  border-style: solid;
  border-width: 8px;
  background: #0779e4;
  border-color:#0779e4;" >

<style>
	

@media only screen and (max-width: 700px) and (min-width: 5px)  {  


    .home5 {
    font-size: 0.7em; background: #0779e4; color:white; "

}

</style>
<div class="home5" >conectado a WhatsApp en minutos<br>

Prueba gratuita por  <span style='font-size:1.1em;'  > 1 </span>mes
</div>
</h4>
									</div>



									<!-- LAYER NR. 3 -->
									<div class="tp-caption"
										data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['52','52','125','80']"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:[100%];" 
										data-mask_out="x:inherit;y:inherit;" 
										data-start="3000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on">
										
								<br>
<style >

</style>
	<a href="https://amonca.com/buscador/" class="project-button hvr1-bounce-to-right"  style="background: #0779e4" >Crear mi tienda</a>

									</div>
								
								</li>


								

								</li>
							</ul>	
						</div>
					</div><!-- END REVOLUTION SLIDER -->
	        </div> <!--  /#banner -->

	<!--
			=====================================================
				Service Section
			=====================================================
			-->
			<div id="service-section">
				<div class="container">
					<div class="theme-title">
							<h2>Comienza a vender hoy</h2>
					</div> <!-- /.theme-title -->

					<div class="row" style="font-size: 1em" >
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-service-content" style="border:transparent;" >
								<div class="icon-heading tran3s" >
									<center>
											<img src="../img3/111.png" style="height: 150px;" class="img-respons" >
										</center> 
								</div>
								<p>Ingresa el nombre de tu tienda, contara con un certificado de seguridad de información SSL gratuito ilimitado. </p>
							</div> <!-- /.single-service-content -->
						</div> <!-- /.col-lg -->

						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-service-content" style="border:transparent;" >
								<div class="icon-heading tran3s">
									<center>
											<img src="../img3/2.png" style="height: 150px;" class="img-respons" >
										</center> 
								
								</div>
								<p>Regístrate de manera segura y rápida con Google.<br><br> </p>
							</div> <!-- /.single-service-content -->
						</div> <!-- /.col-lg -->

						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-service-content" style="border:transparent;" >
								<div class="icon-heading tran3s">
									<center>
											<img src="../img3/3.png" style="height: 150px;" class="img-respons" >
										</center> 
								
								</div>
								<p>Configura el estilo, medios de pago de tu tienda y sube las prendas. <br>¡Ahora estás listo para vender! </p>
							</div> <!-- /.single-service-content -->
						</div> <!-- /.col-lg -->

					
					</div> <!-- /.row --><div style="text-align: center;" >
	<a href="https://amonca.com/buscador/" class="project-button hvr1-bounce-to-right"  style="background: #0779e4; color: white; border-radius: 5px; padding: 10px   " >Comienza ahora</a>
</div>
				</div> <!-- /.container -->
			</div> <!-- /#service-section -->
		<center><h2  >NO PASES HORAS ATENDIENDO TUS CLIENTES POR WhatsApp<br>AUTOMATIZA TODO CON TU TIENDA VIRTUAL</h2></center>
<center  >  <div style="font-size: 1.3em" >La seguridad de tus
ventas es nuestra prioridad, contamos con tecnología de primer nivel 
para proteger todos tus datos<br> recibe dinero con múltiples medios de pago</div> </center>


		

			<div id="partner-section" style="background:#0779e4"  >
				<div class="container">

			
					<div id="partner_logo" class="owl-carousel owl-theme"  style="background: white">
						<div class="item"><img src="../img3/medioswom.png" alt="logo"></div>
						<div class="item"><img src="../img3/mediosepay1.png" alt="logo"></div>
						
						<div class="item"><img src="../img3/mediosentre.png" alt="logo"></div>
						<div class="item"><img src="../img3/mediosgana.png" alt="logo"></div>
						<div class="item"><img src="../img3/mediosnequi.png" alt="logo"></div>
						<div class="item"><img src="../img3/mediosdavi.png" alt="logo"></div>
							<div class="item"><img src="../img3/mediosred.png" alt="logo"></div>
						<div class="item"><img src="../img3/mediospse.png" alt="logo"></div>
						<div class="item"><img src="../img3/mediosvisa.png" alt="logo"></div>
							<div class="item"><img src="../img3/mediosmaster.png" alt="logo"></div>
						
					</div> <!-- End .partner_logo -->
				</div> <!-- /.container -->
			</div> <!-- /#partner-section -->



			<!--
			=====================================================
				Project Section
			=====================================================
			-->
			<div id="project-section">
				<div class="container">
					<div class="theme-title">
						<h2>CARACTERÍSTICAS</h2>
						
					</div> <!-- /.theme-title -->

					<div class="project-menu">
						<ul>
	        				<!-- <li class="filter active tran3s" data-filter="all">todos</li>
							-->

<li class="filter tran3s" data-filter=".dmedia" >Personalizar apariencia</li>
							<li class="filter tran3s" data-filter=".web">Catálogo de productos</li>
							<li class="filter tran3s" data-filter=".photo">Carrito de compras</li>
							<li class="filter tran3s" data-filter=".webd">Gestión de envíos</li>
							<li class="filter tran3s" data-filter=".om">Administración  Soporte 24/7</li>
							<li class="filter tran3s" data-filter=".posicionamiento">Posicionamiento en buscadores</li>

						<!--	
							<li class="filter tran3s" data-filter=".support">Support</li>
	        			-->
	        			</ul>
					</div>

					<div class="project-gallery clear-fix">
						<div class="mix grid-item photo1 om1 dmedia">
							<div class="single-img">
								<img src="../img3/uno7.png" alt="Image">
								<div class="opacity">
									<div class="border-shape"><div><div>
										<h6><a   >PERSONALIZA TU TIENDA ES ÚNICA
</a></h6>
										<ul>
											<li>Sube el logo, 
selecciona los colores,
cambia el estilo de la cesta y más.</li>
											
										</ul></div></div>
									</div> <!-- /.border-shape -->
								</div> <!-- /.opacity -->
							</div> <!-- /.single-img -->
						</div> <!-- /.grid-item -->

						<div class="mix grid-item web webd1 dmedia1 support">
							<div class="single-img">
								<img src="../img3/dos5.png" alt="Image">
								<div class="opacity">
									<div class="border-shape"><div><div>
										<h6><a >Panel de productos</a></h6>
										<ul>
											<li>Ingresa tus productos ilimitados por tallas <br>y colores de manera sencilla, crea cupones de descuento e importa y exporta tus productos desde Excel.</li>
											
										</ul></div></div>
									</div> <!-- /.border-shape -->
								</div> <!-- /.opacity -->
							</div> <!-- /.single-img -->
						</div> <!-- /.grid-item -->

						<div class="mix grid-item photo webd1 support">
							<div class="single-img">
								<img src="../img3/cuatrow.png" alt="Image">
								<div class="opacity">
									<div class="border-shape"><div><div>
										<h6><a >Tus clientes con su cuenta</a></h6>
										<ul>
											<li>Pueden agregar productos, comprarlos <br> creando su propio perfil, cuenta con historial<br> de compras, datos de envío y favoritos</li>
										
										</ul></div></div>
									</div> <!-- /.border-shape -->
								</div> <!-- /.opacity -->
							</div> <!-- /.single-img -->
						</div> <!-- /.grid-item -->

						<div class="mix grid-item web1 om">
							<div class="single-img">
								<img src="../img3/seis.png" alt="Image">
								<div class="opacity">
									<div class="border-shape"><div><div>
										<h6><a >ADMINISTRACIÓN COMPLETA EN LÍNEA DESDE CUALQUIER DISPOSITIVO</a></h6>
										<ul>
											<li>Informes, cuentas por cobrar, egresos, remisiones, recibos de caja, notas, débito, gastos recurrentes, clientes, proveedores, inventario, pedidos proveedores y realiza facturas electrónicas sin salir de la <br> plataforma a tus clientes.</li>
											
										</ul></div></div>
									</div> <!-- /.border-shape -->
								</div> <!-- /.opacity -->
							</div> <!-- /.single-img -->
						</div> <!-- /.grid-item -->

						<div class="mix grid-item photo1 webd dmedia1 om1">
							<div class="single-img">
								<img src="../img3/cinco.png" alt="Image">
								<div class="opacity">
									<div class="border-shape"><div><div>
										<h6><a >Control de envíos </a></h6>
										<ul>
											<li>Estados del envío con notificación en la cuenta del cliente: en preparación, en camino, entregado. Imprime tus guías y contabiliza. </li>
										</ul></div></div>
									</div> <!-- /.border-shape -->
								</div> <!-- /.opacity -->
							</div> <!-- /.single-img -->
						</div> <!-- /.grid-item -->



						<div class="mix grid-item photo1 om support11">
							<div class="single-img">
								<img src="../img3/ocho.png" alt="Image">
								<div class="opacity">
									<div class="border-shape"><div><div>
										<h6><a >Soporte 24/7</a></h6>
										<ul>
											<li>Si no encuentras la solución en "AYUDA" tenemos a tu  disposición nuestro equipo para atenderte por el medio de tickets de soporte y Chat.</li>
											
										</ul></div></div>
									</div> <!-- /.border-shape -->
								</div> <!-- /.opacity -->
							</div> <!-- /.single-img -->
						</div> <!-- /.grid-item -->


		<div class="mix grid-item photo1 posicionamiento support11">
							<div class="single-img">
								<img src="../img3/diez111.png" alt="Image">
								<div class="opacity">
									<div class="border-shape"><div><div>
										<h6><a >Posiciona la tienda en las busquedas de Google</a></h6>
										<ul>
											<li>Ingresa la etiqueta de Google Analytics y comienza a recibir estadísticas de tus visitas.<br>
												Agrega descripción y palabras claves de la tienda en configuración, comenzará el posicionamiento en el buscador de Google.

											</li>
											
										</ul></div></div>
									</div> <!-- /.border-shape -->
								</div> <!-- /.opacity -->
							</div> <!-- /.single-img -->
						</div> <!-- /.grid-item -->



					</div> <!-- /.project-gallery -->
				</div> <!-- /.container -->
			</div> <!-- /#project-section -->



			<!--
			=====================================================
				Blog Section
			=====================================================
			-->


		<div class="container  text-center">

<a href="https://larosajeans.amonca.com/"
 target="_blank" class="project-button hvr1-bounce-to-right" 
style="color: white;  background: #0779e4; border-radius: 8px; padding: 15px"  >Tienda Modelo</a>



<div id="precios-section2">
<br>
			<hr><br><br>

<div class="text-center" ><h2>Planes con los mejores precios del mercado</h2> </div><br>


<div class="col-md-6"style="background: #0779e4; color: white; border:10px solid white;  padding: 15px; border-radius: 45px ">
<div class="text-center">
<h2 class="heading"   style="color:white" >PLUS</h2>
<br>
<h1 style="color:white" >$0<span style="font-size: 0.5em"  >COP</span>  </h1>

<h3 class="heading-2 my-4"style="color:white" >Mensual</h3>
<br>
<ul class="pricing-text mb-5"  style="font-size: 1.5em" >
<li>Tienda online</li>

<li>Personaliza colores y apariencia</li>

<li>Panel envíos ventas</li>
<li>CRM (Software administración y facturación)</li>
<li>Conecta tu dominio</li>
<li>Certificado de seguridad SSL gratis</li>

<li>500 Productos</li>
<li>5 Categorías</li>
<li>25 Subcategorías</li>

<li>1 . 5% comisión por venta</li>

</ul>
<br>
<a href="https://amonca.com/buscador/"  style="background: white; color: black; font-size: 1.6em" class="btn btn-primary d-block px-2 py-4">Iniciar Hoy</a>
</div>
</div> <!-- /.theme-title -->

<div class="col-md-6"style="background: #0779e4; color: white; border:10px solid white;  padding: 15px;; border-radius: 45px   ">
<div class="text-center">
<h2 class="heading"style="color:white" >AVANZADO</h2>
<br>
<h1 style="color:white" >$7.900<span style="font-size: 0.5em"  >COP</span></h1>

<h3 class="heading-2 my-4"style="color:white" >Mensual</h3>
<br><ul class="pricing-text mb-5"  style="font-size: 1.5em" >
<li>Tienda online</li>

<li>Personaliza colores y apariencia</li>

<li>Panel envíos ventas</li>
<li>CRM (Software administración y facturación)</li>


<li>Conecta tu dominio</li>
<li>Certificado de seguridad SSL gratis</li>

<li>Productos ilimitados</li>
<li>Categorías ilimitadas</li>
<li>Subcategorías ilimitadas</li>


<li>0% comisión por venta</li>

</ul>
<br>
<a href="https://amonca.com/buscador/"  style="background: white; color: black; font-size: 1.6em" class="btn btn-primary d-block px-2 py-4">Iniciar Hoy</a>
</div>
</div> <!-- /.theme-title -->
<div  class="text-center" >
	<br>
</div> <!-- /.container -->



</div>
</div> <!-- /#precios-section -->



	
			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer>
				<div class="container text-center ">
				
<a title="Instagram" href="https://www.instagram.com/tu_eCommerce_de_ropa_gratis/" target="_blank">
<img  src="https://amonca.com/img/instagram_icon.png" width="50px" ></a>

 <a >

 	<a title="tiktok" href="https://www.tiktok.com/@amoncacolombia" target="_blank">
<img  src="https://amonca.com/img/tikttok.png" width="50px" ></a>
<br>
 <a >
<img src="/img/colombialogo.png" width="240" ></a><br>

	<a style="color: white" href="mailto:info@amonca.com">info@amonca.com</a>

    <br>                     
<a href="/blog/tratamiento_datos_personales.html"  style="color:white" >Política tratamiento datos</a> 
<br>
<a href="/blog/condiciones_uso.html"  style="color:white" >Términos y condiciones de uso</a> <br> 


<span style="color: white">Copyright © <?  echo date('Y')    ?></span><br>

<span style="font-size: 10px; color: white  " ><a style="color: white" href="mailto:elprimompv@gmail.com">  by  elPrimo</a>   </span>				
				</div>
			</footer>




			<!-- =============================================
				Loading Transition
			============================================== -->
			<div id="loader-wrapper">
				<div id="preloader_1">
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	            </div>
			</div>

			
	        <!-- Scroll Top Button 
			<button class="scroll-top tran3s p-color-bg">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>-->




		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->
		
		<!-- revolution -->
		<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.video.min.js"></script>

		<!-- Google map js -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ8VrXgGZ3QSC-0XubNhuB2uKKCwqVaD0&callback=goMap" type="text/javascript"></script> <!-- Gmap Helper -->
		<script src="vendor/gmaps.min.js"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- Progress Bar js -->
		<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
<!-- Hotjar Tracking Code for my site 
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3399716,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');

    
</script>-->
<!--
<script async src="//static.getclicky.com/101400671.js"></script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101400671ns.gif" /></p></noscript>
-->

<!--
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e8ca1f235bcbb0c9aaebd7a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
End of Tawk.to Script-->



<!--
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e8ca1f235bcbb0c9aaebd7a/1ggsvvbun';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

-->

<!-- Messenger Plugin de chat Code -->
<!-- Messenger Plugin de chat Code     <script async src="//static.getclicky.com/101400671.js"></script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101400671ns.gif" /></p></noscript>

-->
