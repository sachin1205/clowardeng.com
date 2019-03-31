<div class="page-intro">
  <div class="inner-wrap">
  <?php if(get_field('pi_heading')):?>
   <h1 class="page-header"><?php the_field('pi_heading');?></h1>
 <?php else: ?>
  <h1 class="page-header"><?php the_title(); ?></h1>
<?php endif;?>
  </div>
</div>