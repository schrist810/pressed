<?php get_header(); ?>
		<section>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hero.jpg"/>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section>
				<?php the_content(); ?>
				<!-- <p>Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
				<p>We also make pancakes on the side.</p> -->
					
			</section>
		<?php endwhile; else :?>
			<p><?php _e('sorry, no content'); ?></p>
		<?php endif; ?>
		</section>
	<?php get_footer(); ?>