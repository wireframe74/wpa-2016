<?php
get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="starting-a-business zerotopmargin bottommargin">
<div class="container">
   <div class="row">

          <div class="column-2">
 <h2><?php wp_title(''); ?></h2>
          <?php the_content(); ?>
         </div>
         <div class="col-xs-12 topmargin-sm">
           <a class="btn btn-primary dark" href="<?php the_field('dropbox_url'); ?>" target="blank"><span class="icon-line-download"></span> Download Brochure</a>
         </div>

         </div>
         </div>
         </section>
<?php endwhile; endif; rewind_posts(); ?>


 

<?php get_footer(); ?>