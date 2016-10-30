<?php
/*
Template Name: Tecnologia
*/
?>
<?php include 'header-2.php' ?>
<div class="container">
			<div class="section padding">
				
			</div>
			<div class="central interna" id="novelty">
				<div class="section">
					<div class="grilla-12 no-p">	
						<div class="section">

							<!--<div class="grilla-3">
								<div class="section">
									<div class="menu-pagina">
									</div>
								</div>
							</div>-->

							<div class="grilla-9">
								<div id="president">						
									<div class="medio">
										<h2 class="pt-3">Eventos</h2>
										<p class="no-mb"></p>
										<span class="subtitulo"></span>
										<?php
                    // The Query
                    $the_query = new WP_Query('category_name=afiches&posts_per_page=10');
                              while ( $the_query->have_posts() ) : $the_query->the_post();           
            ?>  
            
            	
            	<div class="afch">
            		<?php 
            			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            		?>
							<h3 class="subtitles"><?php the_title(); ?></h2>
							<a href="<?php echo $url; ?>" class="fancybox"><?php the_post_thumbnail('full'); ?></a>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="botonNegro btn-pd"> <span class="fa fa-caret-down"></span> Ver más</a>
						</div>
            
            

               
                <?php
        wp_reset_postdata();
        //comments_template();
  endwhile; ?>

										
									</div>
									<div class="medio black">

									</div>
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
										query_posts( 'page_id=58' );


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