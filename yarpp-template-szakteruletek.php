<?php
/*
YARPP Template: JMT Kapcsolódó szakterületek
Description: This template returns the related posts as an ordered list.
Author: Gabor Szabo (szabogabi@gmail.com)
*/
?>

<?php if (have_posts()) :?>
<section class="relatedblock">
	<header class="related__head">
		<h2 class="related__title"><?php _e('Kapcsolódó szakterületek','jmt'); ?></h2>
	</header>
	<ol class="related__list">
		<?php while (have_posts()) : the_post(); ?>
		<li class="related__item"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><!-- (<?php the_score(); ?>)--></li>
		<?php endwhile; ?>
	</ol>
</section>
<?php endif; ?>
