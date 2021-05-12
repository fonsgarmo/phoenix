<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phoenix
 */

?>

<?php 
	$page = ( get_query_var( 'page' ) ) ? absint( get_query_var( 'page' ) ) : 1;
	$args = array(
		'nopaging' => false,
		'post_type' => 'post',
		'posts_per_page' => 9,
		'order' => 'DESC',
		'paged' => $page,
		'category_name' => 'noticias',
		) ?>
<?php $the_query = new WP_Query( $args ); ?>
<section id="home-widget">
	<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<?php dynamic_sidebar('home-adsense'); ?>
				</div>
			</div>
		</div>
</section>
<section id="news-cover">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<h3 class="title-home-noticias">Últimas noticias</h3>
				<span class="more-news"><a href="../category/noticias/">Ver todas ></a></span>
			</div>	
		</div>
		<div class="row home-news-grid">

		<?php 
			$columns_num = 3; // Numero de columnas
				$i = 0; //Contador para divs .row
				echo '<div class="col-lg-8 offset-lg-2">';
				echo '<div class="row home-blog">';

				    /* Loop */
				    while ( $the_query->have_posts() ) : $the_query->the_post();

				        echo '<div id="post-' , the_ID(), '" ' , post_class('single-article col-md-' . 12 / $columns_num . ''), '>';
				        //echo '<div id="post-' , the_ID(), '" class="single-article col-md-' . 12 / $columns_num . '">';
				            get_template_part( 'template-parts/content', 'archive' );
				        echo '</div>';

				        if($i % $columns_num == $columns_num - 1 ) {  
				            echo '</div> <div class="row home-blog">';
				        }

				        $i++;

				    endwhile;
				echo '</div>';    	
				echo '</div>';
		 ?>
		 <?php wp_reset_query(); ?> 
		</div>

		 <?php 
	$page = ( get_query_var( 'page' ) ) ? absint( get_query_var( 'page' ) ) : 1;
	$args = array(
		'nopaging' => false,
		'post_type' => 'post',
		'posts_per_page' => 3,
		'order' => 'DESC',
		'paged' => $page,
		'category_name' => 'tutoriales',
		) ?>
<?php $the_query = new WP_Query( $args ); ?>
		<div class="row articulos-home">
			<div class="col-lg-8 offset-lg-2">
				<h3 class="title-home-tutoriales">Artículos y tutoriales</h3>
				<span class="more-tutorials"><a href="/category/tutoriales/">Ver más ></a></span>
			</div>
		
		<?php 
			$columns_num = 3; // Numero de columnas
				$i = 0; //Contador para divs .row
				echo '<div class="col-lg-8 offset-lg-2">';
				echo '<div class="row articulos-home-in">';

				    /* Loop */
				    while ( $the_query->have_posts() ) : $the_query->the_post();

				        echo '<div id="post-' , the_ID(), '" ' , post_class('single-article col-md-' . 12 / $columns_num . ''), '>';
				        //echo '<div id="post-' , the_ID(), '" class="single-article col-md-' . 12 / $columns_num . '">';
				            get_template_part( 'template-parts/content', 'archive' );
				        echo '</div>';

				        if($i % $columns_num == $columns_num - 1 ) {  
				            echo '</div> <div class="row home-blog">';
				        }

				        $i++;

				    endwhile;
				echo '</div>';    	
				echo '</div>';
		 ?>
		 <?php wp_reset_query(); ?> 

		 </div>


		 <?php 
			$page = ( get_query_var( 'page' ) ) ? absint( get_query_var( 'page' ) ) : 1;
			$args = array(
				'nopaging' => false,
				'post_type' => 'post',
				'posts_per_page' => 3,
				'order' => 'DESC',
				'paged' => $page,
				'category_name' => 'descargas',
				) ?>
		<?php $the_query = new WP_Query( $args ); ?>
		 <div class="row descargas-home">
			<div class="col-lg-8 offset-lg-2">
				<h3 class="title-home-descargas">Descargas</h3>
				<span class="more-descargas"><a href="/category/descargas/">Ver más ></a></span>
			</div>
		
		<?php 
			$columns_num = 3; // Numero de columnas
				$i = 0; //Contador para divs .row
				echo '<div class="col-lg-8 offset-lg-2">';
				echo '<div class="row descargas-home-in">';

				    /* Loop */
				    while ( $the_query->have_posts() ) : $the_query->the_post();

				        echo '<div id="post-' , the_ID(), '" ' , post_class('single-article col-md-' . 12 / $columns_num . ''), '>';
				        //echo '<div id="post-' , the_ID(), '" class="single-article col-md-' . 12 / $columns_num . '">';
				            get_template_part( 'template-parts/content', 'archive' );
				        echo '</div>';

				        if($i % $columns_num == $columns_num - 1 ) {  
				            echo '</div> <div class="row home-blog">';
				        }

				        $i++;

				    endwhile;
				echo '</div>';    	
				echo '</div>';
		 ?>
		 <?php wp_reset_query(); ?> 

		 </div>

		 <?php 
			$page = ( get_query_var( 'page' ) ) ? absint( get_query_var( 'page' ) ) : 1;
			$args = array(
				'nopaging' => false,
				'post_type' => 'post',
				'posts_per_page' => 3,
				'order' => 'DESC',
				'paged' => $page,
				'category_name' => 'sims-antano',
				) ?>
		<?php $the_query = new WP_Query( $args ); ?>
		 <div class="row sda-home">
			<div class="col-lg-8 offset-lg-2">
				<h3 class="title-home-sda">Sims de Antaño</h3>
				<span class="more-sda"><a href="/category/descargas/ls4-descargas/sims-antano/">Ver más ></a></span>
			</div>
		
		<?php 
			$columns_num = 3; // Numero de columnas
				$i = 0; //Contador para divs .row
				echo '<div class="col-lg-8 offset-lg-2">';
				echo '<div class="row sda-home-in">';

				    /* Loop */
				    while ( $the_query->have_posts() ) : $the_query->the_post();

				        echo '<div id="post-' , the_ID(), '" ' , post_class('single-article col-md-' . 12 / $columns_num . ''), '>';
				        //echo '<div id="post-' , the_ID(), '" class="single-article col-md-' . 12 / $columns_num . '">';
				            get_template_part( 'template-parts/content', 'archive' );
				        echo '</div>';

				        if($i % $columns_num == $columns_num - 1 ) {  
				            echo '</div> <div class="row home-blog">';
				        }

				        $i++;

				    endwhile;
				echo '</div>';    	
				echo '</div>';
		 ?>
		 <?php wp_reset_query(); ?> 

		 </div>



		<div class="row d-none">
			<div class="col-md-12 text-right pagination">
				<div class="pag-box">
					<?php 

					$big = 999999999; // need an unlikely integer

					$args_pag = array(
						'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format'             => '/page/%#%',
						'total'              => 45,
						'current'            => max( 1, get_query_var('page') ),
						'show_all'           => false,
						'end_size'           => 2,
						'mid_size'           => 2,
						'prev_next'          => true,
						'prev_text'          => __('« Anterior', 'phoenix'),
						'next_text'          => __('Siguiente »', 'phoenix'),
						'type'               => 'plain',
						'add_args'           => false,
						'add_fragment'       => '',
						'before_page_number' => '',
						'after_page_number'  => ''
					); 
					echo paginate_links( $args_pag ); ?>
				</div>
			</div>
		</div>	
		<div class="col-xl-6 offset-xl-3 text-center d-none">
			<?php get_search_form(); ?>
		</div>
	</div>
</section>


