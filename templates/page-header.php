<?php use Roots\Sage\Titles; ?>

<header class="page__header">
	<div class="wrapper wrapper--wide">
		<div class="page__header__text">
			  <h1 class="page__header__title"><?= Titles\title(); ?></h1>
			  <p class="page__header__intro">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta aliquam tempora exercitationem, est obcaecati corrupti magnam repudiandae fugiat.
			  </p>
		</div>
		<?php $fig = wp_get_attachment_image_src( get_post_thumbnail_id(),'full'  ) ; ?>
		<style>
			.page__header__figure, .page__header {
				background-image: url('<?php echo $fig['0']; ?>');
			}
		</style>
		<figure class="page__header__figure">
			<?php the_post_thumbnail(); ?>
		</figure>			
	</div>
</header>
