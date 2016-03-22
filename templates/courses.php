<?php

/* Template Name: Courses */

get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="intro-courses border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">
                <h2 class="title about pull-right">About Our <span class="em">Courses</span></h2>

              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <p class="text-justify"><?php the_field('intro'); ?>
                </div>
              </div>
     </div>
   </div>
 </div>
</section>
<?php endwhile; endif; ?>




<section class="section accreditation notoppadding topmargin-sm">
      <div class="container">
          <div class="row">
             <div class="col-xs-12">
  
        <div class="row">

      <?php $count = 0; ?>

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






      <?php $image = get_field('thumbnail'); $count++; ?>
       
       
        <?php if ($count % 2 == 0) : ?>
                  <article class="table-align course-listing-itm col-sm-12 pull-right">
                   
                    <div class="td col-sm-8">
    			              <section>
    			                <h3><?php the_title(); ?></h3>
    			                <?php the_field('intro'); ?>
    			              </section>

    			              <section class="prices" style="float:left">
    			                <p><span class="price"><?php the_field('full_price'); ?> AED &nbsp;</span> OR &nbsp; <span class="price"><?php the_field('subscription_price'); ?> AED &nbsp;</span> MONTHLY </p>
    			                <p><a href="<?php the_permalink(); ?>">READ MORE</a></p>
    			              </section>
                    </div>

                     <div class="td col-sm-4">
                     <img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>">
                     </div>
                  </article>


                  <?php else: ?>

                  <article class="table-align course-listing-itm col-sm-12 pull-left">
                    <div class="row">
                        
                        <div class="td col-sm-4">
                          <img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>">
                        </div>

                        <div class="td col-sm-8 tright">
                            <section>
                              <h3><?php the_title(); ?></h3>
                              <?php the_field('intro'); ?>
                            </section>

                            <section class="prices">
                              <p><span class="price"><?php the_field('full_price'); ?> AED &nbsp;</span> OR &nbsp; <span class="price"><?php the_field('subscription_price'); ?> AED &nbsp;</span> MONTHLY </p>
                              <p><a href="<?php the_permalink(); ?>">READ MORE</a></p>
                            </section>
                        </div>
                      </div>
                  </article>

        <?php endif; ?>


<?php endwhile; ?>
<?php endif; ?>

<?php edit_post_link(); ?>

         </div><!-- row -->

             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>

  


<section class="tutors beige-bg section cellpadding">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">

         


        <section class="clearfix center row bottommargin">

        <h2>How Our Courses Work</h2>

          <div class="col-sm-6 col-md-3 cta center">
            <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/custom/course-detail/step-1.png" alt="">
            <div class="description">
              <h3>Enrol</h3>
              <p>Use engaging, interactive, practical & creative course material. We educate you in partnership with leading industry experts.</p>
            </div>
            </div>
          </div>


          <div class="col-sm-6 col-md-3 cta center">
            <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/custom/course-detail/step-2.png" alt="">
            <div class="description">
              <h3>Study</h3>
              <p>Your dedicated tutor will personally support, guide & inspire you through your course and towards a successful career.</p>
            </div>
            </div>
          </div>


          <div class="col-sm-6 col-md-3 cta center">
            <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/custom/course-detail/step-3.png" alt="">
            <div class="description">
              <h3>Accomplish</h3>
              <p>Using a variety of channels we connect you with fellow students and wedding and event professionals around the world.</p>
            </div>
            </div>
          </div>


          <div class="col-sm-6 col-md-3 cta center">
            <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/custom/course-detail/step-4.png" alt="">
            <div class="description">
              <h3>GRADUATE</h3>
              <p>You will graduate with confidence, skills & experience and the support of the Academy team behind you. You’re never alone!</p>
            </div>
            </div>
          </div>




        </section>


             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>


  <section class="course-comparison border-top topmargin-lg bottommargin-sm">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">
                <h2 class="title about pull-right">Course <span class="em">Comparison</span></h2>

                  <div class="row">
                     <div class="col-xs-12">
                        <div class="table-align left-img">

                            <div class="td">
                                <img src="<?php bloginfo('template_directory'); ?>/images/custom/course-listing/course-comparison.jpg" alt="">
                            </div>

                            <div class="td center">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                <p class="topmargin-sm"><a class="btn btn-primary">Download Guide</a></p>
                            </div>

                        </div>
                     </div>
                  </div>
     </div>
   </div>
 </div>
</section>

<?php get_footer(); ?>
