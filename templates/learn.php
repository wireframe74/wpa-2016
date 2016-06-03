<?php

/* Template Name: Learn */


 get_header(); ?>



<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="your-career border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">
              <h2 class="title right-align">Your <span class="em">Career</span></h2>

              <section class="clearfix table-align topmargin-sm section topmargin-lg bottommargin-lg">
                <div class="col-sm-6 td">
                  <?php the_field('your_career_text'); ?>

                </div>

                <div class="col-sm-6 td">
               

                 <?php $image = get_field('your_career_image'); ?>
                    <?php echo _acf_ricg_image( get_field('your_career_image')); ?>


                </div>
              </section>
              </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>




    <section class="blur-bg nobottommargin section">
       <div class="container">
           <div class="row">
              <div class="col-sm-10 col-sm-offset-1">

             
             <?php  $count = 0;
             if( have_rows('testimonial') ): while ( have_rows('testimonial') ) : the_row(); ?>

            <?php $count++; ?>

              <?php $image = get_sub_field('thumbnail');
              if( $image ): ?>
                   <div class="table-align left-img">
                      <div class="td">
                           <?php echo _acf_ricg_image(get_sub_field('thumbnail')); ?>

                      </div>

                      <div class="td">
                        <?php the_sub_field('testimonial_text'); ?>
                        <p class="tright testimonial-credit"><?php the_sub_field('name'); ?><br>  
                        <span class="secondary-color"><a href="http://<?php the_sub_field('website'); ?>" target="_blank"><?php the_sub_field('website'); ?></a></span><br>
                        <?php the_sub_field('course'); ?></p>
                      </div>
                 </div>

                 <?php if($count==1):  break; endif; ?>
              <?php endif; ?>
              <?php endwhile; endif;  ?>


              
              </div>
           </div>
       </div>
    </section>



  <section class="study-online section">
      <div class="container">
          <div class="row table-align no-padding">
          <div class="clearfix col-sm-10 col-sm-offset-1">
          <div class="row">
          <div class="col-sm-4 td">
          <h2>Study<span class="em"> Online</span></h2>
          <?php the_field('study_online_text_1'); ?>
          </div>

          <div class="col-sm-8 td">
          <?php $image = get_field('study_online_image'); ?>
          
          <?php echo _acf_ricg_image( get_field('study_online_image')); ?>
          </div>

          </div> <!-- .row -->
          </div>
          </div>


          <div class="row">
          <div class="clearfix col-sm-10 col-sm-offset-1">
          <?php the_field('study_online_text_2'); ?>
          </div>

          </div>
      </div><!-- .container -->
  </section>






    <section class="primary-color-bg nobottommargin section">
       <div class="container">
           <div class="row">
              <div class="col-sm-10 col-sm-offset-1">

             
              <?php if( have_rows('testimonial') ):
                $count = 0;
              ?>

               <?php while ( have_rows('testimonial') ) : the_row(); ?>

              <?php $image = get_sub_field('thumbnail'); ?>

              <?php $count++; ?>
              <?php if($count==1): ?>


                   <div class="table-align right-img">
                      <div class="td">
                      <?php the_sub_field('testimonial_text'); ?>
                        <p class="tleft testimonial-credit"><?php the_sub_field('name'); ?><br>  
                        <span class="secondary-color"><a href="http://<?php the_sub_field('website'); ?>" target="_blank"><?php the_sub_field('website'); ?></a></span><br>
                        <?php the_sub_field('course'); ?></p>
                      </div>

                      <div class="td">
                        <?php echo _acf_ricg_image(get_sub_field('thumbnail')); ?>
                       </div>
                 </div>






              <?php endif; ?> <!-- if count = 1 -->
              <?php endwhile; endif;  ?>




              
              </div>
           </div>
       </div>
    </section>


<section class="starting-a-business bottommargin section">
<div class="container">
   <div class="row">
      <div class="col-sm-10  col-sm-offset-1">

      <div class="row table-align no-padding bottommargin">
           <div class="col-sm-6 td">
           <?php $image = get_field('starting_a_business_image'); ?>
           <?php echo _acf_ricg_image( get_field('starting_a_business_image')); ?>
           </div>

           <div class="col-sm-6 td business-intro center">

           <h2 class="center">Starting a <br>
           <span class="em">Business</span>
           </h2>

           <?php the_field('starting_a_business_intro'); ?>
           </div>

          
      </div>
        
      <div class="row">
        <div class="col-sm-12">
        <?php the_field('starting_a_business_text'); ?>
        </div>
      </div>

      
      </div>
   </div>
</div>
</section>







    <section class="beige-bg bottommargin section">
       <div class="container">
           <div class="row">
              <div class="col-sm-10 col-sm-offset-1">

             
              <?php if( have_rows('testimonial') ): ?>
              <?php $count = 0 ; ?>

               <?php while ( have_rows('testimonial') ) : the_row(); ?>

              <?php $image = get_sub_field('thumbnail');
              if( $image ): ?>

              <?php $count++; ?>

              <?php if($count==3): ?>


                   <div class="table-align left-img">
                      <div class="td">
                          <?php echo _acf_ricg_image(get_sub_field('thumbnail')); ?>
                      </div>

                      <div class="td">
                        <?php the_sub_field('testimonial_text'); ?>
                        <p class="tright testimonial-credit"><?php the_sub_field('name'); ?><br>  
                        <span class="secondary-color"><a href="http://<?php the_sub_field('website'); ?>" target="_blank"><?php the_sub_field('website'); ?></a></span><br>
                        <?php the_sub_field('course'); ?></p>
                      </div>
                 </div>

                <?php endif; ?>


              <?php endif; ?>
              <?php endwhile; endif;  ?>


              
              </div>
           </div>
       </div>
    </section>


<section class="our-experience margintop border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-10 col-sm-offset-1">
              <h2 class="title right-align">Our <span class="em">Experience</span></h2>

             <div class="row">
                <section class="clearfix nopadding table-align topmargin-sm section topmargin-lg bottommargin-lg">
                <div class="col-sm-6 td">
                  
                  <?php the_field('our_experience_text'); ?>

                </div>

                <div class="col-sm-6 td">
                <?php $image = get_field('our_experience_image'); ?>
                 <?php echo _acf_ricg_image( get_field('our_experience_image')); ?>
                </div>
              </section>


             </div>
              </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>

<?php endwhile; endif; rewind_posts(); ?>




<?php get_footer(); ?>