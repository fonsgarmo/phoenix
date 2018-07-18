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

	<div id="search-results" class="container">
		<div class="row">

		<?php if ( have_posts() ) : ?>

				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'phoenix' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
		
			<?php 
			$columns_num = 2; // Columnas a mostrar
				$i = 0; //Contador de filas .row divs

				echo '<div class="row home-blog">';
					echo '<div id="search-sideon" class="col-md-9 d-none d-lg-block">';
					echo '<div class="row home-blog">';

				    /* Loop */
				    while ( have_posts() ) : the_post();
				    	
				        echo '<div class="single-article col-lg-' . 12 / $columns_num . '">';

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
	 		<div class="archive-nav"><?php previous_posts_link( '« Anterior' ); ?>
	 		<?php next_posts_link( 'Siguiente »' ); ?></div>
		</div>
	 </div>
	</div><!-- #primary -->

<?php
get_footer();
