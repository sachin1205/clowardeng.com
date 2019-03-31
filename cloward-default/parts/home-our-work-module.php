<!-- our work module start -->
<div class="our-work-module">
	<div class="inner-wrap">
		
	
	<?php if(get_field('hm_owm_heading')):?>
		<h2 class="owm-heading"><?php the_field('hm_owm_heading');?></h2>
	<?php endif; ?> 

	<div class="owm-buckets os-animation obj-animation-duration" data-os-animation="slideInUp" data-os-animation-delay="0.3s">

		<?php if( have_rows('hm_owm_item') ):
		while ( have_rows('hm_owm_item') ) : the_row(); ?>

		<div class="owm-item">

			<?php if(get_sub_field('hm_owm_link')) : ?>
			<a href="<?php the_sub_field('hm_owm_link') ; ?>">

				<?php $hm_owm_image = get_sub_field('hm_owm_image'); ?>
				<img src="<?php echo $hm_owm_image['url']; ?>" alt="<?php echo $hm_owm_image['alt']; ?>" title="<?php echo $hm_owm_image['alt']; ?>" class="owm-img">

				<?php if(get_sub_field('hm_owm_title')) : ?>
				<span class="owm-text"><?php the_sub_field('hm_owm_title') ; ?></span>
				<?php endif; ?>

			</a>
			<?php endif; ?>

		</div>

		<?php
		endwhile;
		endif; ?>

	</div>



	<?php if(get_field('hm_owm_cta_url')):?>
	<a href="<?php the_field('hm_owm_cta_url');?>" class="cmc-cta btn os-animation obj-animation-duration" data-os-animation="slideInUp" data-os-animation-delay="0.3s"><?php the_field('hm_owm_cta_text');?></a>
	<?php endif; ?> 

	
	</div>
</div>
<!-- our work module end -->