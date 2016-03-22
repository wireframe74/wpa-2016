<?php

/* Template Name: About */


 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="about border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">

              <h2 class="title right-align">About our <span class="em"> Academy</span></h2>

  
        <div class="img-wrapper module">
                      <a href="<?php the_field('video_url'); ?>" data-lightbox="iframe" class="latest-hangout-link"></a>
                       <?php $imageOne = get_field('video_image'); ?>
                  <img src="<?php echo $imageOne['url']; ?>" alt="<?php the_title(); ?>">
              </div>


        <section class="clearfix table-align topmargin-sm section topmargin-lg bottommargin-lg">
          <div class="col-sm-6 td">
            <img src="<?php bloginfo('template_directory'); ?>/images/custom/about/fun-facts.png" alt="" class="alignleft">
          </div>

          <div class="col-sm-6 td">
            <?php the_field('fun_facts'); ?>
          </div>
        </section>


             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>



  <section class="tutors border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">

              <h2 class="title left-align">Our <span class="em"> Tutors</span></h2>


        <section class="clearfix bottommargin">

  
          <?php if( have_rows('profile') ): $i = 0; while ( have_rows('profile') ) : the_row(); ?>
            <?php $imageOne = get_sub_field('thumbnail');
            if( $imageOne ): ?>

             <?php  $i++; ?>

              <div class="col-sm-5ths center profile-item">
                 <button data-toggle="modal" data-target=".section-<?php echo $i; ?>"> 
                 <img src=" <?php echo $imageOne['sizes']['thumbnail']; ?>" alt="<?php the_sub_field('name'); ?>">
                <h3><?php the_sub_field('name'); ?></h3>
                   <?php the_sub_field('description'); ?>
                </button>
            </div>

            <?php endif; ?>
            <?php endwhile; endif;  ?>

        </section>


             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>


<section class="blur-bg partners section">
  <div class="container">
    <div class="row">
             <div class="col-sm-12 center">
        <div class="row">

        <h3 class="bottommargin-sm">Partners</h3>

            <?php if( have_rows('partners') ): while ( have_rows('partners') ) : the_row(); ?>
            <?php $imageTwo = get_sub_field('thumbnail');
            if( $imageTwo ): ?>

            <div class="col-sm-5ths center">
              <a target="_blank" href="<?php the_sub_field('website_link'); ?>">
                <img src=" <?php echo $imageTwo['sizes']['thumbnail']; ?>" alt="<?php the_sub_field('name'); ?>">
                <h3><?php the_sub_field('name'); ?></h3>
              </a>
            </div>

            <?php endif; ?>
            <?php endwhile; endif;  ?>


        </div>
      </div>
    </div>
  </div>
</section>




<section class="values section">
  <div class="container">
    <div class="row">
       <div class="col-sm-12">
        <div class="row center">

        <h3 class="bottommargin-sm">Our Core Values</h3>
         
            <?php if( have_rows('core_values') ): while ( have_rows('core_values') ) : the_row(); ?>
            <?php $imageThree = get_sub_field('thumbnail');
            if( $imageThree ): ?>

            <div class="col-sm-5ths center">
            <img src=" <?php echo $imageThree['sizes']['thumbnail']; ?>" alt="<?php the_sub_field('name'); ?>">
            <h3><?php the_sub_field('name'); ?></h3>
            <p><?php the_sub_field('description'); ?></p>
            </div>

            <?php endif; ?>
            <?php endwhile; endif;  ?>

        </div>
      </div>
    </div>
  </div>
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
