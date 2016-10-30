<?php include 'header.php' ?>
<div class="container">
			<div class="section" id="background">
				<ul id="slider" class="principal cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-speed="500" data-cycle-timeout="4000" data-cycle-slides="> li">
					<?php
                    // The Query
                    $the_query = new WP_Query('category_name=banner&posts_per_page=4');
                              while ( $the_query->have_posts() ) : $the_query->the_post();           
            ?>  
            <li>
            	<?php the_post_thumbnail('full'); ?>
            	<div class="mens">
							<h2><?php the_title(); ?></h2>
							<span class="subraya"></span>
							<p class="text-black"><?php the_excerpt(); ?></p>
							<span class="fa fa-arrow-down border"></span>
						</div>
            </li>
            

               
                <?php
        wp_reset_postdata();
        //comments_template();
        

  endwhile; ?>


					<!--<li>
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/dummy1.jpg" alt="" />
						<div class="mens">
							<h2>Nosotros <strong>Amamos</strong> tu salud</h2>
							<span class="subraya"></span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere finibus velit eu iaculis. Pellentesque vel pharetra nisi. Duis pellentesque at quam pulvinar vestibulum.</p>
							<span class="fa fa-arrow-down border"></span>
						</div>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/dummy1.jpg" alt="" />
						<div class="mens">
							<h2>Nosotros <strong>Amamos</strong> tu salud</h2>
							<span class="subraya"></span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere finibus velit eu iaculis. Pellentesque vel pharetra nisi. Duis pellentesque at quam pulvinar vestibulum.</p>
							<span class="fa fa-arrow-down border"></span>
						</div>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/dummy1.jpg" alt="" />
						<div class="mens">
							<h2>Nosotros <strong>Amamos</strong> tu salud</h2>
							<span class="subraya"></span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere finibus velit eu iaculis. Pellentesque vel pharetra nisi. Duis pellentesque at quam pulvinar vestibulum.</p>
							<span class="fa fa-arrow-down border"></span>
						</div>
					</li>-->
				</ul>
			</div>
			<div class="central" id="novelty">
				<div class="section">
					<div class="grilla-12 no-p">	
						<div class="section">
							<div class="grilla-8">
								<div id="president">						
									<div class="medio">
										<?php
										// retrieve one post with an ID of 5
										query_posts( 'page_id=16' );


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
								<div class="section insumos">
									<!--<img class="grilla-12 no-p" src="<?php bloginfo('template_directory'); ?>/assets/images/img-pub.png" alt="" />-->
									<?php
                    // The Query
                    $the_query = new WP_Query('category_name=afiches&posts_per_page=2');
                              while ( $the_query->have_posts() ) : $the_query->the_post();           
            ?>  
            
            	
            	<div class="mens_">
							<h2><?php the_title(); ?></h2>
							<?php the_post_thumbnail('full'); ?>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>">Ver más</a>
						</div>
            
            

               
                <?php
        wp_reset_postdata();
        //comments_template();
        

  endwhile; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section border-top mt-6">
				<div class="central">
					<div class="grilla-5">
						<div class="cuarenta">
						<?php
										// retrieve one post with an ID of 5
										query_posts( 'page_id=31' );


										// the Loop
										while (have_posts()) : the_post();
											{ ?>

											<h3 class="raya-iz"><?php the_title(); ?></h3>
											<?php $subtitulo = get_post_meta( get_the_ID(), 'subtitulo', true ); ?>
											<p class="mb-4"><?php echo $subtitulo; ?></p>
											<?php the_content(); ?>
											

											<?php }
										endwhile;
										?>
									</div>
