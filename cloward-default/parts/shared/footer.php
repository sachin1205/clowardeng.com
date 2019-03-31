<!--Site Footer start-->
<footer class="site-footer" role="contentinfo">
	<div class="inner-wrap">

		<!--footer link start-->
		<div class="sf-nav">
			<!-- <h2 class="sf-heading">Sitemap</h2> -->
			<?php wp_nav_menu(array(
			'menu'            => 'Footer Nav',
			'menu_class'      => 'sf-links'
			)); ?>
		</div>
		<!--footer link end-->

		<img src="<?php bloginfo('template_url'); ?>/img/sf-logo.png" alt="Cloward Engineering Group" class="sf-logo">

		<!--copyright text start-->
		<div class="sf-copyright">
			&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. Designed by Jaycee VanWagoner.
		</div>
		<!--copyright text end-->

	</div>
</footer>
<!--Site Footer end-->