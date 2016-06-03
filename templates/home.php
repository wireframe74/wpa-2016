<?php
 /* Template Name: Home */
 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




<section class="home-course-intro topmargin bottommargin">

<div class="container">
  <div class="row">
    
    <div class="col-xs-12 col-sm-6 topmargin">
    <?php $imageCourse = get_field('course_list_image'); ?>
    <img src="<?php echo $imageCourse['sizes']['medium']; ?>" alt="<?php the_title(); ?>">
    <?php the_field('course_list'); ?>
    </div>
    <div class="col-xs-12 col-sm-6">
    <div class="img-wrapper module bottommargin">
    <a href="<?php the_field('course_video_url'); ?>" data-lightbox="iframe" class="latest-hangout-link"></a>
    <?php $imageOne = get_field('course_video_image'); ?>
    <img src="<?php echo $imageOne['url']; ?>" alt="<?php the_title(); ?>">
    </div>
    </div>

  </div>
</div>

</section>


<section class="section icons">
 <div class="container">
  <div class="row">
      <div class="col-sm-12">
         <div class="row">

              <div class="table-align left-img">

                  <div class="td">
                  <?php echo _acf_ricg_image( get_field('ncfe_accreditation_image')); ?>
                  </div>

                  <div class="td">
                    <?php the_field('ncfe_accreditation_text'); ?>
                  </div>
                  
                </div>

            <?php edit_post_link(); ?> 
          </div>
      </div>
    </div>
 </div>
</section>




<section class="about border-top">
      <div class="container">
          <div class="row">
        

             <div class="col-sm-12">
             <h2 class="title about pull-right">What they say <span class="em">About Us</span></h2>
  
              <?php  if( have_rows('testimonial') ): while ( have_rows('testimonial') ) : the_row(); ?>
              <?php $image = get_sub_field('thumbnail');
              if( $image ): ?>
                   <div class="table-align left-img">
                      <div class="td">
                          <img src=" <?php echo $image['sizes']['medium']; ?>" alt="<?php the_sub_field('name'); ?>">
                      </div>

                      <div class="td">
                        <?php the_sub_field('testimonial_text'); ?>
                        <p class="tright testimonial-credit"><?php the_sub_field('name'); ?><br>  
                        <span class="secondary-color"><a href="http://<?php the_sub_field('website'); ?>" target="_blank"><?php the_sub_field('website'); ?></a></span><br>
                        <?php the_sub_field('course'); ?></p>
                      </div>
                 </div>
              <?php endif; ?>
              <?php endwhile; endif;  ?>

            <?php edit_post_link(); ?>

             </div><!-- span-->
          </div> <!-- .row -->





      </div><!-- .container -->
  </section>


<section class="section student-showcase section border-top">
   <div class="container">
       <div class="row">
          <div class="col-sm-12">
            <img src="<?php bloginfo('template_directory'); ?>/images/home/student-showcase.png" alt="Student Showcase">
            <a class="btn btn-primary" target="_blank" href="http://www.weddingacademylive.com/student-showcase/">Visit the Showcase</a>
          </div>
       </div>
   </div>
</section>


<section class="advisory-board blur-bg section">
   <div class="container">
       <div class="row">
          <div class="col-sm-12">

          <div class="row academy-wrap">
              <div class="col-md-6">
                   <?php the_field('advisory_board'); ?><a href="<?php bloginfo('url'); ?>/advisory-board">Click Here to read more...</a>
              </div>

               <div class="col-md-6 hidden-sm-down phone-container">
                  <img src="<?php bloginfo('template_directory'); ?>/images/home/phone-banner.png" class="pull-right" />
               </div>
          </div>

          </div>
       </div>
   </div>
</section>








  <section class="work-experience section">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">

          



                <div class="table-align left-img">

                  <div class="td">
                  <?php echo _acf_ricg_image( get_field('work_experience_image')); ?>
                  </div>

                  <div class="td">
                    <h2 class="title bdr-btm">Work <span class="em">Experience</span></h2>
                    <?php the_field('work_experience'); ?>
                    <a href="<?php the_field('work_experience_video_url'); ?>" class="btn btn-primary" target="_blank">Find Out More</a>
                  </div>
                  
                </div>



                 
             </div><!-- col-xs-12 -->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>

<section class="section icons">
 <div class="container">
  <div class="row">
      <div class="col-sm-12">
    
         <div class="row">
              <div class="col-xs-4">
                  <div class="feature-box fbox-center">
                    <div class="fbox-icon">
                      <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/icons/graduates.png" alt="Our Team" width="86" height="86"></a>
                    </div>
                    <h3>
                    <span class="nocolor"><div class="counter counter-lined"><span data-from="0" data-to="3000" data-refresh-interval="25" data-speed="1300">3000</span></div>+</span>


                    <br>graduates<br>worldwide</h3>

                  </div>
                </div>

                 <div class="col-xs-4 col-sm-4">
                  <div class="feature-box fbox-center">
                    <div class="fbox-icon">
                      <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/icons/campuses.png" alt="Our Team" width="86" height="86"></a>
                    </div>
                    <h3>        <div class="counter counter-lined"><span data-from="0" data-to="6" data-refresh-interval="25" data-speed="300">6</span></div>
<br>campuses<br>globally</h3>
                  </div>
                </div>


                 <div class="col-xs-4 col-sm-4">
                  <div class="feature-box fbox-center">
                    <div class="fbox-icon">
                      <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/icons/continents.png" alt="Our Team" width="86" height="86"></a>
                    </div>
                    <h3><span class="nocolor"><div class="counter counter-lined"><span data-from="0" data-to="4" data-refresh-interval="25" data-speed="1300">4</span></div></span><br>continents<br>covered</h3>
                  </div>
                </div>
          </div>

      </div>
    </div>  

 </div>
</section>


  <section class="section academy-tv">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">
    <div class="table-align right-img">
                <div class="td center">

                <h2 class="heading background"><span class="bg-line">Academy <span class="em">Tv</span></span></h2>
                    <div class="tleft"><?php the_field('academy_tv'); ?></div>
                    <a href="<?php bloginfo('url'); ?>/academy-tv" class="btn btn-primary topmargin-sm">Watch Videos Now</a>
                 </div>

                 <div class="td"><img src="<?php bloginfo('template_directory'); ?>/images/home/academy-tv-thumb.jpg" alt="Academy TV" class="img-responisve"></div>

               </div>  
             </div><!-- col-xs-12 -->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
