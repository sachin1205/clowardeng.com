<!-- our work module start -->
<div class="our-work-module-dest">
	<div class="inner-wrap">
		
	
	<?php if(get_field('pi_heading')):?>
	<h2 class="owm-heading"><?php the_field('pi_heading');?></h2>
	<?php endif; ?> 

	<div class="owm-buckets os-animation obj-animation-duration" data-os-animation="fadeIn" data-os-animation-delay="0.3s">

		<?php if( have_rows('owm_item') ):
		while ( have_rows('owm_item') ) : the_row(); ?>

		<div class="owm-item">

			<?php if(get_sub_field('owm_link')) : ?>
			<a href="<?php the_sub_field('owm_link') ; ?>">

				<?php $owm_image = get_sub_field('owm_image'); ?>
				<img src="<?php echo $owm_image['url']; ?>" alt="<?php echo $owm_image['alt']; ?>" title="<?php echo $owm_image['alt']; ?>" class="owm-img">

				<?php if(get_sub_field('owm_title')) : ?>
				<span class="owm-text"><?php the_sub_field('owm_title') ; ?></span>
				<?php endif; ?>

			</a>
			<?php endif; ?>

		</div>

		<?php
		endwhile;
		endif; ?>

	</div>

	
	</div>
</div>
<!-- our work module end -->