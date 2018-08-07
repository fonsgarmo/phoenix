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

<section class="d-none d-lg-block" id="featured" style="margin-top: 0">
	<div class="container">
		<div class="col-md-12 no-gutters text-center">
			<img class="featured-pic" src="https://c2.staticflickr.com/2/1780/30043002258_2a2c691104_b.jpg" alt="TEST">
			<img class="featured-pic" src="https://c2.staticflickr.com/2/1780/30043002258_2a2c691104_b.jpg" alt="TEST">
			<img class="featured-pic" src="https://c2.staticflickr.com/2/1780/30043002258_2a2c691104_b.jpg" alt="TEST">
		</div>
	</div>
</section>
<?php if ( have_rows( 'opciones_banda', 'option' ) ) : ?>
<div class="container-fluid">
	<?php while ( have_rows( 'opciones_banda', 'option' ) ) : the_row(); ?>
	<div class="row home-strip">
		<div class="col-8 offset-2">
			<h3 class="text-center"><?php the_sub_field( 'titulo' ) ?></h3>
			<?php $enlace = get_sub_field( 'enlace' ); ?>
			<?php if ( $enlace ) { ?>
			<a href="<?php echo $enlace; ?>"><h4 class="text-center">Saber más <span class="icon-arrow-right"></span></h4></a>
			<?php } ?>
		</div>
	</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>


		<?php

			get_template_part( 'template-parts/content', 'home' ); 

get_footer();
