<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

<<<<<<< HEAD
			<h1><?php the_title(); ?></h1>
=======
			
>>>>>>> 4f56162f325834984e19aec854956e5e56e62651

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

<<<<<<< HEAD
				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>
=======
				<?php // comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php // edit_post_link(); ?>
>>>>>>> 4f56162f325834984e19aec854956e5e56e62651

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<<<<<<< HEAD
<?php get_sidebar(); ?>
=======
<?php // get_sidebar(); ?>
>>>>>>> 4f56162f325834984e19aec854956e5e56e62651

<?php get_footer(); ?>
