</div>
<!--site wrap end-->
		<?php wp_footer(); ?>
		<?php if(get_field('before_the_body')):?>
		<?php the_field('before_the_body'); ?>
	<?php elseif(get_field('before_the_body','options')):?>
		<?php the_field('before_the_body','options'); ?>
	<?php endif;?>
    </body>
</html>