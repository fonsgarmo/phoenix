<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Phoenix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body>

  <?php if ( get_field( 'pre-header_activo' ) == 1 ) { ?> 
     <div class="container-fluid" id="pre-header">
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 offset-xl-9 offset-lg-8 offset-md-6 offset-sm-6">
        <a href="<?php the_field( 'pre-header-enlace' ); ?>"> <p><?php _e('Go to pekesims in English', 'phoenix'); ?><i class="icon-arrow-right"></i></p></a>
      </div>
    </div>
    <?php } else { 
      
    } ?>
   
    <header>
      <div class="container-fluid d-none d-md-block" id="header">
        <div class="row" id="header-row">
          	<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			?>
        	<div class="col-12" id="logo-wrapper"><a href="<?php echo get_site_url(); ?>"><img class="img-fluid header-logo" src="<?php echo esc_url($logo[0]) ?>" alt="<?php _e('Isotipo de pekesims', 'phoenix'); ?>"/></a></div>
          </div>
          <div class="row" id="menu-header-row">
        	<div class="col-12" id="menu-wrapper">
	            <?php
					wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'main-menu'
					) );
				?>
          </div>
          </div>
          <div class="col-md-1 d-none">
            <p class="search-icon text-center"><a href="#"><i class="icon-magnifier"></i></a></p>
          </div>
        </div>
        <div class="row" id="header-search-row">
          <div class="col-md-8 text-center">
            <h3 class="search-instructions"><?php _e('Introduce un término de búsqueda y pulsa enter', 'phoenix');  ?></h3>
          </div>
          <div class="col-md-3">
            <?php get_search_form(); ?>
          </div>
          <div class="col-md-1">
            <p class="search-close text-left mx-auto"><a href="#"><i class="icon-close"></i></a></p>
          </div>
        </div>
      </div>

      <div class="d-md-none container-fluid" id="mobile-header">
        <div class="row" id="header-row">
          <div class="col-md-1 offset-md-1 col-4 col-sm-5" id="logo-wrapper"><a href="<?php echo get_site_url(); ?>"><img class="img-fluid header-logo" src="<?php echo esc_url($logo[0]) ?>" alt="Isotipo de pekesims"/></a></div>
          <div class="col-7 col-sm-6 d-block d-md-none hamburger-menu"><a class="toggler-menu"><span></span></a></div>
        </div>
        <div class="row mobile-menu">
          <div class="col-md-8 col-12 offset-md-0" id="menu-wrapper">
            <ul id="main-menu">
        		<?php
					wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'main-menu',
					'menu_class'	=> 'link-menu'
					) );
				?>
            </ul>
          </div>
          <div class="col-12">
            <?php 
                  add_filter( 'get_search_form', 'mobile_search_form' );
                  get_search_form();
                  remove_filter( 'get_search_form', 'mobile_search_form' ); 
            ?>
          </div>
        </div>
      </div>

    </header>