<?php get_header(); ?>

<!-- The Loop -->
<div class="container">
	<div class="row">
<?php 
	$args = array('section_title' => 'Search Results');
	get_template_part("template-parts/loop", null, $args);
?>
<div class="col-4">
			<!-- Prepped for Sidebar -->
            <?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>