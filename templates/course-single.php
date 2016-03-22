<?php

/* Template Name: Course Single */

get_header(); ?>


<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="course-single-item section">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">

      
          <div class="col-sm-6">
            <img src="<?php bloginfo('template_directory'); ?>/images/custom/course-detail/course-thumb.png" alt="" class="alignleft">
          </div>

          <article class="col-sm-6 tright">


            <section class="course-title">
                <h2>Certificate in<br><span>Wedding Planning</span></h2>
                <section class="prices">
                  <p><span class="price"><?php the_field('full_price'); ?> AED &nbsp;</span> OR &nbsp; <span class="price"><?php the_field('subscription_price'); ?> AED &nbsp;</span> MONTHLY </p>
                </section>
            </section>


          <?php the_content(); ?>

          </article>
      
  <?php endwhile; endif; ?>
  <?php rewind_posts(); ?>


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

<?php  
$args = array(
'page_id'       => 8,
'post_type' => 'page', 
);
$query = new WP_Query( $args ); ?>

<?php  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

  <section class="section accreditation">
      <div class="container">
           <div class="row">
                     <div class="col-xs-12">
                        <div class="table-align left-img">

                             <div class="td"><img src="<?php bloginfo('template_directory'); ?>/images/custom/course-detail/badge.png" alt=""></div>

                            <div class="td">
                                <h3>Accreditation</h3>
                                <?php the_field('accreditation', 'options'); ?>

                        
                            </div>

                        </div>
                     </div>
                  </div>
      </div><!-- .container -->
  </section>


<?php endwhile; endif; ?>
  <?php rewind_posts(); ?>



<section class="course-units border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12 center">

              <h2 class="title center-align">Course <span> Units</span></h2>


        <section class="clearfix  units-module-wrap bottommargin">
         

    <div id="oc-posts" class="owl-carousel posts-carousel">

               <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <?php  if( have_rows('course_unit') ): while ( have_rows('course_unit') ) : the_row(); ?>

                  <div class="oc-item">
                      <div class="ipost clearfix">
                          <div class="center">
                              <div class="unit-itm">
                                <div class="count"><p><?php the_sub_field('name_letter'); ?></p></div>
                                <?php the_sub_field('description'); ?>
                              </div>

                              <a class="btn btn-primary top-margin-sm" href="#">Learn More</a>
                            </div>
                      </div>
                  </div>

                <?php endwhile; endif; ?>
                <?php endwhile; endif; ?>
                <?php rewind_posts(); ?>
                                         


                    </div>

                    <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var ocPosts = $("#oc-posts");

                            ocPosts.owlCarousel({
                                margin: 20,
                                nav: true,
                                navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                autoplay: false,
                                autoplayHoverPause: true,
                                dots: false,
                                responsive:{
                                    0:{ items:1 },
                                    600:{ items:2 },
                                    1000:{ items:3 }
                                   
                                }
                            });

                        });

                    </script>

                    <div class="clear"></div>




        </section>


     




             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>




 <section class="section border-top course-sample">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">
  
        <div class="table-align">
                  <div class="td"><img src="<?php bloginfo('template_directory'); ?>/images/custom/course-detail/course-sample.png" alt=""></div>
                  <div class="td">
                   <h2>Course <span class="em">Sample</span></h2>
                   <?php the_field('course_sample_text'); ?>
                   <p><a target="_blank" href="<?php the_field('course_sample_link'); ?>" class="btn pull-right btn-secondary">Download</a></p>
                  </div>
                </div>


             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>



<section class="course-units section border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12 center">

              <h2 class="title center-align">payment<span class="em"> Plans</span></h2>


        <section class="clearfix plans-list bottommargin">
          
          <div class="payment-plans-excerpt">
            <h3>Save up to $300</h3>
            <p>Choose from one of thre payments plans:</p>
          </div>

          <div class="row">

            <div class="col-sm-3 center price-option">
                <div>
                <h3>Pay in Full</h3>
                <p class="price">$1218<br><span>Save $300</span></p>
                <p>Pay only $1218 when you pay in full!</p>
                </div>

                <a href="" class="btn btn-primary btn-sm">Enroll Now</a>

            </div>

            <div class="col-sm-3 center price-option">
                <div>
                <h3>Pay Half now & <br> half in 3 months</h3>
                <p class="price">$1218<br><span>Save $300</span></p>
                <p>Pay only $1218 when you pay in full!</p>
                </div>
                <a href="" class="btn btn-primary btn-sm">Enroll Now</a>
            </div>

            <div class="col-sm-3 center price-option">
              <div>
              <h3>4 month payment <br> plan</h3> 
              <p class="price">$1218<br><span>Save $300</span></p>
              <p>Pay only $1218 when you pay in full!</p>
              </div>

              <a href="" class="btn btn-primary btn-sm">Enroll Now</a>
            </div>

            <div class="col-sm-3 center price-option">
              <div>
              <h3>10 month payment <br> plan</h3>
              <p class="price">$1218<br><span>Save $300</span></p>
              <p>Pay only $1218 when you pay in full!</p>
              </div>

              <a href="" class="btn btn-primary btn-sm">Enroll Now</a>
            </div>

          </div>

        </section>


        


             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>




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
                  <a href="#" class="btn btn-primary">I'm Ready to get Started</a>
                    <?php the_field('enrol_now_text_2', 'options'); ?>
                </div>

              </section>

             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>





<?php get_footer(); ?>
