<?php
			
	$argsctas = array(
							
		'post_type' 		=> 'cta',
		'posts_per_page'	=> 1,
		'meta_query' 		=> array('key' => '_thumbnail_id')
	);
	
	$ctas = new WP_Query( $argsctas );
	
	if ( $ctas->have_posts() ) {
	
?>

<!--CTA-->
<section id="cta-home" class="seccion"> 
 	<div class="container-lg">
	
		<div class="row">
			<div class="col-12">

            	<?php 
					while ( $ctas->have_posts() ) { $ctas->the_post();
	
                	// ACF
                	$subtitulo = get_field('cta_subtitulo');
                	$texto     = get_field('cta_texto');
                	$boton     = get_field('cta_boton');
                	$img_mobile = get_field('cta_banner_celular');
	
                	// Imagen destacada
                	$background = get_the_post_thumbnail_url(get_the_ID(), 'full');
            	?>
				
            	<div class="bg-splash" style="background-image: url('<?php echo esc_url($background); ?>');" data-img-desktop="<?php echo esc_url($background); ?>"  data-img-mobile="<?php echo esc_url($img_mobile); ?>">
	
                	<div class="container-lg h-100 px-5">  
                		<div class="row h-100 text-white d-flex align-items-stretch align-items-lg-center justify-content-md-start justify-content-lg-start">
                    		<div class="col-sm-12 col-md-7 col-lg-6 my-5">
								
                        		<h2 class="titulo-cta"><?php the_title(); ?></h2>
                    			<h3 class="subtitulo-cta"><?php echo $subtitulo; ?></h3>
                    			<div class="content-cta"><?php echo $texto; ?></div>
								
								<?php 
									if ( $boton ) {
										$boton_url    = $boton['url'] ?? '';
										$boton_title  = $boton['title'] ?? '';
										$boton_target = $boton['target'] ?? '_self';
									if ( $boton_url && $boton_title ) {
								?>
								
                					<div class="row mt-4">
                        				<div class="col-md-6 col-lg-6">
											
                        					<a class="btn bg-white color-primario px-4 w-100" href="<?php echo esc_url($boton_url); ?>" target="<?php echo esc_attr($boton_target); ?>"><?php echo esc_html($boton_title); ?></a>
											
                        				</div>
                    				</div>
								
                    			<?php }  } ?>
								
                    		</div>
                		</div>
                	</div>
					
            	</div>
				
				<?php } ?>
				
            </div>
        </div>

	</div>
</section>
<!--/CTA-->

<?php } else { } wp_reset_postdata(); ?>