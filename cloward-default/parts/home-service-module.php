<!-- services module start -->
<div class="services-module">

	<div class="inner-wrap">
	
	<?php if(get_field('hm_sm_heading')):?>
	<h2 class="sm-heading"><?php the_field('hm_sm_heading');?></h2>
	<?php endif; ?> 

	<div class="sm-buckets">

		<?php if( have_rows('hm_sm_item') ): 
		$i = 1;
		while ( have_rows('hm_sm_item') ) : the_row(); ?>


		<div class="sm-item os-animation obj-animation-duration" data-os-animation="
		<?php 
		if($i == 1):
			echo 'fadeInLeft';
		elseif($i == 2):
			echo 'fadeIn';
		else:
			echo 'fadeInRight';
		endif;
		?>
		" data-os-animation-delay="0.3s">

			<?php if(get_sub_field('hm_sm_link')) : ?>
			<a href="<?php the_sub_field('hm_sm_link') ; ?>">

				<?php if(get_sub_field('hm_sm_heading')) : ?>
				<h3 class="smi-heading"><?php the_sub_field('hm_sm_heading') ; ?></h3>
				<?php endif; ?>

				<?php if(get_sub_field('hm_sm_image')) : ?>
					<?php $hm_sm_image = get_sub_field('hm_sm_image'); ?>
					<img src="<?php echo $hm_sm_image['url']; ?>" alt="<?php echo $hm_sm_image['alt']; ?>" title="<?php echo $hm_sm_image['alt']; ?>" class="smi-img">
				<?php endif; ?>

				<?php if(get_sub_field('hm_sm_text')) : ?>
				<p class="smi-text"><?php the_sub_field('hm_sm_text') ; ?></p>
				<?php endif; ?>

			</a>
			<?php endif; ?>

		</div>


		<?php $i++;
		endwhile;
		endif; ?>

	</div>

	<?php if(get_field('hm_sm_subtext')):?>
	<h2 class="sm-heading sm-subtext"><?php the_field('hm_sm_subtext');?></h2>
	<?php endif; ?> 

	</div>
</div>
<!-- services module end -->