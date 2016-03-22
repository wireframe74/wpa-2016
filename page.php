<?php


 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="section">
  
  <div class="container">
    <div class="row">
      <div class="col-sm-12"><h2 class="title"><?php the_title(); ?></h2></div>
      <div class="col-sm-6"><?php the_field('column_1'); ?></div>
      <div class="col-sm-6"><?php the_field('column_2'); ?></div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>
<?php rewind_posts(); ?>
</section>


<?php get_footer(); ?>
