<?php use Roots\Sage\Wrapper; ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/post', 'header'); ?>

<div class="page__conentwrapper">
	<div class="wrapper wrapper--fullwidth">
		<div class="page__contentinnerwrapper">
			<div class="page__content">

					<article <?php post_class('fullarticle'); ?>>
						<?php the_content(); ?>
						<footer class="page__content__footer">
							<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
							<?php get_template_part('templates/share', 'this'); ?>
							<?php get_template_part('templates/related', 'pages'); ?>
							<?php get_template_part('templates/related', 'posts'); ?>					
						</footer>
					</article>


			</div>
			<aside class="page__sidebar sidebar" role="complementary">
			  <?php include Wrapper\sidebar_path(); ?>
			</aside><!-- /.sidebar -->
		</div>
	</div>
</div>

<?php endwhile; ?>