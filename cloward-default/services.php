<?php

	/*
		Template Name: Services
	*/
?>
 
    
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<!--Site Content-->
	<section class="site-content dest-content" role="main">



        <article class="site-content-primary">
        	
       		<?php the_content(); ?> 

			<?php Starkers_Utilities::get_template_parts( array( 'parts/service-module' ) ); ?>

			<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>

		</article>
			

	</section>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/slidebox' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>