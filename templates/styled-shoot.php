<?php

/* Template Name: Styled Shoot */


 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="about border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">
              <h2 class="title right-align">Styled <span class="em">Shoot</span></h2>
             </div><!-- span-->
         
               <section class="bottommargin col-sm-8">
                <?php the_content(); ?>
                
              </section>
            


          </div> <!-- .row -->
      </div><!-- .container -->
  </section>



  <section class="gallery bottommargin">
      <div class="container">



        <div class="row">
  
          <?php if( have_rows('profile') ): $i = 0; while ( have_rows('profile') ) : the_row(); ?>
            <?php $imageOne = get_sub_field('head_shot');
            if( $imageOne ): ?>

             <?php  $i++; ?>

              <div class="col-xs-3">
                 <button data-toggle="modal" data-target=".section-<?php echo $i; ?>"> 
                 <img src=" <?php echo $imageOne['sizes']['gallery-thumb']; ?>" alt="<?php the_sub_field('name'); ?>">
                </button>
            </div>

            <?php endif; ?>
            <?php endwhile; endif;  ?>

        </div>


<?php edit_post_link(); ?>

      </div><!-- .container -->
  </section>



<?php endwhile; endif; rewind_posts(); ?>




<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if( have_rows('profile') ):  $j = 0; while ( have_rows('profile') ) : the_row(); ?>

<?php $image = get_sub_field('head_shot'); ?>

     <?php  $j++; ?>
     


             <div class="modal gallery-enlarge fade section-<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                            <img class="profile-img" src="<?php echo $image['url']; ?>" alt="<?php the_sub_field('name'); ?>">
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

                    
            <?php endwhile; endif;  ?>

<?php endwhile; ?>
<?php endif; ?>
<?php rewind_posts(); ?>



<?php get_footer(); ?>
