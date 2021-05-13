<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Phoenix
 */

get_header();
?>

	<div id="search-results" class="container-fluid archive-title-container">
		<div class="row">

		<?php if ( have_posts() ) : ?>
				<div class="col-md-8 offset-md-2">
					<h1 class="search-title">
						<?php _e('Resultados de la búsqueda para ', 'phoenix') ?><b><?php echo get_search_query(); ?></b>
					</h1>
				</div>
		</div>
	</div>
	<div id="archive" class="container search-results">
			<?php 
			$columns_num = 2; // Columnas a mostrar
				$i = 0; //Contador de filas .row divs

				echo '<div class="row home-blog">';

					echo '<div id="search-sideon" class="col-md-9 d-none d-lg-block">';
					echo '<div class="row home-blog">';

				    /* Loop */
				    while ( have_posts() ) : the_post();
				    	
				        echo '<div id="post-' , the_ID(), '" ' , post_class('single-article col-md-' . 12 / $columns_num . ''), '>';
				        //echo '<div class="single-article col-lg-' . 12 / $columns_num . '">';

				            get_template_part( 'template-parts/content', 'archive' );
				            	
				        echo '</div>';

				        if($i % $columns_num == $columns_num - 1 ) {  

				            echo '</div>  <div class="row home-blog">';
				        }

				        $i++;

				    endwhile;

				echo '</div>';
				echo '</div>';
					echo '<div class="col-md-3 d-none d-lg-block phoenix-sidebar">';
						get_sidebar(); 
					echo '</div>';
				echo '</div>';


				echo '<div id="search-sideoff" class="d-lg-none">';
				echo '<div class="row home-blog d-lg-none">';
				/* Loop para pantallas pequeñas sin sidebar */
				    while ( have_posts() ) : the_post();
				    	
				        echo '<div class="single-article d-lg-none col-md-' . 12 / $columns_num . '">';

				            get_template_part( 'template-parts/content', 'archive' );
				            	
				        echo '</div>';

				        if($i % $columns_num == $columns_num - 1 ) {  

				            echo '</div>  <div class="row home-blog d-lg-none">';
				        }

				        $i++;

				    endwhile;

				echo '</div>';
				echo '</div>';

		 ?>
		 <?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	<div class="row search-pagination">
	 	<div class="col-md-4 offset-md-4">
	 		<div class="archive-nav"><?php previous_posts_link( __('« Anterior', 'phoenix') ); ?>
	 		<?php next_posts_link( __('Siguiente »', 'phoenix') ); ?></div>
		</div>
	 </div>
	</div><!-- #primary -->

<?php
get_footer();
