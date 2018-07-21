<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Phoenix
 */

get_header();
?>

<div id="notfound-page" class="container">
	<div class="row">
		<div class="col-xl-auto">
			<h1 class="archive-title"><span>404: no encontrado</span></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12 text-center">
			<img src="https://c2.staticflickr.com/2/1756/42897016091_919afb8b2f_o.png" alt="Error 404" class="img-fluid">
			<h3>Shoo flee! No hemos podido encontrar la página a la que intentabas acceder. Utiliza el menú superior, <a href="<?php echo get_site_url(); ?>">vuelve al inicio</a> o usa el buscador para encontrar lo que buscas.</h3>
		</div>	
	</div>
	<div class="row">
		<div class="col-xl-4 offset-xl-4 col-lg-4 offset-lg-4 text-center">
			<?php get_search_form(); ?>
		</div>	
	</div>
</div>

<?php
get_footer();
