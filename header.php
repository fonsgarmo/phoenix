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
    <header>
      <div class="container-fluid d-none d-md-block" id="header">
        <div class="row" id="header-row">
          	<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			?>
        	<div class="col-md-1 col-lg-1 col-xl-1 col-1" id="logo-wrapper"><a href="<?php echo get_site_url(); ?>"><img class="img-fluid header-logo" src="<?php echo esc_url($logo[0]) ?>" alt="Isotipo de pekesims"/></a></div>
        	<div class="col-md-10 col-xl-11" id="menu-wrapper">
	            <?php
					wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'main-menu',
					'menu_class'	=> 'link-menu'
					) );
				?>
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
        </div>
      </div>

    </header>