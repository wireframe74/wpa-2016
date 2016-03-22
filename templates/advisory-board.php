<?php

/* Template Name: Advisory Board */


 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">
              <h2><span class="em">Advisory</span> Board</h2>
             <div class="topmargin bottommargin">
                <?php the_content(); ?>
             </div>
             </div><!-- span-->


        
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>


<section class="section border-top">

  <div class="container">
          <div class="row">
          <div class="col xs-12 center"><h2 class="title">Make Sure to Check Them</h2></div>

   <?php if( have_rows('profile') ): $i = 0; while ( have_rows('profile') ) : the_row(); ?>
            <?php $imageOne = get_sub_field('thumbnail');
            if( $imageOne ): ?>

             <?php  $i++; ?>

              <div class="col-sm-3 center profile-item">
                 <button data-toggle="modal" data-target=".section-<?php echo $i; ?>"> 
                 <img src=" <?php echo $imageOne['sizes']['thumbnail']; ?>" alt="<?php the_sub_field('name'); ?>">
                <h3><?php the_sub_field('name'); ?></h3>
              
                </button>
            </div>

            <?php endif; ?>
            <?php endwhile; endif;  ?>



          </div> <!-- .row -->
      </div><!-- .container -->

  
</section>
  

<?php edit_post_link(); ?>
<?php endwhile; ?>
<?php endif; ?>


<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php

     
       if( have_rows('profile') ):  $j = 0; while ( have_rows('profile') ) : the_row(); ?>
      <?php $imageOne = get_sub_field('thumbnail');
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
                                            <img class="profile-img" src="<?php echo $imageOne['sizes']['thumbnail']; ?>" alt="<?php the_sub_field('name'); ?>">
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