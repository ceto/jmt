<?php use Roots\Sage\Titles; ?>

<header class="page__header">
	<div class="wrapper wrapper--fullwidth">
		<div class="page__headerinnerwrapper">
			<div class="page__header__text">
				  <h1 class="page__header__title"><?= Titles\title(); ?></h1>
					<?php if ( get_post_meta( get_the_ID(), 'preface', true ) ) : ?>
						<p class="page__header__intro">
							<?= get_post_meta( get_the_ID(), 'preface', true )  ?>
				  	</p>
					<?php elseif (is_home()) :?>
						<p class="page__header__intro">
							<?php echo get_post_meta( 53, 'preface', true )  ?>
						</p>
					<?php endif; ?>
			</div>
			<?php 
				if (!is_home() && has_post_thumbnail() ) {
					$fig = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ) ; 
				} else {
					$fig = wp_get_attachment_image_src( get_post_thumbnail_id(53), 'full' ) ;
				}
			?>
			<style>
				.page__header__figure {
					background-image: url('<?php echo $fig['0']; ?>');
				}
			</style>
			<figure class="page__header__figure">
				<?php the_post_thumbnail();?>
			</figure>			
		</div>
	</div>
</header>
