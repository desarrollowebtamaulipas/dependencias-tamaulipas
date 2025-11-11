<?php
	  
  $argsproyectos = array(
	'post_type' 		=> 'proyectos',
	'posts_per_page'	=> 4,
	'meta_query' 		=> array('key' => '_thumbnail_id')
  );
  
  $proyectos = new WP_Query( $argsproyectos );
  
  if ( $proyectos->have_posts() ) {
  
?>

<!-- Proyectos Estratégicos -->
<section id="proyectos-estrategicos" class="seccion">
	<div class="container-lg items-temas">
	
		<div class="row">
		
			<div class="col-lg-12 row-titulo">
				<h2 class="titulo-row">Proyectos Estratégicos</h2>
				<div class="borde-hr"><hr></div>
			</div>
			
		</div>
			
		<div class="row d-flex align-items-stretch">
			<?php 
				while ( $proyectos->have_posts() ) { $proyectos->the_post();
			?>
			
			<div class="col-sm-6 col-md-6 col-lg-3 mt-3 mb-3">
				
				<div class="item-tema h-100 d-flex flex-column text-center">
				
					<div class="mb-3">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'prensa', array( 'alt' => get_the_title(), 'class' => 'img-fluid' ) ); ?></a>
					</div>
				
					<div class="flex-grow-1 d-flex flex-column justify-content-start">
						<h4 class="color-primario mb-2"><?php the_title(); ?></h4> 
						<p class="mb-0"><?php the_excerpt(); ?></p>
					</div>
					
					<div class="mt-3">
						<a href="<?php the_permalink(); ?>" class="text-white btn bg-secundario" style="width: 150px;">Ver más</a>
					</div>
					
				</div>
				
			</div>
			
			<?php } ?>

		</div>
		
		<?php 
			$proyectos_totales = $proyectos->found_posts;
			if ($proyectos_totales > 4) { 
		?>
		
		<div class="row mt-5" id="row-btn-proyectos">
				
			<div class="d-flex justify-content-center">
				<div class="col-md-3 col-12">
					<a href="/proyectos" class="btn btn-md w-100 text-white bg-primario fw-light">Ver mas proyectos</a>
				</div>
			</div>
		
		</div>
		
		<?php } ?>

	</div>  
</section>
<!-- /Proyectos Estratégicos -->
	
<?php } else { } wp_reset_postdata(); ?>