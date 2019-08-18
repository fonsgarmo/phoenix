<?php
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

	<section id="individual-page">
		<div class="container-fluid">
			<div class="col-12">
				<h3 class="page-text-title"><span><?php the_title(); ?></span></h3>
			</div>
			<div class="col-12 page-image-title" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
			</div>
		</div>
		<div class="container page-container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>


		</div><!-- Container end -->
	</div>

<?php
get_footer();
