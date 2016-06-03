<?php

/* Template Name: Course Single */

get_header(); ?>



<?php if($_GET['hide-info'] == 'true') : ?> 
<style>
.grav-form-wrap.enrol-section,
.payment-wrap.grav-payments {
display: block;
}
body {
  overflow: hidden; 
}
.container.form-inner {
display: none;
}
</style>
<?php endif; ?>


  <div class="grav-form-wrap enrol-section">

  <div class="rel-wrap">
  <div class="form-elem">

    <div class="container">
        <div class="row">
        <div class="col-sm-12 center">
         <a href="#" class="btn-close">&times;</a>
      <h2 class="title center-align">enrol<span class="em"> Today</span></h2>

      </div>




      </div>
    </div>


        <div class="container form-inner">
        <div class="row">
        <div class="col-sm-12">
      
     

        <div class="gfrom-wrapper center">


          <?php gravity_form(1, $display_title=false, 
          $display_description=true, 
          $display_inactive=false, 
          $field_values=null, 
          $tabindex=32,
          $ajax=true);
          ?>
        </div>

      <p class="topmargin-sm start-over-wrap">
      <a class="btn btn-primary start-over">Start Over</a>
      </p>


        </div>
        </div>
        </div>


<section class="payment-wrap grav-payments container">
<div class="row"> <div class="col-sm-12 bottommargin center"><p>Please select a payment plan below:</p></div></div>
<div class="payment-plan-items">
     
<?php
$category = get_field('category');
$args3 = array( 
'post_type' => 'product', 
'posts_per_page' => 4, 
'product_cat' => ''.$category.'', 
'orderby' => 'menu_order', 
'order'   => 'ASC' );
$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post(); 
?>

             

<?php if(get_field('payment_plan_option') == 'full' )  : ?>

            <div class="col-sm-3 center price-option">
                <div>
                <h3>Pay in Full</h3>

               
                <p class="price">£<?php echo $product->get_price(); ?>
                  <br><span><?php the_field('pink_text'); ?></span>
                  </p>
                   
                 <p> <?php the_field('payment_snippet'); ?></p>

                </div>

                <a href="<?php bloginfo('url'); ?>/cart/?add-to-cart=<?php echo $product->id; ?>" class="btn btn-primary btn-sm">enrol Now</a>

            </div>


   <?php elseif(get_field('payment_plan_option') == 'two_months' ): ?>

            <div class="col-sm-3 center price-option">
                <div>
                <h3>Pay Half now &amp; <br> half in 3 months</h3>

                  <p class="price">£<?php echo $product->get_price(); ?>
                  <br><span><?php the_field('pink_text'); ?></span>
                  </p>
                  <p> <?php the_field('payment_snippet'); ?></p>
                

                </div>
                <a href="<?php bloginfo('url'); ?>/cart/?add-to-cart=<?php echo $product->id; ?>" class="btn btn-primary btn-sm">enrol Now</a>
            </div>


    <?php elseif(get_field('payment_plan_option') == 'four_months' ): ?>

            <div class="col-sm-3 center price-option">
              <div>

              <h3>4 month payment <br> plan</h3> 

                <p class="price">£<?php echo $product->get_price(); ?>
                <br><span><?php the_field('pink_text'); ?></span>
                </p>
                <p> <?php the_field('payment_snippet'); ?></p>
             

              </div>

              <a href="<?php bloginfo('url'); ?>/cart/?add-to-cart=<?php echo $product->id; ?>" class="btn btn-primary btn-sm">enrol Now</a>
            </div>

    <?php elseif(get_field('payment_plan_option') == 'ten_months' )  : ?>

            <div class="col-sm-3 center price-option">
              <div>
              <h3>10 month payment <br> plan</h3>

               <p class="price">£<?php echo $product->get_price(); ?>
                <br><span><?php the_field('pink_text'); ?></span>
                </p>
               <p> <?php the_field('payment_snippet'); ?></p>
             
              
              </div>

              <a href="<?php bloginfo('url'); ?>/cart/?add-to-cart=<?php echo $product->id; ?>" class="btn btn-primary btn-sm">enrol Now</a>
            </div>

    <?php endif; ?> 
  <?php endwhile; rewind_posts(); ?>

          </div>

        </section>


</div><!-- form-elem -->
  </div><!-- rel-wrap -->
  </div><!-- grav-form-wrap -->








<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="course-detail-wrap">

