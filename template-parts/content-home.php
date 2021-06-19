<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phoenix
 */

?>
<section id="home-widget">
	<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<?php dynamic_sidebar('home-adsense'); ?>
				</div>
			</div>
		</div>
</section>
<?php 
	$page = ( get_query_var( 'page' ) ) ? absint( get_query_var( 'page' ) ) : 1;
	$args = array(
		'posts_per_page' => 3,
		'category_name' => 'destacados',
		'post_type' => 'post',
		'page' => 1,
	)
?>
<?php $the_query = get_posts( $args ); ?>
<?php if ( have_posts() ){ ?>
<section id="destacados-home">
	<div class="container-fluid destacados-container">
		<div class="row">
			<div class="col-lg-12 offset-lg-0 col-xl-8 offset-xl-2">
				<h3 class="title-home-destacados"><span>Destacados</span></h3>
			</div>	
		</div>
		<div class="row home-destacados-grid">

		<?php 
			$columns_num = 3; // Numero de columnas
				$i = 0; //Contador para divs .row
				echo '<div class="col-lg-12 offset-lg-0 col-xl-8 offset-xl-2">';
				echo '<div class="row home-blog">';

				    /* Loop */
				    foreach ( $the_query as $post){

				        echo '<div id="post-' , the_ID(), '" ' , post_class('single-article col-md-' . 12 / $columns_num . ''), '>';
				        //echo '<div id="post-' , the_ID(), '" class="single-article col-md-' . 12 / $columns_num . '">';
				            get_template_part( 'template-parts/content', 'archive' );
				        echo '</div>';

				        if($i % $columns_num == $columns_num - 1 ) {  
				            echo '</div> <div class="row home-blog">';
				        }

				        $i++;

				    }
				echo '</div>';    	
				echo '</div>';
		 ?>
		 <?php wp_reset_postdata(); ?> 
		</div>
	</div>

</section>
<?php }
else {
	
}; ?>
<!-- Query noticias-->
<?php 
	$args = array(
		'posts_per_page' => 9,
		'category_name' => 'noticias',
		'post_type' => 'post',
		'paged' => $page,
	)
		?>
<?php $the_query = get_posts( $args ); ?>
<section id="news-cover">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 offset-lg-0 col-xl-8 offset-xl-2">
				<h3 class="title-home-noticias">Últimas noticias</h3>
				<span class="more-news"><a href="../category/noticias/">Ver todas ></a></span>
			</div>	
		</div>
		<div class="row home-news-grid">

		<?php 
			$columns_num = 3; // Numero de columnas
				$i = 0; //Contador para divs .row
				echo '<div class="col-lg-12 offset-lg-0 col-xl-8 offset-xl-2">';
				echo '<div class="row home-blog">';

				    /* Loop */
				    foreach ( $the_query as $post){

				        echo '<div id="post-' , the_ID(), '" ' , post_class('single-article col-md-' . 12 / $columns_num . ''), '>';
				        //echo '<div id="post-' , the_ID(), '" class="single-article col-md-' . 12 / $columns_num . '">';
				            get_template_part( 'template-parts/content', 'archive' );
				        echo '</div>';

				        if($i % $columns_num == $columns_num - 1 ) {  
				            echo '</div> <div class="row home-blog">';
				        }

				        $i++;

				    }
				echo '</div>';    	
				echo '</div>';
		 ?>
		 <?php wp_reset_postdata(); ?> 
		</div>

<!-- Query artículos -->
		 <?php 
	$args = array(
		'posts_per_page' => 3,
		'category_name' => 'tutoriales',
		'post_type' => 'post',
		'paged' => $page,
	)
		 ?>
