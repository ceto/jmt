<?php use Roots\Sage\Titles; ?>

<header class="page__header">
	<div class="wrapper wrapper--wide">
		<div class="page__header__text">
			  <h1 class="page_header__title"><?= Titles\title(); ?></h1>
			  <p class="page_header__intro">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta aliquam tempora exercitationem, est obcaecati corrupti magnam repudiandae fugiat.
			  </p>
		</div>
		<figure class="page__header__figure">
			<?php the_post_thumbnail(); ?>
		</figure>			
	</div>
</header>
