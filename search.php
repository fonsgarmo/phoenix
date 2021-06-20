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
	<?php if ( have_posts() ) : ?>
	<div id="search-results" class="container-fluid archive-title-container">
		<div class="row">
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

					echo '<div id="search-sideon" class="col-lg-9 col-12">';
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
					echo '<div class="col-lg-3 d-none d-lg-block phoenix-sidebar">';
						get_sidebar(); 
					echo '</div>';
				echo '</div>';

			?>
			<div class="row archive-pagination">
			 	<div class="col-md-12">
			 			<?php the_posts_pagination( array(
					    'mid_size'  => 2,
					    'prev_text' => 'Anterior',
					    'next_text' => 'Siguiente',
					    'screen_reader_text' => ' ',
					    'aria_label' => 'Paginación de archivos',
					) ); ?>
				</div>
		 	</div>

		 <?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>


<?php
get_footer();
