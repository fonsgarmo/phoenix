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

          <!--Post navigation-->
          <div class="row single-navigation text-center">
            <div class="col-md-6 navigation-next-post">
            <?php if (get_next_post() !== ''):  
                $post_title = get_next_post()->post_title;
                $post_id = get_next_post()->ID;
              ?>
              <a href="<?php echo get_permalink(get_next_post()) ?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($post_id); ?>"></a>
              <?php
                if (strlen($post_title) > 65) 
                  $post_title = substr($post_title, 0, 65).'...';
                next_post_link('%link', '<i class="icon-arrow-left"></i> '.$post_title);
              endif;
              ?>
            </div>
            <div class="col-md-6 navigation-prev-post">
            <?php if (get_previous_post() !== ''): 
                $post_title = get_previous_post()->post_title;
              ?>
              <a href="<?php echo get_permalink(get_previous_post()) ?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_previous_post()); ?>"></a>
              <?php
                if (strlen($post_title) > 65)
                  $post_title = substr($post_title, 0, 65).'...';
                previous_post_link('%link', $post_title.' <i class="icon-arrow-right"></i>');
              endif;
              ?>
            </div>
          </div>
          <!--End post navigation-->

          <div class="row" id="author-info">
            <div class="col-lg-2 col-md-2 col-12 text-center d-flex align-items-center justify-content-center" id="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?></div>
              <div class="col-lg-10 col-md-10 col-12" id="author-details">
                <p class="written-by-post">Escrito por </strong><?php the_author(); ?></p>
                <p class="author-description"><?php the_author_description(); ?></p>
                <?php $tw_user = get_the_author_meta('twitter');
                  $ig_url = get_the_author_meta('instagram');
                  $twitch_url = get_the_author_meta('myspace');?> 
                <a href="https://www.twitter.com/<?php echo $tw_user; ?>"><p class="icon-social-twitter tw-author"></p></a>
                <?php //Author has Instagram?
                 if(empty($ig_url)): ?>
                <?php else:
                  echo '<a href="', $ig_url,'"><p class="icon-social-instagram ig-author"></p></a>'; 
                endif;
                ?>
                <?php //Author has Twitch?
                 if(empty($twitch_url)): ?>
                <?php else:
                  echo '<a href="',$twitch_url,'"><img class="img-fluid twitch-icon" src="https://cdn.pekesims.com/static/twitch-icon.svg" alt="Imagotipo de Twitch"/></a>'; 
                endif;
                ?>
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
  </div><!--.single-content-->
</div><!--.container-->        
