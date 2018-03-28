<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>

	<div class="definition">
		<h2 class="definition__title">La naturopathie</h2>
		<p class="definition__text">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>
	<article>
		<div class="row">
			<?php // Display blog posts on any page @ https://m0n.co/l
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); $wp_query->query('posts_per_page=3' . '&paged='.$paged);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				
				
							<div class="article">
								<h2>
									<a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a>
								</h2>
								<?php the_excerpt(); ?>
							</div>
				
			<?php endwhile; ?>
		</div>

	</article>

<?php get_footer(); ?>