<?php $the_query = get_posts( $args ); ?>
		<div class="row articulos-home">
			<div class="col-lg-12 offset-lg-0 col-xl-8 offset-xl-2">
				<h3 class="title-home-tutoriales">Artículos y tutoriales</h3>
				<span class="more-tutorials"><a href="/category/tutoriales/">Ver más ></a></span>
			</div>
		
		<?php 
			$columns_num = 3; // Numero de columnas
				$i = 0; //Contador para divs .row
				echo '<div class="col-lg-12 offset-lg-0 col-xl-8 offset-xl-2">';
				echo '<div class="row articulos-home-in">';

				    /* Loop */
				    foreach ( $the_query as $post){

				        echo '<div id="post-' , the_ID(), '" ' , post_class('single-article col-md-' . 12 / $columns_num . ''), '>';
				        //echo '<div id="post-' , the_ID(), '" class="single-article col-md-' . 12 / $columns_num . '">';
				            get_template_part( 'template-parts/content', 'archive' );
				        echo '</div>';

				        if($i % $columns_num == $columns_num - 1 ) {  
				            echo '</div> <div class="row home-blog">';
				        }

				        $i++;

				    }
				echo '</div>';    	
				echo '</div>';
		 ?>
		 <?php wp_reset_postdata(); ?> 
		 </div>

<!-- Query descargas -->
		 <?php 
		 	$args = array(
				'posts_per_page' => 3,
				'category_name' => 'descargas',
				'post_type' => 'post',
				'paged' => $page,
			)
		 ?>
		<?php $the_query = get_posts( $args ); ?>
		 <div class="row descargas-home">
			<div class="col-lg-12 offset-lg-0 col-xl-8 offset-xl-2">
				<h3 class="title-home-descargas">Descargas</h3>
				<span class="more-descargas"><a href="/category/descargas/">Ver más ></a></span>
			</div>
		
		<?php 
			$columns_num = 3; // Numero de columnas
				$i = 0; //Contador para divs .row
				echo '<div class="col-lg-12 offset-lg-0 col-xl-8 offset-xl-2">';
				echo '<div class="row descargas-home-in">';

				    /* Loop */
				    foreach ( $the_query as $post){

				        echo '<div id="post-' , the_ID(), '" ' , post_class('single-article col-md-' . 12 / $columns_num . ''), '>';
				        //echo '<div id="post-' , the_ID(), '" class="single-article col-md-' . 12 / $columns_num . '">';
				            get_template_part( 'template-parts/content', 'archive' );
				        echo '</div>';

				        if($i % $columns_num == $columns_num - 1 ) {  
				            echo '</div> <div class="row home-blog">';
				        }

				        $i++;

				    }
				echo '</div>';    	
				echo '</div>';
		 ?>
		 <?php wp_reset_postdata(); ?> 

		 </div>

<!-- Query Sims de antaño -->
		 <?php 
		 	$args = array(
				'posts_per_page' => 3,
				'category_name' => 'sims-antano',
				'post_type' => 'post',
				'paged' => $page,
			)
		 ?>
		<?php $the_query = get_posts( $args ); ?>
		 <div class="row sda-home">
			<div class="col-lg-12 offset-lg-0 col-xl-8 offset-xl-2">
				<h3 class="title-home-sda">Sims de Antaño</h3>
				<span class="more-sda"><a href="/category/descargas/ls4-descargas/sims-antano/">Ver más ></a></span>
			</div>
		
		<?php 
			$columns_num = 3; // Numero de columnas
				$i = 0; //Contador para divs .row
				echo '<div class="col-lg-12 offset-lg-0 col-xl-8 offset-xl-2">';
				echo '<div class="row sda-home-in">';

				    /* Loop */
				    foreach ( $the_query as $post){

				        echo '<div id="post-' , the_ID(), '" ' , post_class('single-article col-md-' . 12 / $columns_num . ''), '>';
				        //echo '<div id="post-' , the_ID(), '" class="single-article col-md-' . 12 / $columns_num . '">';
				            get_template_part( 'template-parts/content', 'archive' );
				        echo '</div>';

				        if($i % $columns_num == $columns_num - 1 ) {  
				            echo '</div> <div class="row home-blog">';
				        }

				        $i++;

				    }
				echo '</div>';    	
				echo '</div>';
		 ?>
		 <?php wp_reset_postdata(); ?> 
		 </div>

	</div>
</section>


