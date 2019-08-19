<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Phoenix
 */

get_header();
?>

	<section id="individual-article <?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container-fluid feat-image-wrapper">
			<div class="col-12">
				<h3 class="page-text-title"><span><?php the_title(); ?></span></h3>
			</div>
			<div class="col-12 page-image-title" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
			</div>
		</div>
	      <div class="container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			

		endwhile; // End of the loop.
		?>

		</div><!-- Container end -->
	</section>

<?php
get_footer();
