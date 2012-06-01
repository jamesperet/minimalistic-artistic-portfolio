<?php
/*
Single Post Template: Performance Post
*/

get_header(); ?>

<div id="item-list">
	<ul class="menu">
		<?php $temp_query = $wp_query; ?>
		<?php rewind_posts(); ?>		
		<?php $my_query = new WP_Query('category_name=performances'); ?>
		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>	
  			<li class="menu">
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
			</li>
		<?php endwhile; ?></ul></div>
		
			<div id="content" role="main">
				<?php $wp_query = $temp_query; ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content();?>
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
	</div>

<script type="text/javascript">
$(function() {
    $("li:contains('<?php the_title();?>')").css("font-style", "italic");
    $("li:contains('Performances')").css("font-style", "italic");
});
</script>
