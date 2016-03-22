<?php

/* Template Name: Fees */


 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="about border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">
              <h2 class="title"><span class="em">Fees</span></h2>
             <div class="center topmargin">
                <?php the_content(); ?>
             </div>
             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>



  

<?php edit_post_link(); ?>
<?php endwhile; ?>
<?php endif; ?>




<div class="container">
      <section class="section row clearfix">
        
        <?php
      $args = array(
      'post_parent'  => 4,  
      'post_type'   => 'page',
      'order'               => 'ASC',
      'orderby'             => 'page_order',
      'posts_per_page'=> 100  
      );

      $query = new WP_Query( $args );
      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


      <?php $image = get_field('thumbnail');  ?>


      <article class="table-align course-listing-itm col-sm-12 pull-left">
        <div class="row">
            
            <div class="td col-sm-4">
              <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php the_title(); ?>">
            </div>

            <div class="td col-sm-8 tright">
              <div class="row">
                <div class="col-sm-6 col-md-8">
                  <h3><?php the_title(); ?></h3>
                  <?php the_field('intro'); ?>
                </div>
                <div class="col-sm-6 col-md-4 secondary-bg">
                    <p><span class="full-price price"><?php the_field('full_price'); ?> AED</span><br>
                    OR <span class="price"><?php the_field('subscription_price'); ?>AED</span> MONTHLY
                    </p>
                </div>
              </div>
            </div>
          </div>
      </article>

      <?php endwhile; endif; rewind_posts(); ?>



      </section>
</div>
<?php get_footer(); ?>