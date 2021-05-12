<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phoenix
 */

?>

<div class="container-fluid post-title-container">
  <div class="row individual-intro">
    <div class="col-md-8 offset-md-2 col-10 offset-1">
      <h1 class="individual-title"><span><?php the_title(); ?></span></h1>
      <h4 class="individual-date"><span><?php the_date('d.m.Y') ?> | <strong><?php _e('Por', 'phoenix'); ?></strong> <?php the_author(); ?></span></h4>
    </div>
  </div>
</div>
<div class="container">
<div class="row">
  <div class="col-lg-9">
    <div class="row">
      <div class="col-lg-12"><!--<img class="img-fluid individual-cover" src="images/placeholder-cover.jpg"/>-->
        <div id="individual-content">
          <?php the_content(); ?>
        </div>
        
        <div class="single-comments">
          <?php if ( comments_open() || get_comments_number() ) :?>
            <div class="comments-title">
              <h3>Comentarios</h3>
              <span>Cuéntanos que piensas</span>
            </div>
           <?php 
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
</div>