<!--						<div class="sesenta">
							<ul class="continua">
								<li>
									<span class=" fa fa-"></span>
									<h4></h4>
								</li>
							</ul>
						</div>-->
					</div>
					<div class="grilla-7">
						<div class="section">

						<?php
                    // The Query
                    $the_query = new WP_Query('category_name=especialidades&posts_per_page=6');
                              while ( $the_query->have_posts() ) : $the_query->the_post();           
            ?>  
            	

            <a class="border-bottom grilla-4 no-pd" href="<?php the_permalink(); ?>">
								<div class="grilla-12 esp-sec border-left">
									<?php the_post_thumbnail('full'); ?>
									<span><?php the_title(); ?></span>
									<p><?php the_excerpt(); ?></p>
									<div class="fond-img-sec">
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/arrow-tb.png">
									</div>
								</div>
							</a>
            

               
                <?php
        wp_reset_postdata();
        //comments_template();
        

  endwhile; ?>


							<!--<a href="#">
								<div class="grilla-4 esp-sec border-left">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/ico-esp1.png">
									<span>operación de vértebras</span>
									<p>Lorem ipsum dolor sit amet consectetuer.</p>
									<div class="fond-img-sec">
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/arrow-tb.png">
									</div>
								</div>
							</a>
							<a href="#">
								<div class="grilla-4 esp-sec border-left">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/ico-esp2.png">
									<span>rehabilitación</span>
									<p>Lorem ipsum dolor sit amet consectetuer.</p>
									<div class="fond-img-sec">
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/arrow-tb.png">
									</div>
								</div>
							</a>
							<a href="#">
								<div class="grilla-4 esp-sec border-left border-right">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/ico-esp3.png">
									<span>psicología social</span>
									<p>Lorem ipsum dolor sit amet consectetuer.</p>
									<div class="fond-img-sec">
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/arrow-tb.png">
									</div>
								</div>
							</a>
							<a href="#">
								<div class="grilla-4 esp-sec border-left border-top">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/ico-esp4.png">
									<span>Terapia física</span>
									<p>Lorem ipsum dolor sit amet consectetuer.</p>
									<div class="fond-img-sec">
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/arrow-tb.png">
									</div>
								</div>
							</a>
							<a href="#">
								<div class="grilla-4 esp-sec border-left border-top">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/ico-esp5.png">
									<span>tratamientos</span>
									<p>Lorem ipsum dolor sit amet consectetuer.</p>
									<div class="fond-img-sec">
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/arrow-tb.png">
									</div>
								</div>
							</a>
							<a href="#">
								<div class="grilla-4 esp-sec border-left border-right border-top">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/ico-esp6.png">
									<span>terapia psicológica</span>
									<p>Lorem ipsum dolor sit amet consectetuer.</p>
									<div class="fond-img-sec">
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/arrow-tb.png">
									</div>
								</div>
							</a>-->	
						</div>
					</div>	
				</div>
			</div>
			<div class="section border-top fondo-sec pb-3">
				<div class="central">
					<div class="grilla-12">
						<div class="cuarenta">
							<h3 class="raya-iz">CONÓCENOS</h3>
							<p>Con la mejor planilla de Lima, nuestra institución se enorgullece del trabajo que lleva a cabo,  en este lugar Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum risus erat, semper nec vulputate sit amet, rhoncus eu sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean mauris sem,.</p>
						</div>
						<div class="sesenta">
							<ul class="continua">
								<li>
									<span class=" fa fa-"></span>
									<h4></h4>
								</li>
							</ul>
						</div>
						<div class="section">
							 <?php
                    // The Query
                    $the_query = new WP_Query('category_name=doctores&posts_per_page=4');
                              while ( $the_query->have_posts() ) : $the_query->the_post();           
            ?>  

            <div class="grilla-3 conoc-fond1 fond-color1">
								<div class="ver-bot">
									<span class="nom-doc"><?php the_title(); ?></span>
									<samp class="espec-doc">FISIOTERAPEUTA</samp>
									<!--<ul class="redesSocial">
										<li><a href=""><samp class="fa fa-facebook"></samp></a></li>
										<li><a href=""><samp class="fa fa-twitter"></samp></a></li>
										<li><a href=""><samp class="fa fa-dribbble"></samp></a></li>
									</ul>-->
									
								</div>
								<?php the_post_thumbnail('news-thumbnail_fucsa'); ?>
							</div>

               
                <?php
        wp_reset_postdata();
        //comments_template();
        

  endwhile; ?>
							<!--<div class="grilla-3 conoc-fond1 fond-color1">
								<div class="ver-bot">
									<span class="nom-doc">Doctor UNO</span>
									<samp class="espec-doc">FISIOTERAPEUTA</samp>
									<ul class="redesSocial">
										<li><a href=""><samp class="fa fa-facebook"></samp></a></li>
										<li><a href=""><samp class="fa fa-twitter"></samp></a></li>
										<li><a href=""><samp class="fa fa-dribbble"></samp></a></li>
									</ul>
								</div>
							</div>
							<div class="grilla-3 conoc-fond1 fond-color2">
								<div class="ver-bot">
									<span class="nom-doc">Doctor UNO</span>
									<samp class="espec-doc">FISIOTERAPEUTA</samp>
									<ul class="redesSocial">
										<li><a href=""><samp class="fa fa-facebook"></samp></a></li>
										<li><a href=""><samp class="fa fa-twitter"></samp></a></li>
										<li><a href=""><samp class="fa fa-dribbble"></samp></a></li>
									</ul>
								</div>
							</div>
							<div class="grilla-3 conoc-fond1 fond-color3">
								<div class="ver-bot">
									<span class="nom-doc">Doctor UNO</span>
									<samp class="espec-doc">FISIOTERAPEUTA</samp>
									<ul class="redesSocial">
										<li><a href=""><samp class="fa fa-facebook"></samp></a></li>
										<li><a href=""><samp class="fa fa-twitter"></samp></a></li>
										<li><a href=""><samp class="fa fa-dribbble"></samp></a></li>
									</ul>
								</div>
							</div>
							<div class="grilla-3 conoc-fond1 fond-color2">
								<div class="ver-bot">
									<span class="nom-doc">Doctor UNO</span>
									<samp class="espec-doc">FISIOTERAPEUTA</samp>
									<ul class="redesSocial">
										<li><a href=""><samp class="fa fa-facebook"></samp></a></li>
										<li><a href=""><samp class="fa fa-twitter"></samp></a></li>
										<li><a href=""><samp class="fa fa-dribbble"></samp></a></li>
									</ul>
								</div>
							</div>-->
							<div class="grilla-12 no-p mt-2">
								<a href="#" class="botonNegro btn-pd"><span class="fa fa-caret-right"></span> CONOCE A TODOS</a>
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
			<div class="section border-top fondo-sec pb-3">
				<div class="central">
					<div class="grilla-12">
					<?php
										// retrieve one post with an ID of 5
										query_posts( 'page_id=63' );


										// the Loop
										while (have_posts()) : the_post();
											{ ?>


						<div class="cuarenta">
							<h3 class="raya-iz"><?php the_title(); ?></h3>
							<p><?php the_content(); ?></p>
						</div>

											

											

											<?php }
										endwhile;
										?>
						<div class="section">
							<div class="grilla-12 text-center mb-3 mt-2"> 
								<ul class="menu-galeria">
									<li class="btn-galeria active"><a href="#">TODO</a></li>
									<li class="btn-galeria"><a href="#">FOTOS</a></li>
									<li class="btn-galeria"><a href="#">VIDEOS</a></li>
									<li class="btn-galeria"><a href="#">PERSONAJES</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>


			 <?php
                    // The Query
                    $the_query = new WP_Query('category_name=fotos&posts_per_page=6');
                              while ( $the_query->have_posts() ) : $the_query->the_post();           
            ?>  

            <div class="grilla-3 no-p fotos">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?><span class="nom-doc-fot"><?php the_title(); ?></span></a>
			</div>

            

               
                <?php
        wp_reset_postdata();
        //comments_template();
        

  endwhile; ?>
			 <?php
                    // The Query
                    $the_query = new WP_Query('category_name=video&posts_per_page=6');
                              while ( $the_query->have_posts() ) : $the_query->the_post();           
            ?>  

            <div class="grilla-3 no-p video">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?><span class="nom-doc-fot"><?php the_title(); ?></span></a>
			</div>

            

               
                <?php
        wp_reset_postdata();
        //comments_template();
        

  endwhile; ?>
			 <?php
                    // The Query
                    $the_query = new WP_Query('category_name=reportaje&posts_per_page=6');
                              while ( $the_query->have_posts() ) : $the_query->the_post();           
            ?>  

            <div class="grilla-3 no-p reportaje">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?><span class="nom-doc-fot"><?php the_title(); ?></span></a>
			</div>

            

               
                <?php
        wp_reset_postdata();
        //comments_template();
        

  endwhile; ?>


