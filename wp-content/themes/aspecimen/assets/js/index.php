<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <title>ENLACE METÁLICO</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/normalize.css" />
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-1.8.2.js"></script>	
		<!-- Add fancyBox -->
		
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/funciones.js"></script>	
	</head>
	<body>
		<div class="container">
			<div class="background">
				<div class="central">
					<h1>Enlace Metálico</h1>
					<div class="llamador">
						<h2>
							<strong>enlace metálico</strong>
							Construímos estructuras de calidad para completar su proyecto
						</h2>
						<p class="centrare_so">
							<a href="#nosotros" class="sender">Conócenos</a>
							<a href="#contacto" class="sender">Contáctanos</a>
						</p>
					</div>
				</div>
			</div>
			<div class="nosotros" id="nosotros">
				<div class="central">
					<div class="mid">
						<h3>Somos Enlace Metálico</h3>
						<h2>Construímos sólidas y modernas estructuras con máxima atención al detalle</h2>
						<p>'En <strong>Enlace Metálico</strong> nos dedicamos a la fabricación y comercialización de productos de acero, hierro, aluminio y otros metales, para ser empleados en diversos tipos de construcción (residencial, comercial, de oficina, industrial, etc.).</p>
						<p>También fabricamos puertas y rejas de hierro, mamparas, cerramientos, escaleras, barandillas, elevadores para personas con discapacidad, celosías, ventanas, toldos, persianas, y estructuras metálicas en general.</p>
						<p>Nuestros técnicos encargados de la elaboración y montaje de estos elementos dominan las  técnicas y herramientas de taller para realizar un trabajo de calidad. </p>


					</div>
					<div class="mid">
						<img src="<?php bloginfo('template_directory'); ?>/images/dummy.jpg" alt="" class="dum" />
					</div>
				</div>
			</div>
			<div class="contacto" id="contacto">
				<div class="central">
					<h3>Contáctanos</h3>
					<h2>Estamos atentos a tus requerimientos</h2>
					<p>Completa el formulario y pronto nos pondremos en contacto</p>
					<!--<ul class="formuns">
						<li class="izq">
							<input type="text" placeholder="Nombre y Apellido" name="nombre" />
						</li>
						<li class="der">
							<input type="text" placeholder="Correo" name="correo" />
						</li>
						<li class="izq">
							<input type="text" placeholder="Empresa" name="empresa" />
						</li>
						<li class="der">
							<input type="text" placeholder="Teléfono/Anexo/Celular" name="telefono" />
						</li>
						<li class="completo">
							<textarea placeholder="Requerimiento" name="comments"></textarea>
						</li>
						<li class="cuar">
							<input type="submit" value="Enviar" />
						</li>
					</ul>-->
					
					<?php echo do_shortcode( '[contact-form-7 id="4" title="Reuqerimientos"]' ); ?>
					<div class="completion"> 
						<h3>O comunícate con nuestra área comercial:</h3>
						<p><a href="mailto:mbarrantes@enlacemetalico.com">mbarrantes@enlacemetalico.com</a></p> 
						<p>94040 5890</p> <p class="separa">Mónica Barrantes.</p>
						<p><a href="mailto:jrafael@enlacemetalico.com">jrafael@enlacemetalico.com</a></p>
						<p>99753 7676</p>
						<p>J. Rafael</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>