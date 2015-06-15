<article <?php post_class('entry'); ?>>
  <header class="entry__head">
    <h2 class="entry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry__meta">
    	<?php get_template_part('templates/entry-meta'); ?>
    </div>
  </header>
  <div class="entry__summary">
    <?php the_excerpt(); ?>
  </div>
</article>
