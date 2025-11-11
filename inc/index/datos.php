<?php 

	$dato_1 = 	get_field( 'datos_1_dato' , 'option' );
	$dato_2 = 	get_field( 'datos_2_dato' , 'option' );
	$dato_3 = 	get_field( 'datos_3_dato' , 'option' );
	$dato_4 = 	get_field( 'datos_4_dato' , 'option' );
	$texto_1 =	get_field( 'datos_1_texto' , 'option' );
	$texto_2 =	get_field( 'datos_2_texto' , 'option' );
	$texto_3 =	get_field( 'datos_3_texto' , 'option' );
	$texto_4 =	get_field( 'datos_4_texto' , 'option' );
	
	// Armar arreglo de cuadros disponibles
	$cuadros = [];
	
	if($dato_1 || $texto_1) {
		$cuadros[] = [
			'prefijo' => 'datos_1_prefijo',
			'dato'    => 'datos_1_dato',
			'texto'   => 'datos_1_texto'
		];
	}
	
	if($dato_2 || $texto_2) {
		$cuadros[] = [
			'prefijo' => 'datos_2_prefijo',
			'dato'    => 'datos_2_dato',
			'texto'   => 'datos_2_texto'
		];
	}
	
	if($dato_3 || $texto_3) {
		$cuadros[] = [
			'prefijo' => 'datos_3_prefijo',
			'dato'    => 'datos_3_dato',
			'texto'   => 'datos_3_texto'
		];
	}
	
	if($dato_4 || $texto_4) {
		$cuadros[] = [
			'prefijo' => 'datos_4_prefijo',
			'dato'    => 'datos_4_dato',
			'texto'   => 'datos_4_texto'
		];
	}
	
	$count = count($cuadros);
	
	// Definir tamaño de columna
	if($count <= 2){
		$col_class = 'col-6 col-xl-6';
	} elseif($count == 3){
		$col_class = 'col-6 col-xl-4';
	} else {
		$col_class = 'col-6 col-xl-3';
	}
	
	if($count >= 1){

?>

<div class="row" id="row-cuadros">
					
	<?php foreach($cuadros as $c): ?>
	
		<div class="<?php echo $col_class; ?> mb-4">
			<div class="card cuadro text-center">
				
				<div class="d-block">
					<span><?php the_field($c['prefijo'], 'option'); ?></span>
					<span class="counter"><?php the_field($c['dato'], 'option'); ?></span>
					<hr>
					<?php the_field($c['texto'], 'option'); ?>
				</div>
				
			</div>
		</div>
		
	<?php endforeach; ?>
	
</div>

<?php } ?>