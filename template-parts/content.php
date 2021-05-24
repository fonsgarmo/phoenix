<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phoenix
 */

?>
<div class="container-fluid post-title-container">
  <div class="row individual-intro">
    <div class="col-md-8 offset-md-2 col-10 offset-1">
      <h1 class="individual-title"><?php the_title(); ?></h1>
      <h4 class="individual-date"><span><?php the_date('d.m.Y') ?> | <strong><?php _e('Por', 'phoenix'); ?></strong> <?php the_author(); ?></span></h4>
    </div>
  </div>
</div>
<div class="container">
  <div class="row single-content">
    <div class="col-lg-9">
      <div class="row">
        <div class="col-lg-12">
          <div id="individual-content" class="post-content">
            <?php the_content(); ?>
          </div>
          <div class="single-categories">
            <span><?php _e('Publicado en: ', 'phoenix'); ?> <?php the_category(', '); ?></span>
          </div>



            <div class="row" id="author-info">
              <div class="col-lg-2 col-md-2 col-12 text-center d-flex align-items-center justify-content-center" id="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?></div>
                <div class="col-lg-10 col-md-10 col-12" id="author-details">
                  <p class="written-by-post">Escrito por </strong><?php the_author(); ?></p>
                  <p class="author-description"><?php the_author_description(); ?></p>
                  <?php $tw_user = get_the_author_meta('twitter');
                    $ig_url = get_the_author_meta('instagram'); ?>
                  <a href="https://www.twitter.com/<?php echo $tw_user; ?>"><p class="icon-social-twitter tw-author"></p></a>
                  <a href="<?php echo $ig_url;?>"><p class="icon-social-instagram ig-author"></p></a>
                </div><!-- #author-details -->
            </div><!-- #author-bio -->



          <div class="comments-container row">
            <div class="comments-title col-12">
              <h3>Comentarios</h3>
              <span>Cuéntanos que piensas</span>
            </div>       
            <div class="single-comments col-12">
              <?php if ( comments_open() || get_comments_number() ) :
              comments_template(); 
            endif; ?>
            </div>
          </div>
      </div>
    </div>
  </div>
    <div class="col-lg-3 d-none d-lg-block phoenix-sidebar" id="single-sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>        
