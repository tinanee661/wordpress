
<section class="posts">
	<h3>Lajme te rastit</h3>
	<div class="random-posts">
		<ul>

		<?php
			$args = array(
				'posts_per_page' => 6,
				'post_type' => 'post',
				'post_status' => 'publish',
				'orderby' => 'rand',
				'order' => 'DESC',
			);

			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-link">
					<strong><?php the_title(); ?></strong>
				</a>
			</li>

		<?php endwhile; else : ?>
			<!-- IF NOTHING FOUND CONTENT HERE -->
		<?php endif; ?>
		<?php wp_reset_query(); ?>
		</ul>
	</div>

	<?php 
		if ( function_exists( 'register_sidebar' ) ) { 
			dynamic_sidebar('sidebar-1'); 
		}
	?>
	
</section>