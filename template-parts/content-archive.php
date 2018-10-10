<?php
/**
 * Template part for displaying posts
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
        <h4 class="cover-date"><?php echo get_the_date('d.m.Y') ?> | <strong>By </strong><?php the_author(); ?></h4>
    	<a href="<?php the_permalink(); ?>">
        	<h3 class="cover-title"><?php the_title(); ?><span class="icon-arrow-right" style="margin-left: 10px"></span></h3>
        </a>
    </div>
