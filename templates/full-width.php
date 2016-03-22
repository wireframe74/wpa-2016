<?php

/* Template Name: Full Width */

get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="intro-courses">




      <div class="container">
          <div class="row">
             <div class="col-sm-12"> 
             <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <?php edit_post_link( ); ?>
                    <?php endwhile; endif; ?>
              </div>
               
   </div>
 </div>
</section>

<?php get_footer(); ?>
