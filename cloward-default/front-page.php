<?php

	/*
		Template Name: Front Page
	*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
       
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<!--Site Content-->
	<section class="site-content" role="main">

		<?php Starkers_Utilities::get_template_parts( array( 'parts/home-service-module' ) ); ?>

	    <div class="inner-wrap">

			<?php Starkers_Utilities::get_template_parts( array( 'parts/communication-module' ) ); ?>
			<?php Starkers_Utilities::get_template_parts( array( 'parts/comfort-module' ) ); ?>

	  	</div>

	  	<?php Starkers_Utilities::get_template_parts( array( 'parts/home-our-work-module' ) ); ?>
	  	
	</section>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>