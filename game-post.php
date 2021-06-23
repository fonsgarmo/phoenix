<?php
/**
 * Template to show game information on top of single posts
 * Template Name: Todo lo que debes saber
 * Template Post Type: post 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Phoenix
 */

get_header();
?>

	<section id="individual-article <?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="container-fluid post-title-container">
		  <div class="row individual-intro game-intro">
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

		          	<div class="row game-info">
		          		<div class="col-xl-4 col-md-4 game-info-cover d-flex align-items-center justify-content-center">
		          			<a class="wp-block-image" href="<?php echo get_post_meta($post->ID, 'Portada del pack', true); ?>"><img class="img-fluid" src="<?php echo get_post_meta($post->ID, 'Portada del pack', true); ?>"></a>
		          		</div>
		          		<div class="col-xl-8 col-md-8 game-info-data">
		          			<h2><?php echo get_post_meta($post->ID, 'Nombre del pack', true); ?></h2>
		          			<h3><?php echo get_post_meta($post->ID, 'Tipo de pack', true); ?></h3>
		          			<p><?php echo get_post_meta($post->ID, 'Fecha', true); ?> | <b><?php echo get_post_meta($post->ID, 'Precio', true); ?></b></p>
		          			<div class="game-buttons">
			          			<div class="game-buy-bt"><a href="<?php echo get_post_meta($post->ID, 'URL Origin', true); ?>">Comprar en Origin</a></div>
			          			<div class="game-buy-bt"><a href="<?php echo get_post_meta($post->ID, 'URL Steam', true); ?>">Comprar en Steam</a></div>
			          			<div class="game-buy-bt"><a href="<?php echo get_post_meta($post->ID, 'URL MS', true); ?>">Comprar en Microsoft Store</a></div>
			          			<div class="game-buy-bt"><a href="<?php echo get_post_meta($post->ID, 'URL PS', true); ?>">Comprar en PS Store</a></div>
		          			</div>
		          		</div>
		          	</div>
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
		                    echo '<a class="twitch-author" href="', $twitch_url,'"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M2.149 0l-1.612 4.119v16.836h5.731v3.045h3.224l3.045-3.045h4.657l6.269-6.269v-14.686h-21.314zm19.164 13.612l-3.582 3.582h-5.731l-3.045 3.045v-3.045h-4.836v-15.045h17.194v11.463zm-3.582-7.343v6.262h-2.149v-6.262h2.149zm-5.731 0v6.262h-2.149v-6.262h2.149z" fill-rule="evenodd" clip-rule="evenodd"/></svg></span></a>'; 
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
		  </div>
		</div><!--.container principal-->
	</section>

<?php
get_footer();
