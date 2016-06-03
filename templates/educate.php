<?php

/* Template Name: Educate */


 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <section class="light-beige-bg nobottommargin section">
       <div class="container">
           <div class="row">
              <div class="col-sm-12">

              <?php $image = get_field('webinar_image'); ?>

                   <div class="table-align left-img">
                      <div class="td">
                          <img src=" <?php echo $image['sizes']['large']; ?>" alt="<?php the_title(); ?>">
                      </div>

                      <div class="td tright">
                        <h2 class="nobottommargin">Free <span class="em">Webinars</span></h2>
                        <?php the_field('webinar_text'); ?>
                      </div>
                 </div>
              <?php edit_post_link( ); ?>
              </div>
           </div>
       </div>
    </section>



    <section class="topmargin section">
       <div class="container">
           <div class="row">
              <div class="col-sm-12">

                   <div class="table-align left-img">
                      <div class="td">
                      <h2>Trend <span class="em">Report</span></h2>
                        <?php the_field('trend_report_text'); ?>
                        <a href="<?php bloginfo('url'); ?>/trend-report" class="btn btn-secondary">Download Report</a>
                      </div>

                      <div class="td tright">
                       <?php $image = get_field('trend_report_image'); ?>
                       <img src=" <?php echo $image['sizes']['large']; ?>" alt="<?php the_title(); ?>">
                      </div>
                 </div>
              </div>
           </div>
       </div>
    </section>


    <section class="ebook-worksheets notopmargin">
       <div class="container-fluid">
           <div class="row">

             <a class="col-sm-6 blur-bg-no-width" href="<?php bloginfo('url'); ?>/ebook-registration/">
                 <div class="text-wrap">
                    <h3>Ebooks and Worksheets</h3>
                     <?php the_field('ebooks_text'); ?>
                 </div>
             </a>

             <a class="col-sm-6 primary-bg-no-width" href="<?php bloginfo('url'); ?>/ebook-registration/">
              <div class="text-wrap">
                <h3 class="center">Read More About <br>Our GiveAways</h3>
              </div>
             </a>


            
              </div>
           </div>
       </div>
    </section>



    <section class="topmargin section wedding-business-magazine">
       <div class="container">
           <div class="row">
              <div class="col-sm-12">

                   <div class="table-align left-img">
                      <div class="td">
                       <?php $image = get_field('wedding_business_magazine_image'); ?>
                       <img src=" <?php echo $image['sizes']['large']; ?>" alt="Wedding Business Magazine">
                      </div>

                      <div class="td tright">
                        <h2>WEDDING BUSINESS MAGAZINE</span></h2>
                        <?php the_field('wedding_business_magazine_text'); ?>
                        <a href="http://www.weddingacademylive.com/the-wedding-business-magazine/" target="_blank" class="btn btn-primary">Read More</a>
                      </div>
                 </div>
              </div>
           </div>
       </div>
    </section>


<section class="about border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">

              <h2 class="title right-align">Industry <span class="em"> Links</span></h2>




   
    <section class="clearfix topmargin-lg row bottommargin">

          <?php
            
           if( have_rows('profile') ):  while ( have_rows('profile') )  : the_row(); ?>
            <?php $imageOne = get_sub_field('thumbnail');
            if( $imageOne ): 
              ?>
         
            <div class="col-sm-4 center profile-item">

                <a data-toggle="modal" href="<?php the_sub_field('url'); ?>" target="_blank"> 
                    <img class="profile-img" src="<?php echo $imageOne['sizes']['thumbnail']; ?>" alt="<?php the_sub_field('name'); ?>">
                <h3><?php the_sub_field('name'); ?></h3>
                <?php the_sub_field('description'); ?>

                </a>
            </div>



            <?php endif; ?>
            <?php endwhile; endif;  ?>

        </section>



             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>



<?php edit_post_link(); ?>

<?php endwhile; ?>
<?php endif; ?>





<?php get_footer(); ?>
