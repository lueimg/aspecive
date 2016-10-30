
			<div class="section border-top pb-3 fondo-sec">
				<div class="central">
					<div class="grilla-4">
						<div class="cuarenta">
							<h3 class="raya-iz">Contáctanos</h3>
							<p>Calle Ricardo Angulo 180 San Isidro</p>
							 <p>2do piso Instituto de Ortopedia y Traumatología de la Clínica Ricardo Palma</p>
						</div>
						<ul class="contacto mt-4">
							<li class="bold mb-1">Teléfonos</li>
							<li>511-403-8024 (L. a V. 14:30 - 18:30)</li>
							<li>51-989-027-739 / 51-998-072-484</li>
							<li><a href="mailto:secretaria@aspecive.com">secretaria@aspecive.com</a></li>
							<li><a href="mailto:asoc.peruanadecirugiavertebral@gmail.com">asoc.peruanadecirugiavertebral@gmail.com</a></li>
						</ul>
					</div>
					<div class="grilla-8">
						<div class="section">
							<?php echo do_shortcode( '[contact-form-7 id="57" title="Formulario de contacto 1"]' ); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="section">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.3069118983453!2d-77.01979185624884!3d-12.091129114142346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c87b8deebff7%3A0xe57386531bde37d!2sCalle+Ricardo+Angulo+180%2C+Lima+15036!5e0!3m2!1ses!2spe!4v1455121524613" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="section border-top pb-3 pt-3 fondo-sec2">
				<div class="central">
					<div class="grilla-8">
						<ul class="menu-desc">
							<li><a href="#">ESPECIALIDADES</a></li>
							<li><a href="#">CONÓZCANOS</a></li>
							<li><a href="#">NUESTRO PROCESO</a></li>
							<li><a href="#">DATOS</a></li>
							<li><a href="#">NOTICIAS</a></li>
							<li><a href="#">CONTACTO</a></li>
						</ul>
						<?php echo do_shortcode( '[contact-form-7 id="62" title="mailing"]' ); ?>
<!--						<form class="email">
							<input type="text" placeholder="Correo electrónico">
						</form>-->
						
						<p class="copy mt-3">Copyright 2016 | Todos los derechos reservados</p>
					</div>
					<div class="grilla-4">
					<?php
										// retrieve one post with an ID of 5
										query_posts( 'page_id=60' );


										// the Loop
										while (have_posts()) : the_post();
											{ ?>

											<span class="marca">ASPECIVE</span>
						<div class="desc-marca"><?php the_content(); ?></div>
						<ul class="redesSocial2">
						<?php $link1= get_post_meta( get_the_ID(), 'face', true ); ?>
						<?php $link2= get_post_meta( get_the_ID(), 'twit', true ); ?>
							<li><a href="<?php echo $link1; ?>"><samp class="fa fa-facebook"></samp></a></li>
							<li><a href="<?php echo $link2; ?>"><samp class="fa fa-twitter"></samp></a></li>
						</ul>

											

											<?php }
										endwhile;
										?>
									</div>
						
					</div>
				</div>

		</div>	
	</body>
</html>