<section class="course-single-item section">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">

      
          <div class="col-sm-6">
            <a href="<?php the_field('video_url'); ?>" data-lightbox="iframe">
             <?php $image = get_field('course_detail_image'); ?>
             <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php the_title(); ?>">
           </a>
          </div>

          <article class="col-sm-6 tright">


            <section class="course-title">
                <h2><?php the_field('heading_1'); ?><br><span><?php the_field('heading_2'); ?></span></h2>
                <section class="prices">
                  <p><span class="price">£<?php the_field('full_price'); ?>&nbsp;</span> OR &nbsp; <span class="price">£<?php the_field('subscription_price'); ?>&nbsp;</span> MONTHLY </p>
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
              <p>Use engaging, interactive, practical &amp; creative course material. We educate you in partnership with leading industry experts.</p>
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
              <p>You will graduate with confidence, skills &amp; experience and the support of the Academy team behind you. You’re never alone!</p>
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

                           
                            </div>
                      </div>
                  </div>

                <?php endwhile; endif; ?>
             
                                         


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


<div class="col-sm-6 col-sm-offset-3">
  <a href="<?php bloginfo('url'); ?>/download-brochure" class="btn btn-primary topmargin">Download Course Guide</a>
</div>

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
                  <div class="td">
                  <?php if(get_field('course_sample_image')): ?><?php $sampleImg = get_field('course_sample_image'); ?>
                  <img src="<?php echo $sampleImg['sizes']['large']; ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                  </div>
                  <div class="td">
                   <h2>Course <span class="em">Sample</span></h2>
                   <?php the_field('course_sample_text'); ?>
                   <p><a target="_blank" href="<?php the_field('course_sample_link'); ?>" class="btn pull-right btn-secondary">View</a></p>
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


        <section class="clearfix plans-list bottommargin-sm">
          
          <div class="payment-plans-excerpt">
            <h3>Save up to £<?php the_field('savings_amount'); ?></h3>
            <p>Choose from one of three payments plans:</p>
          </div>


   <?php endwhile; endif; ?>
   <?php rewind_posts(); ?>


<div class="row lower">


<?php
$category = get_field('category');
$args2 = array( 
'post_type' => 'product', 
'posts_per_page' => 4, 
'product_cat' => ''.$category.'', 
'orderby' => 'menu_order', 
'order'   => 'ASC' );
$loop2 = new WP_Query( $args2 );
while ( $loop2->have_posts() ) : $loop2->the_post(); 
?>

             

<?php if(get_field('payment_plan_option') == 'full' )  : ?>

            <div class="col-sm-3 center price-option">
                <div>
                <h3>Pay in Full</h3>

               
                <p class="price">£<?php echo $product->get_price(); ?>
                  <br><span><?php the_field('pink_text'); ?></span>
                  </p>
                   
                 <p> <?php the_field('payment_snippet'); ?></p>

                </div>

                <a href="" class="btn btn-primary btn-sm grav-btn">enrol Now</a>

            </div>


   <?php elseif(get_field('payment_plan_option') == 'two_months' ): ?>

            <div class="col-sm-3 center price-option">
                <div>
                <h3>Pay Half now &amp; <br> half in 3 months</h3>

                  <p class="price">£<?php echo $product->get_price(); ?>
                  <br><span><?php the_field('pink_text'); ?></span>
                  </p>
                  <p> <?php the_field('payment_snippet'); ?></p>
                

                </div>
                <a href="" class="btn btn-primary btn-sm grav-btn">enrol Now</a>
            </div>


    <?php elseif(get_field('payment_plan_option') == 'four_months' ): ?>

            <div class="col-sm-3 center price-option">
              <div>

              <h3>4 month payment <br> plan</h3> 

                <p class="price">£<?php echo $product->get_price(); ?>
                <br><span><?php the_field('pink_text'); ?></span>
                </p>
                <p> <?php the_field('payment_snippet'); ?></p>
             

              </div>

              <a href="" class="btn btn-primary btn-sm grav-btn">enrol Now</a>
            </div>

    <?php elseif(get_field('payment_plan_option') == 'ten_months' )  : ?>

            <div class="col-sm-3 center price-option">
              <div>
              <h3>10 month payment <br> plan</h3>

               <p class="price">£<?php echo $product->get_price(); ?>
                <br><span><?php the_field('pink_text'); ?></span>
                </p>
               <p> <?php the_field('payment_snippet'); ?></p>
             
              
              </div>

              <a href="" class="btn btn-primary btn-sm grav-btn">enrol Now</a>
            </div>

    <?php endif; ?> 
  <?php endwhile; rewind_posts(); ?>

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
                  <a href="#" class="btn btn-primary grav-btn">I'm Ready to get Started</a>
                    <?php the_field('enrol_now_text_2', 'options'); ?>
                </div>

              </section>

             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>

</div>



<?php get_footer(); ?>
