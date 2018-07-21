<?php
/*Template Name: Home*/

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phoenix
 */

get_header();
?>

<section class="d-none d-lg-block" id="featured">
	<div class="container">
	<?php if ( have_rows( 'fila_1' ) ) : ?>
	<?php while ( have_rows( 'fila_1' ) ) : the_row(); ?>
	<div class="row featured-row">
	  <div class="col-md-7 text-center">
	  	<?php if ( get_sub_field( 'imagen_1' ) ) { ?>
	    <div class="feat-article"><img class="img-fluid feat-img" src="<?php the_sub_field( 'imagen_1' ); ?>" alt="<?php the_sub_field( 'titulo_1' ); ?>"/>
	    <?php } ?>
	      <div class="hover-featured">
	      	<?php $enlace_1 = get_sub_field( 'enlace_1' ); ?>
	      	<?php if ( $enlace_1 ) { ?>
	        <div class="featured-text"><a href="<?php echo $enlace_1; ?>">>
	            <h2><?php the_sub_field( 'titulo_1' ); ?></h2></a>
	        <?php } ?>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="col-md-5 text-center">
	  	<?php if ( get_sub_field( 'imagen_2' ) ) { ?>
	    <div class="feat-article"><img class="img-fluid feat-img" src="<?php the_sub_field( 'imagen_2' ); ?>" alt="<?php the_sub_field( 'titulo_2' ); ?>"/>
	    <?php } ?>
	    	<div class="hover-featured">
	      <?php $enlace_2 = get_sub_field( 'enlace_2' ); ?>
	      	<?php if ( $enlace_2 ) { ?>
	        <div class="featured-text"><a href="<?php echo $enlace_2; ?>">
	            <h2><?php the_sub_field( 'titulo_2' ); ?></h2></a>
	        <?php } ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'fila_2' ) ) : ?>
	<?php while ( have_rows( 'fila_2' ) ) : the_row(); ?>
	<div class="row featured-row">
	  <div class="col-md-5 text-center">
	  	<?php if ( get_sub_field( 'imagen_3' ) ) { ?>
	    <div class="feat-article"><img class="img-fluid feat-img" src="<?php the_sub_field( 'imagen_3' ); ?>" alt="<?php the_sub_field( 'titulo_3' ); ?>"/>
	    <?php } ?>
	      <div class="hover-featured">
	        <?php $enlace_3 = get_sub_field( 'enlace_3' ); ?>
	      	<?php if ( $enlace_3 ) { ?>
	        <div class="featured-text"><a href="<?php echo $enlace_3; ?>">>
	            <h2><?php the_sub_field( 'titulo_3' ); ?></h2></a>
	        <?php } ?>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="col-md-7 text-center">
	  	<?php if ( get_sub_field( 'imagen_4' ) ) { ?>
	    <div class="feat-article"><img class="img-fluid feat-img" src="<?php the_sub_field( 'imagen_4' ); ?>" alt="<?php the_sub_field( 'titulo_4' ); ?>"/>
	    <?php } ?>
	      <div class="hover-featured">
	        <?php $enlace_4 = get_sub_field( 'enlace_4' ); ?>
	      	<?php if ( $enlace_4 ) { ?>
	        <div class="featured-text"><a href="<?php echo $enlace_4; ?>">>
	            <h2><?php the_sub_field( 'titulo_4' ); ?></h2></a>
	        <?php } ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
	</div>
</section>
<?php if ( have_rows( 'opciones_banda', 'option' ) ) : ?>
<div class="container-fluid">
	<?php while ( have_rows( 'opciones_banda', 'option' ) ) : the_row(); ?>
	<div class="row home-strip">
		<div class="col-8 offset-2">
			<h3 class="text-center"><?php the_sub_field( 'titulo' ) ?></h3>
			<a href="<?php the_sub_field( 'enlace' ); ?>"><h4 class="text-center">Saber más >></h4></a>
		</div>
	</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>


		<?php

			get_template_part( 'template-parts/content', 'home' ); 

get_footer();
