<?php

/* Template Name: Inspire */


 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="about border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">

              <h2 class="title right-align">Success <span class="em"> Stories</span></h2>

            <div class="center topmargin-lg">
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
            </div>

      <section class="clearfix success-stories-wrap topmargin bottommargin">

          <?php
            
           if( have_rows('profile') ): $i = 0; while ( have_rows('profile') )  : the_row(); ?>
            <?php $imageOne = get_sub_field('thumbnail');
         

            $slug = get_sub_field('name');
            if( $imageOne ): 
           
            ?>
            <?php  $i++; ?>
            <div class="col-xs-6 col-md-5ths center profile-item">


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
        <h2>Student<span class="lrg"><br>Showcase</span></h2>
        </div>

          <div class="col-md-4 center td" >
          
         <?php the_post_thumbnail(); ?>

            <img src="<?php bloginfo('template_directory'); ?>/images/custom/inspire/polaroid.png" />
         </div>

         <div class="col-md-4 td" >
        <a href="http://www.weddingacademylive.com/student-showcase/" target="_blank" class="btn btn-primary btn-large">Vist the Showcase</a>         
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
                      <?php the_field('student_of_the_month_text'); ?>

                      <a href="<?php bloginfo('url'); ?>/student-of-the-month" class="btn btn-secondary">read more about student of the month</a>

                  </div>

                  <div class="td">
                    
                   
                    <?php $Img = get_field('student_of_the_month_image'); ?>
         <img src="<?php echo $Img['sizes']['medium']; ?>" alt="Student of the Month">
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

<?php 
$args = array(
'page_id'       => 554,
'post_type' => 'page', 
);
$query = new WP_Query( $args ); ?>

<?php  
if ( $query->have_posts() )  : while ( $query->have_posts() ) : $query->the_post(); ?>

<?php $count++; ?>

  <section class="gallery border-top bottommargin">
      <div class="container">
          <div class="row">
             <div class="col-xs-12">
               <h2 class="title right-align">Styled <span class="em"> Shoot</span></h2>

        <div class="topmargin bottommargin">
            <?php the_content(); ?>
        </div>

        <div class="row flex">
  
          <?php   if( have_rows('profile') ): $i = 0; while ( have_rows('profile') ) : the_row(); ?>
          <?php $image = get_sub_field('head_shot'); ?>

             <?php  $i++; ?>

              <div class="col-xs-3">
                 <button data-toggle="modal" data-target=".gallery-<?php echo $i; ?>"> 
                 <img src=" <?php echo $image['sizes']['gallery-thumb']; ?>" alt="<?php the_sub_field('name'); ?>">
                </button>
            </div>
          <?php if($i==3): ?>

       <div class="col-xs-3">
           <a href="<?php bloginfo('url'); ?>/styled-shoot">
           <img src="<?php bloginfo('template_directory'); ?>/images/custom/inspire/styled-shoot-image.gif" alt=""></a>
        </div>

         <?php  break; endif; ?>
          <?php endwhile; ?>

            

           <?php endif;  ?>

          

        </div>



             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>

  <?php endwhile; ?>
<?php endif; ?>
<?php rewind_posts(); ?>



<?php 
$args = array(
'page_id'       => 554,
'post_type' => 'page', 
);
$query = new WP_Query( $args ); ?>

<?php  
if ( $query->have_posts() )  : while ( $query->have_posts() ) : $query->the_post(); ?>



      <?php
     
       if( have_rows('profile') ):  $j = 0; while ( have_rows('profile') ) : the_row(); ?>
      <?php $imageOne = get_sub_field('head_shot');
      $slug = get_sub_field('name');
      if( $imageOne ):
      ?>

     <?php  $j++; ?>
     


             <div class="modal fade gallery-enlarge gallery-<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                            <img class="profile-img" src="<?php echo $imageOne['sizes']['large']; ?>" alt="<?php the_sub_field('name'); ?>">
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


          <?php if($j==3): ?><?php  break; endif; ?>


                        <?php endif; ?>
            <?php endwhile; endif;  ?>

<?php endwhile; ?>
<?php endif; ?>
<?php rewind_posts(); ?>



<?php get_footer(); ?>
