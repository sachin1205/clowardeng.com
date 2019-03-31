
	<!--Site intro container start-->
	<section class="site-intro-container">
		<div class="inner-wrap site-intro-wrap">
			<div class="site-intro">

				<?php if(get_field('si_heading')) : ?>
				<h1 class="si-heading os-animation obj-animation-duration" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s"><?php the_field('si_heading') ; ?></h1>
				<?php endif; ?>

				<?php if(get_field('si_text')) : ?>
				<p class="si-text os-animation obj-animation-duration" data-os-animation="fadeInRight" data-os-animation-delay="0.3s"><?php the_field('si_text') ; ?></p>
				<?php endif; ?>

			</div>

			<?php if(get_field('si_cta_url')) : ?>
			<a href="<?php the_field('si_cta_url') ; ?>" class="si-cta btn"><?php the_field('si_cta_text') ; ?></a>
			<?php endif; ?>
			
			<div class="si-social">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/facebook-circular-logo.png" alt=""></a>
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/twitter-logo-button.png" alt=""></a>
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/instagram-logo.png" alt=""></a>
			</div>
		</div>
	</section>
	<!--Site intro container end-->