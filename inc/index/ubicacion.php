<!-- Ubicación -->
<section id="ubicacion" class="seccion">
	<div class="container-lg ubicacion">
	
		<div class="row">
		
			<div class="col-lg-12 row-titulo">
				<h2 class="titulo-row">Ubicación</h2>
				<div class="borde-hr"><hr></div>
			</div>
			
		</div>
			
		<div class="row">
			
			<div class="col-lg-3">
				<div class="direccion border-primario">
				
					<p><?php the_field('contacto_direccion', 'options'); ?></p>
					
					<p><?php if( have_rows('contacto_telefonos', 'option') ): while( have_rows('contacto_telefonos', 'option') ): the_row(); ?>
					
						Tel: <?php the_sub_field('contacto_telefono', 'options'); ?><br>
					
					<?php endwhile; endif; ?></p>
					
					<?php if ( get_field('contacto_contacto', 'option') ) : ?>
										
						<a class="btn btn-md w-100 text-white bg-primario fw-light" href="<?php echo the_field('contacto_contacto', 'options'); ?>"> Contacto </a>
						
					<?php endif; ?>
					
				</div>
			</div>
			
			<div class="col-lg-9">
			
				<div class="google_map">
					<?php echo get_field('contacto_mapa', 'options'); ?>
				</div>
			
			</div>
			
		</div>
	
	</div>
</section>    
<!-- /Ubicación -->