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
		'posts_per_page' => 8,
		'order' => 'DESC',
		'paged' => $page,
		) ?>
<?php $the_query = new WP_Query( $args ); ?>
<section id="news-cover">
	<div class="container">

		<?php 
			$columns_num = 2; // Numero de columnas
				$i = 0; //Contador para divs .row

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
		 ?>
		 <?php wp_reset_query(); ?> 

		<div class="col-md-6 text-right pagination">
			<div class="pag-box">
				<?php 

				$big = 999999999; // need an unlikely integer

				$args_pag = array(
					'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'             => '/page/%#%',
					'total'              => 5,
					'current'            => max( 1, get_query_var('page') ),
					'show_all'           => false,
					'end_size'           => 2,
					'mid_size'           => 2,
					'prev_next'          => true,
					'prev_text'          => __('« Previous'),
					'next_text'          => __('Next »'),
					'type'               => 'plain',
					'add_args'           => false,
					'add_fragment'       => '',
					'before_page_number' => '',
					'after_page_number'  => ''
				); 
				echo paginate_links( $args_pag ); ?>
			</div>
		</div> 

		<div class="col-xl-6 offset-xl-3 text-center">
			<?php get_search_form(); ?>
		</div>
	</div>
</section>


