<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phoenix
 */

?>

<div class="row individual-intro">
  <div class="col-xl-auto">
    <h1 class="individual-title"><?php the_title(); ?></h1>
  </div>
</div>
<div class="row">
  <div class="col-lg-9">
    <div class="row">
      <div class="col-lg-12"><!--<img class="img-fluid individual-cover" src="images/placeholder-cover.jpg"/>-->
        <div id="individual-content">
          <?php the_content(); ?>
        </div>
        <div class="single-comments">
          <?php if ( comments_open() || get_comments_number() ) :
          comments_template(); 
          endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 d-none d-lg-block phoenix-sidebar">
    <?php get_sidebar(); ?>
  </div>
</div>
