<!-- Dependencia -->
<section id="informacion-dependencia" class="seccion">
	<div class="container-lg">

		<div class="row">
		
			<div class="col-lg-12 row-titulo">
				<h2 class="titulo-row"><?php the_field('identidad_nombre', 'options'); ?></h2>
				<div class="borde-hr"><hr></div>
			</div>
		
		</div>
		
		
		<div class="row ">
			<div class="col-lg-8">
				
				<div class="info-dependencia">
					
					<?php the_field('dependencia_mensaje', 'options'); ?>
					
					<?php if ( get_field('dependencia_leer_mas', 'option') ) : ?>
									
						<div class="row mt-4">
							<div class="col-lg-3">
								<a class="btn btn-md w-100 text-white bg-primario fw-light" href="<?php echo the_field('dependencia_leer_mas', 'options'); ?>"> Leer más </a>
							</div>
						</div>
					
					<?php endif; ?>
					
				</div>
				
				<?php include(dirname(__DIR__).'/index/datos.php'); ?>
				
			</div>
			
			<div class="col-lg-3 offset-lg-1">
				<div class="datos-titular text-center">
					
					<?php if ( get_field('dependencia_foto_titular', 'option') ) : 
						
						$img_id = get_field('dependencia_foto_titular', 'option');
						$img_url = wp_get_attachment_image_url( $img_id, 'post-thumbnail' );
					?>
					
						<img src="<?php echo esc_url($img_url); ?>" alt="<?php the_field('dependencia_nombre_titular', 'option') ?>" class="img-titular img-fluid center-block">
						
					<?php else : ?>
					
						<img src="<?php bloginfo('template_directory'); ?>/assets/img/escudo-tamaulipas.svg" alt="<?php the_field('dependencia_puesto_titular', 'option') ?>" class="img-titular img-fluid center-block">
						
					<?php endif; ?>
					
					<h2><?php the_field('dependencia_nombre_titular', 'option') ?></h2>
					<h4><?php the_field('dependencia_puesto_titular', 'option') ?></h4>
					<hr>
					
					<?php if ( get_field('dependencia_semblanza', 'option') ) : ?>
					
						<a class="btn btn-md w-100 color-primario fw-light border border-primario hover-primario" href="<?php echo the_field('dependencia_semblanza', 'options'); ?>"> Semblanza </a>
						
					<?php endif; ?>
					
				</div>
			</div>
			
		</div>
		
	</div>
</section>
<!-- /Dependencia -->