<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phoenix
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

	<?php if ( have_posts() ) : ?>

	<section id="archive">
		<div class="container-fluid archive-title-container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<h1 class="archive-title"><?php the_archive_title(); ?></h1>
				</div>
			</div>
		</div>

		<div class="container">
		<?php 
			$columns_num = 2; // Columnas a mostrar
				$i = 0; //Contador de filas .row divs

				echo '<div class="row home-blog" style="margin-bottom: 0px">';
					echo '<div id="archive-sideon" class="col-lg-9 col-12">';
					echo '<div class="row home-blog">';

				    /* Loop */
				    while ( have_posts() ) : the_post();
				    	
				        echo '<div id="post-' , the_ID(), '" ' , post_class('single-article col-md-' . 12 / $columns_num . ''), '>';

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
	</div>
</section>

	<?php endif;?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
