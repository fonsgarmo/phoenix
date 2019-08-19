<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phoenix
 */

?>
<div class="row individual-intro">
  <div class="col-xl-9">
    <h4 class="individual-date"><span><?php the_date('d.m.Y') ?> | <strong><?php _e('Por', 'phoenix'); ?></strong> <?php the_author(); ?></span></h4>
  </div>
</div>
<div class="row single-content">
  <div class="col-lg-9">
    <div class="row">
      <div class="col-lg-12">
        <div id="individual-content" class="post-content">
          <?php the_content(); ?>
        </div>
        <div class="single-categories">
          <h4><span><?php _e('Publicado en: ', 'phoenix'); ?> <?php the_category(', '); ?></span></h4>
        </div>
      <div class="single-comments">
        <?php if ( comments_open() || get_comments_number() ) :
        comments_template(); 
      endif; ?>
      </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 d-none d-lg-block phoenix-sidebar" id="single-sidebar">
    <?php get_sidebar(); ?>
  </div>
</div>
        
