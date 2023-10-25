<?php get_header(); ?>

<!-- The Loop -->
<div class="container">
	<div class="row">
<?php 
	$args = array('section_title' => 'Archive');
	get_template_part("template-parts/loop", null, $args);
?>
<div class="col-4">
			<!-- Prepped for Sidebar -->
			<h4>More from this Author</h4>
		</div>
	</div>
</div>
<?php get_footer(); ?>