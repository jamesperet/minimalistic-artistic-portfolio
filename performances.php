<?php
/**
 * Template Name: Performances
 * The template for displaying Performance pages.
 *
 * @package WordPress
 * @subpackage minimalistic-artistic-portfolio
 */
get_header(); ?>
	<div id="content-page">
		<?php $performances_query = new WP_Query('category_name=performance'); while ($performances_query->have_posts()) : $performances_query->the_post(); ?>
    	<!— Styling for your featured post —>
		<?php endwhile; ?>
    	<!— Put whatever you want between the featured post and the normal post listing —>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		<!— Your normal loop post styling goes here —>
    		<?php the_content(); ?>
			<?php endwhile; else: ?>
    		<p>Some error message or similar.</p>
		<?php endif; ?>
	</div>