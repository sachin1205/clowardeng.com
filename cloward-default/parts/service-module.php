<!-- services module start -->
<div class="services-module-dest">

	<div class="inner-wrap">

	<div class="sm-buckets">

		<?php if( have_rows('sm_item') ): 
		$i = 1;
		while ( have_rows('sm_item') ) : the_row(); ?>


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

			<!--<?php if(get_sub_field('sm_link')) : ?>
			<a href="<?php the_sub_field('sm_link') ; ?>">-->

				<?php if(get_sub_field('sm_heading')) : ?>
				<h3 class="smi-heading"><?php the_sub_field('sm_heading') ; ?></h3>
				<?php endif; ?>

				<?php if(get_sub_field('sm_image')) : ?>
					<?php $sm_image = get_sub_field('sm_image'); ?>
					<img src="<?php echo $sm_image['url']; ?>" alt="<?php echo $sm_image['alt']; ?>" title="<?php echo $sm_image['alt']; ?>" class="smi-img">
				<?php endif; ?>

				<?php if(get_sub_field('sm_text')) : ?>
				<p class="smi-text"><?php the_sub_field('sm_text') ; ?></p>
				<?php endif; ?>

			<!--</a>
			<?php endif; ?>-->

		</div>


		<?php $i++;
		endwhile;
		endif; ?>

	</div>

	</div>
</div>
<!-- services module end -->