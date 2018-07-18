<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Phoenix
 */

?>	
	<section id="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<?php dynamic_sidebar('sidebar-footer'); ?>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container-fluid" id="footer">
		<div class="row footer-links">
		  <div class="col-lg-6 col-md-12 col-sm-12 col-12">
		    <ul id="footer-menu">
		      <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>  
		    </ul>
		  </div>
		  <div class="col-lg-3 offset-lg-3 col-md-12 text-center col-sm-12 col-12" id="footer-social">
		  	<?php if ( have_rows( 'links_sociales', 'option' ) ) : ?>
		    <p class="social-footer-text">No te pierdas nada</p>
		    <?php while ( have_rows( 'links_sociales', 'option' ) ) : the_row(); ?>
		    <ul class="social-icons-footer">
		    	<a href="<?php the_sub_field( 'twitter_footer' ); ?>"><li class="icon-social-twitter"></li></a>
		    	<a href="<?php the_sub_field( 'facebook_footer' ); ?>"><li class="icon-social-facebook"></li></a>
		    	<a href="<?php the_sub_field( 'youtube_footer' ); ?>"><li class="icon-social-youtube"></li></a>
		    </ul>
		    <?php endwhile;
		    endif; ?>
		  </div>
		</div>
		<div class="row">
		  <?php if ( get_field( 'logotipo_footer', 'option' ) ) { ?>
		  <div class="col-md-12 text-center"><img class="img-fluid footer-logo" src="<?php the_field( 'logotipo_footer', 'option' ); ?>" alt="Isotipo de pekesims blanco"/>
		  <?php } ?>
		    <p class="footer-copy">© 2007 - <?php echo date('Y'); ?> | Todos los derechos reservados</p>
		    <p class="footer-copy">Diseño web y desarrollo <a href="http://agdesign.es"> AG Design</a> | Phoenix v. 0.8-alpha</p>
		  </div>
		</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
