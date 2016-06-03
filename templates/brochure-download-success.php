<?php

/* Template Name: Download Brochure Success */


 get_header(); ?>

<style>
.download-itm {display: none;}
<?php if($_GET['course1'] == 'certificate-in-wedding-planning') : ?> 
.certificate-in-wedding-planning.download-itm {display: block;}
<?php endif; ?>
<?php if($_GET['course2'] == 'certificate-in-event-planning') : ?> 
.certificate-in-event-planning.download-itm {display: block;}
<?php endif; ?>
<?php if($_GET['course3'] == 'certificate-in-event-design') : ?> 
.certificate-in-event-design.download-itm {display: block;}
<?php endif; ?>
<?php if($_GET['course4'] == 'diploma-in-venue-coordination') : ?> 
.diploma-in-venue-coordination.download-itm {display: block;}
<?php endif; ?>
<?php if($_GET['course5'] == 'diploma-in-wedding-and-event-planning') : ?> 
.diploma-in-wedding-and-event-planning.download-itm {display: block;}
<?php endif; ?>
<?php if($_GET['course6'] == 'diploma-in-wedding-planning-styling-and-design') : ?> 
.diploma-in-wedding-planning-styling-and-design.download-itm {display: block;}
<?php endif; ?>
<?php if($_GET['course7'] == 'advanced-diploma-in-special-event-planning-and-design') : ?> 
.advanced-diploma-in-special-event-planning-and-design.download-itm {display: block;}
<?php endif; ?>
</style>





<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="about border-top marginbottom">
<div class="container">
<div class="row">
  <div class="col-sm-12">
  <h2 class="title right-align">Download <span class="em"> Brochure</span></h2>
   <?php the_content(); ?>
  </div>

</div>
</div>
</section>

<?php endwhile; endif; ?>

<div class="clearfix"></div> 

<section class="download-links">
<div class="container">
<div class="row center">
            

         
<?php
$args = array(
'post_parent'  => 4,  
'post_type'   => 'page',
'order'               => 'ASC',
'orderby'             => 'page_order',
'posts_per_page'=> 100  
);

$query = new WP_Query( $args );
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<?php $image = get_field('course_thumbnail');  ?>



<div class="col-xs-6 col-sm-4 col-md-3 download-itm <?php echo $post->post_name;?> ">
  <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php the_title(''); ?>">
  <h3><?php the_title(); ?></h3>
  <a href="<?php the_field('course_brochure'); ?>" target="_blank" class="btn btn-primary btn-sm dark"><i class="icon-acrobat"></i> Download</a>
</div>


<?php endwhile; endif; rewind_posts(); ?>
</div>
</div>  
</section>


<?php get_footer(); ?>
