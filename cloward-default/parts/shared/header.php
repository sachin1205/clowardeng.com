<!-- Site header wrap start-->
<div class="site-header-wrap">
	<!--Site Header start-->
   	<header class="site-header" role="banner">
   		<!--sticky header start-->
		<div class="sh-sticky-wrap">
			<div class="inner-wrap">
				<a href="<?php bloginfo('url'); ?>" class="site-logo"><img src="<?php bloginfo('template_url'); ?>/img/site-logo.png" alt="Cloward Engineering Group"></a>
				<span class="sh-icons">
					<a href="#menu" class="sh-ico-menu menu-link">&nbsp;</a>
				</span>
				<!--site nav container start-->
				<div class="site-nav-container">
					<div class="snc-header">
						<a href="#" class="close-menu menu-link">Close</a>
					</div>
					<?php wp_nav_menu(array(
					'menu'            => 'Primary Nav',
					'container'       => 'nav',
					'container_class' => 'site-nav',
					'menu_class'      => 'sn-level-1',
					'walker'        => new themeslug_walker_nav_menu
					)); ?>
				</div>
				<!--site nav container end-->
				<a href="" class="site-nav-container-screen menu-link">&nbsp;</a>
			</div>
		</div>
		<!--sticky header end-->
	</header>
	<!--Site Header end-->
	<?php 
	if ( is_front_page() ) :
		Starkers_Utilities::get_template_parts( array( 'parts/site-intro' ) );
	endif; 
	?> 
</div>
<!-- Site header wrap end-->