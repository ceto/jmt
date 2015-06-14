<?php use Roots\Sage\Wrapper; ?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="page__conentwrapper">
	<div class="wrapper wrapper--fullwidth">
		<div class="page__contentinnerwrapper">
			<div class="page__content">
				<?php get_template_part('templates/content-single', get_post_type()); ?>
			</div>
			<aside class="page__sidebar sidebar" role="complementary">
			  <?php include Wrapper\sidebar_path(); ?>
			</aside><!-- /.sidebar -->
		</div>
	</div>
</div>