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

<div class="container-fluid archive-title-container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h1 class="archive-title"><span><?php _e('404: no encontrado', 'phoenix'); ?></span></h1>
		</div>
	</div>
</div>
<div id="notfound-page" class="container">
	<div class="row">
		<div class="col-xl-12 text-center">
			<h3>Nuestro servidor ha buscado desde Sunset Valley hasta Las Rarezas, pero no ha conseguido encontrar la página que buscabas. Revisa la URL, vuelve al <a style="text-decoration: underline;" href="<?php echo get_site_url(); ?>">inicio</a> o usa el buscador.</h3>
			<h3 style="color:#E5007D;">404: not found</h3>
			<img src="https://cdn.pekesims.com/static/404_pks2021.png" alt="Error 404" class="img-fluid" style="height: 500px; width: auto;">
		</div>	
	</div>
</div>

<?php
get_footer();
