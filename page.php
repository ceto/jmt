<?php use Roots\Sage\Wrapper; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="page__conentwrapper">
		<div class="wrapper wrapper--wide">
			<div class="page__contentinnerwrapper">
				<div class="page__content">
					<?php the_content(); ?>
					<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
				</div>
				<aside class="page__sidebar sidebar" role="complementary">
				  <?php include Wrapper\sidebar_path(); ?>
				</aside><!-- /.sidebar -->
			</div>
		</div>
  </div>

<?php endwhile; ?>
