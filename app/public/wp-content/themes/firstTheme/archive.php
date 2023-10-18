<?php get_header(); ?>

<!-- The Loop -->

<h1>Archive</h1>

<div class="container">
	<div class="row">
		<div class="col-8">
			<?php if(have_posts()) : while (have_posts()) : the_post() ?> <!-- have_posts() checks if there is posts to show / : is the sameas {} -->
		
			<h2>
				<a href="<?php the_permalink() ?>"> <!-- Perma link is a link that wont change -->
					<?php the_title(); ?>
				</a>
				
			</h2>

			<small>
				<?php the_date(); ?> by <?php the_author_posts_link();?>
			</small>

			<p>
				<?php //the_content(); 
				the_excerpt(); 
				?>
				
			</p>

			<?php 
				endwhile; 
				the_posts_pagination(array(
					'min_size' => 1, //mid_size decides how many pages are either side on the selected page in the pagination system
					'prev_text' => "Newer",
					'next_text' => "Older"
				));
			?>



			<?php 
				else : echo "<p> Sorry, no posts found. </p>";
				endif; 
			?>
		</div>	
		<div class="col-4">
			<!-- Prepped for Sidebar -->
		</div>
	</div>
</div>
<?php get_footer(); ?>