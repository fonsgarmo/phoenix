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
<section id="news-cover">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<h3 class="title-home-noticias">Últimas noticias</h3>
				<span class="more-news"><a href="#">Ver todas ></a></span>
			</div>	
		</div>

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
				<h3 class="title-home-noticias">Artículos y tutoriales</h3>
			</div>
		
		<?php 
			$columns_num = 3; // Numero de columnas
				$i = 0; //Contador para divs .row
				echo '<div class="col-lg-8 offset-lg-2">';
				echo '<div class="row articulos-home">';

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
		<div class="col-xl-6 offset-xl-3 text-center">
			<?php get_search_form(); ?>
		</div>
	</div>
</section>