<!--
			
			<div class="grilla-3 no-p">
				<img class="galeria-img2" src="<?php bloginfo('template_directory'); ?>/">
			</div>
			<div class="grilla-3 no-p">
				<img class="galeria-img3" src="<?php bloginfo('template_directory'); ?>/">
			</div>
			<div class="grilla-3 no-p">
				<img class="galeria-img1" src="<?php bloginfo('template_directory'); ?>/">
			</div>
			<div class="grilla-3 no-p">
				<img class="galeria-img2" src="<?php bloginfo('template_directory'); ?>/">
			</div>
			<div class="grilla-3 no-p">
				<img class="galeria-img3" src="<?php bloginfo('template_directory'); ?>/">
			</div>
			<div class="grilla-3 no-p">
				<img class="galeria-img1" src="<?php bloginfo('template_directory'); ?>/">
			</div>
			<div class="grilla-3 no-p">
				<img class="galeria-img2" src="<?php bloginfo('template_directory'); ?>/">
			</div>-->
			<div class="section border-top fondo-sec pt-5 pb-5">
				<div class="central">
					<ul class="grilla-10 text-center cycle-slideshow" data-cycle-fx="fade" data-cycle-speed="500" data-cycle-timeout="4000" data-cycle-slides="> li">
					 <?php
                    // The Query
                    $the_query = new WP_Query('category_name=testimonio&posts_per_page=7');
                              while ( $the_query->have_posts() ) : $the_query->the_post();           
            ?>  

            <li class="clientes">
            	<p><?php the_content(); ?></p>
								<?php the_post_thumbnail('full'); ?>
								<span><?php the_title(); ?></span>
									
							</li>

               
                <?php
        wp_reset_postdata();
        //comments_template();
        

  endwhile; ?>
						
					</ul>
				</div>
<?php include 'footer.php' ?>