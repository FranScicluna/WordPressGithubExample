<?php get_header(); ?>

<!-- The Loop -->

<h1>Index</h1>

<div class="container">
	<div class="row">
		<div class="col-8">
			<?php if(have_posts()) : while (have_posts()) : the_post() ?> <!-- have_posts() checks if there is posts to show / : is the sameas {} -->
		
			<h2>
				<?php the_title(); ?>
			</h2>

			<small>
				<?php the_date(); ?> by <?php the_author_posts_link();?>
			</small>

			<?php endwhile; ?>
			<? endif; ?>
		</div>	
		<div class="col-4">
			<!-- Prepped for Sidebar -->
		</div>
	</div>
</div>
<?php get_footer(); ?>