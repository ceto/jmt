<?php
/**
 * Template Name: Munkatársak Sablon
 */
?>

<?php use Roots\Sage\Wrapper; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="page__conentwrapper">
		<div class="wrapper wrapper--fullwidth">
			<div class="page__contentinnerwrapper">
				<div class="page__content">
					<?php if ( get_post_meta( get_the_ID(), 'members', true ) ) {
						$members = get_post_meta( get_the_ID(), 'members', true );
						foreach ( (array) $members as $key => $entry ) { ?>
							<section class="member">
								<header class="member__head">
									<h2 class="member__name"><?= $entry['name'] ?></h2>
									<p class="member__title"><?= $entry['title'] ?></p>
								</header>
								<figure class="member__photo">
									<img src="http://placehold.it/600x800" alt="">
								</figure>
								<div class="member__descr">
									<?= wpautop( $entry['descr'] ) ?>
								</div>
							</section>
					<?php	} } ?>
				</div>
				<aside class="page__sidebar sidebar" role="complementary">
				  <?php include Wrapper\sidebar_path(); ?>
				</aside><!-- /.sidebar -->
			</div>
		</div>
  </div>

<?php endwhile; ?>
