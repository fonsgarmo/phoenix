<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phoenix
 */

?>

<div class="container-fluid archive-title-container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h1 class="archive-title"><?php _e('Sin resultados', 'phoenix'); ?></h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
	<?php

	if ( is_search() ) :
		?>

		<h3><?php _e('Lo sentimos, pero no hemos podido encontrar lo que buscas. Utiliza otros términos de búsqueda e inténtalo de nuevo.', 'phoenix'); ?></h3>
		
		<?php

	else :
		?>

		<h3><?php _e('No hemos podido encontrar lo que buscas :(', 'phoenix'); ?></h3>
		<?php


	endif;
	?>
	</div>
</div>
