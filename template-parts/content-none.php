<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phoenix
 */

?>

<div class="col-xl-auto results-not-found">
		<h1>Sin resultados</h1>
</div>

	<div class="col-xl-12">
		<?php

		if ( is_search() ) :
			?>

			<h3>Lo sentimos, pero no hemos podido encontrar lo que buscas. Utiliza otros términos de búsqueda e inténtalo de nuevo.</h3>
			
			<?php

		else :
			?>

			<h3>No hemos podido encontrar lo que buscas :(</h3>
			<?php


		endif;
		?>
	</div>
