<?php

/* Template Name: Contact  */


 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="about border-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="title right-align"><span class="em"><?php the_title(); ?></span></h2>
      </div>
    </div>
  </div>
</section>



  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <?php the_field('left_column'); ?>
      </div>

       <div class="col-sm-6">
        <?php the_field('right_column'); ?>
      </div>

      <div class="clearfix"></div>  

      <div class="col-xs-12 topmargin-sm bottommargin">
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
      </div>

    </div>
  </div>



<?php endwhile; endif; rewind_posts(); ?>

   




<?php get_footer(); ?>
