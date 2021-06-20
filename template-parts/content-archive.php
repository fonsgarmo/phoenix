<?php
/**
 * Template part for displaying grid of post. Can be used on homepage or archive pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phoenix
 */

?>
    <div class="img-fluid cover-pic">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-pic'); ?></a>
    </div>
    <div class="grid-title-module">
        <h4 class="cover-date"><?php echo get_the_date('d.m.Y') ?> | <strong><?php _e('Por', 'phoenix'); ?> </strong><?php the_author(); ?></h4>
    	<a href="<?php the_permalink(); ?>">
        	<h3 class="cover-title"><?php 
        	
        	$thetitle = get_the_title();
			$getlength = strlen($thetitle);
			$thelength = 65;
			echo substr($thetitle, 0, $thelength);
			if ($getlength > $thelength) echo "...";

        	?><span class="icon-arrow-right" style="margin-left: 10px"></span></h3>
        </a>
    </div>
