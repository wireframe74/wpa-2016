<?php

/* Template Name: Fees */


 get_header(); ?>

<?php include_once(TEMPLATEPATH .'/inc/fees/certificate-in-wedding-planning.php'); ?>
<?php include_once(TEMPLATEPATH .'/inc/fees/certificate-in-event-planning.php'); ?>
<?php include_once(TEMPLATEPATH .'/inc/fees/certificate-in-event-design.php'); ?>
<?php include_once(TEMPLATEPATH .'/inc/fees/advanced-diploma-in-special-event-planning-and-design.php'); ?>
<?php include_once(TEMPLATEPATH .'/inc/fees/diploma-in-wedding-and-event-planning.php'); ?>
<?php include_once(TEMPLATEPATH .'/inc/fees/diploma-in-venue-coordination.php'); ?>
<?php include_once(TEMPLATEPATH .'/inc/fees/diploma-in-wedding-planning-styling-and-design.php'); ?>








<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="about border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">
              <h2 class="title"><span class="em">Fees</span></h2>
             <div class="center topmargin">
                <?php the_content(); ?>
             </div>
             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>



  

<?php edit_post_link(); ?>
<?php endwhile; ?>
<?php endif; ?>




<div class="container">
      <section class="section row clearfix">
        
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


      <a class="table-align course-listing-itm col-sm-12 pull-left" name="<?php the_field('category'); ?>">
        <div class="row">
            
            <div class="td col-sm-4">
              <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php the_title(); ?>">
            </div>

            <div class="td col-sm-8 tright">
              <div class="row">
                <div class="col-sm-12 col-md-8">
                  <h3><?php the_title(); ?></h3>
                  <?php the_field('intro'); ?>
                </div>
                <div class="col-sm-12 col-md-4 secondary-bg">
                    <p><span class="full-price price"><?php the_field('full_price'); ?> GBP</span><br>
                    OR <span class="price"><?php the_field('subscription_price'); ?>GBP</span> MONTHLY
                    </p>
                </div>

              </div>
            </div>
          </div>
      </a>

      <?php endwhile; endif; rewind_posts(); ?>



      </section>






</div>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="light-beige-bg special-offer nobottommargin">
       <div class="container">
           <div class="row">
              <div class="col-sm-12">

              <?php $image = get_field('special_offer_image'); ?>

                   <div class="table-align left-img">
                      <div class="td">
                        <h2 class="nobottommargin">Special<span class="em"> Offer</span></h2>
                        <?php the_field('special_offer_text'); ?>
                        <a href="<?php bloginfo('url'); ?>/special-offer" class="btn btn-primary">Find out More</a>
                      </div>

                      <div class="td">
                       <img src=" <?php echo $image['sizes']['large']; ?>" alt="<?php the_title(); ?>">
                      </div>
                 </div>
            
              </div>
           </div>
       </div>
    </section>

<?php endwhile; endif; rewind_posts(); ?>

<section class="enrol-section border-top arrow">
      <div class="container">
      <div class="arrow_box"></div>
          <div class="row">
             <div class="col-sm-12 center">
                <h2 class="title center-align">enrol<span class="em"> Today</span></h2>

                <section class="clearfix row bottommargin">

              <div class="col-sm-8 col-sm-offset-2">
                
               <?php the_field('enrol_now_text_1', 'options'); ?>

              </div>

                <div class="col-sm-6 col-sm-offset-3">
                  <a href="<?php bloginfo('url'); ?>/courses" class="btn btn-primary">I'm Ready to get Started</a>
                    <?php the_field('enrol_now_text_2', 'options'); ?>
                </div>

              </section>

             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>

  

<?php get_footer(); ?>