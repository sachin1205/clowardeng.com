<!-- comfort module start -->
<div class="comfort-module">
	<div class="clearfix">

		<?php if(get_field('com_image')) : ?>
		<figure class="cm-fig com-fig os-animation obj-animation-duration" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
			<?php $com_image = get_field('com_image'); ?>
			<img src="<?php echo $com_image['url']; ?>" alt="<?php echo $com_image['alt']; ?>" title="<?php echo $com_image['alt']; ?>">
		</figure>
		<?php endif; ?>

		<div class="cm-content com-content os-animation obj-animation-duration" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">

			<?php if(get_field('com_heading')):?>
			<h2 class="smc-heading"><?php the_field('com_heading');?></h2>
			<?php endif;?>

			<?php if(get_field('com_text')):?>
			<div class="cmc-text"><?php the_field('com_text');?></div>
			<?php endif;?>

			<?php if(get_field('com_cta_url')):?>
			<a href="<?php the_field('com_cta_url');?>" class="cmc-cta btn"><?php the_field('com_cta_text');?></a>
			<?php endif;?>
			
		</div>
	</div>
</div>
<!-- comfort module end -->