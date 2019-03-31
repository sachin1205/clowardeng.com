<!-- communication module start -->
<div class="communication-module">
	<div class="clearfix">

		<?php if(get_field('cm_image')) : ?>
		<figure class="cm-fig os-animation obj-animation-duration" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
			<?php $cm_image = get_field('cm_image'); ?>
			<img src="<?php echo $cm_image['url']; ?>" alt="<?php echo $cm_image['alt']; ?>" title="<?php echo $cm_image['alt']; ?>">
		</figure>
		<?php endif; ?>

		<div class="cm-content os-animation obj-animation-duration" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">

			<?php if(get_field('cm_heading')):?>
			<h2 class="smc-heading"><?php the_field('cm_heading');?></h2>
			<?php endif;?>

			<?php if(get_field('cm_text')):?>
			<div class="cmc-text"><?php the_field('cm_text');?></div>
			<?php endif;?>

			<?php if(get_field('cm_cta_url')):?>
			<a href="<?php the_field('cm_cta_url');?>" class="cmc-cta btn"><?php the_field('cm_cta_text');?></a>
			<?php endif;?>
			
		</div>
	</div>
</div>
<!-- communication module end -->