<?php

/* Template Name: Inspire */


 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="about border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">

              <h2 class="title right-align">Success <span class="em"> Stories</span></h2>

  <div class="center topmargin-sm">
   <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>

   <?php edit_post_link(); ?>

   </div>

      <section class="clearfix topmargin-sm bottommargin">

          <?php
            
           if( have_rows('profile') ): $i = 0; while ( have_rows('profile') )  : the_row(); ?>
            <?php $imageOne = get_sub_field('thumbnail');
         

            $slug = get_sub_field('name');
            if( $imageOne ): 
           
            ?>
            <?php  $i++; ?>
            <div class="col-sm-5ths center profile-item">


                <button data-toggle="modal" data-target=".section-<?php echo $i; ?>"> 
                    <img class="profile-img" src="<?php echo $imageOne['sizes']['thumbnail']; ?>" alt="<?php the_sub_field('name'); ?>">
                <h3><?php the_sub_field('name'); ?></h3>
                <?php echo custom_field_excerpt(); ?>

                </button>
            </div>



            <?php endif; ?>
            <?php endwhile; endif;  ?>

        </section>


    

             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>




<section class="blur-bg student-success-wrap section">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 center">
        <div class="row table-align">

        <div class="col-md-4 td">
        <h2>Our Student's<span class="lrg"><br>Success</span></h2>
        </div>

          <div class="col-md-4 center td" >
            <img src="<?php bloginfo('template_directory'); ?>/images/custom/inspire/polaroid.png" />
         </div>

         <div class="col-md-4 td" >
        <a href="#" class="btn btn-primary btn-large">Vist the Showcase</a>         
        </div>

   

            


        </div>
      </div>
    </div>
  </div>
</section>




  <section class="student-month-wrap section">
      <div class="container">
          <div class="row">
             <div class="col-sm-10 col-sm-offset-1">

                <div class="table-align">

                  <div class="td">

                      <h2>Student of the <span class="em">Month</span></h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                      <a href="#" class="btn btn-secondary">read more about student of the month</a>

                  </div>

                  <div class="td">
                    
                   
                    <img src="<?php bloginfo('template_directory'); ?>/images/home/work-experience.png" alt="" class="img-responisve">
                  </div>
                  
                </div>



                 
             </div><!-- col-xs-12 -->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>




<?php edit_post_link(); ?>

<?php endwhile; ?>
<?php endif; ?>
<?php rewind_posts(); ?>




<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


      <?php
     
       if( have_rows('profile') ):  $j = 0; while ( have_rows('profile') ) : the_row(); ?>
      <?php $imageOne = get_sub_field('thumbnail');
      $slug = get_sub_field('name');
      if( $imageOne ):
      ?>

     <?php  $j++; ?>
     


             <div class="modal fade section-<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title center" id="myModalLabel"><?php the_sub_field('name'); ?></h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                            <div class="col-sm-12 center">
                                            <img class="profile-img" src="<?php echo $imageOne['sizes']['medium']; ?>" alt="<?php the_sub_field('name'); ?>">
                                            <div class="margintop-sm">
                                              <?php the_sub_field('description'); ?>
                                            </div>
                                            </div>
                                            
                                             
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endif; ?>
            <?php endwhile; endif;  ?>

<?php endwhile; ?>
<?php endif; ?>
<?php rewind_posts(); ?>

<?php get_footer(); ?>
