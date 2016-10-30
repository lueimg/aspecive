<?php include 'header-2.php' ?>
<div class="container">
			<div class="section padding">
				
			</div>
			<div class="central interna" id="novelty">
				<div class="section">
					<div class="grilla-12 no-p">	
						<div class="section">
							<div class="grilla-8">
								<div id="president">						
									<div class="medio">
										<?php
										// retrieve one post with an ID of 5
										


										// the Loop
										while (have_posts()) : the_post();
											{ ?>

											<h2 class="pt-3"><?php the_title(); ?></h2>
											<?php $subtitulo = get_post_meta( get_the_ID(), 'subtitulo', true ); ?>
											<p class="no-mb"><?php echo $subtitulo; ?></p>
											<span class="subtitulo"></span>
											<div class="section">
											<?php the_post_thumbnail('full'); ?>
											</div>
											<?php the_content(); ?>
											<a href="<?php the_permalink(); ?>" class="botonNegro btn-pd"><span class="fa fa-caret-right"></span> LEER COMPLETO</a>


											<?php }
										endwhile;
										?>
										
									</div>
									<div class="medio black">

									</div>
								</div>
							</div>
							<div class="grilla-4">
								<div class="section">
									<img class="grilla-12 no-p" src="<?php bloginfo('template_directory'); ?>/assets/images/img-pub.png" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="section fondo-grisOscuro">
				<div class="central">
					<div class="grilla-10 pt-4 pb-6 ayud-comun">



						<?php
										// retrieve one post with an ID of 5
										query_posts( 'page_id=29' );


										// the Loop
										while (have_posts()) : the_post();
											{ ?>

											<h2><?php the_title(); ?></h2>
											<?php the_content(); ?>

											<?php $nombre1 = get_post_meta( get_the_ID(), 'nombre1', true ); ?>
											<?php $cantidad1 = get_post_meta( get_the_ID(), 'cantidad1', true ); ?>
											<?php $nombre2 = get_post_meta( get_the_ID(), 'nombre2', true ); ?>
											<?php $cantidad2 = get_post_meta( get_the_ID(), 'cantidad2', true ); ?>
											<?php $nombre3 = get_post_meta( get_the_ID(), 'nombre3', true ); ?>
											<?php $cantidad3 = get_post_meta( get_the_ID(), 'cantidad3', true ); ?>



											<div class="section mt-3">
							<div class="grilla-3">
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/ico-consultas.png">
								<div class="txt-ayud-comun">
									<strong><?php echo $cantidad1; ?></strong>
									<span><?php echo $nombre1; ?></span>
								</div>
							</div>
							<div class="grilla-5 text-center">
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/ico-pacientes.png">
								<div class="txt-ayud-comun text-left">
									<strong><?php echo $cantidad2; ?></strong>
									<span><?php echo $nombre2; ?></span>
								</div>
							</div>
							<div class="grilla-4">
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/ico-consultas.png">
								<div class="txt-ayud-comun">
									<strong><?php echo $cantidad3; ?></strong>
									<span><?php echo $nombre3; ?></span>
								</div>
							</div>
						</div>
											
											

											<?php }
										endwhile;
										?>



						
					</div>
				</div>
			</div>
			
<?php include 'footer.php' ?>