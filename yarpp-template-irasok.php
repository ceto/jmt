<?php
/*
YARPP Template: JMT Kapcsolódó írások
Description: This template returns the related posts as an ordered list.
Author: Gabor Szabo (szabogabi@gmail.com)
*/
?>

<?php if (have_posts()) :?>
<section class="relatedblock">
	<header class="related__head">
		<h2 class="related__title"><?php _e('Related posts','jmt'); ?></h2>
	</header>
	<ul class="related__list">
		<?php while (have_posts()) : the_post(); ?>
			<li class="related__item">
				<a href="<?php the_permalink() ?>" rel="bookmark">
					<i class="ion ion-arrow-right-c"></i>
					<?php the_title(); ?>
				</a>
			<!-- (<?php the_score(); ?>)--></li>
		<?php endwhile; ?>
	</ul>
</section>
<?php endif; ?>
