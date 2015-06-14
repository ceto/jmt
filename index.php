<?php get_template_part('templates/page', 'header'); ?>

<div class="page__conentwrapper">
	<div class="wrapper wrapper--fullwidth">
		<div class="page__contentinnerwrapper">
			<div class="page__content">
				<?php if (!have_posts()) : ?>
					<div class="alert alert-warning">
						<?php _e('Sorry, no results were found.', 'sage'); ?>
					</div>
					<?php get_search_form(); ?>
				<?php endif; ?>

				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>
			</div>
			<aside class="page__sidebar sidebar" role="complementary">
			  <?php include Wrapper\sidebar_path(); ?>
			</aside><!-- /.sidebar -->
		</div>
	</div>
</div>