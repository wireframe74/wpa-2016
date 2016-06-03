<?php

/* Template Name: Academy TV */


 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="">
      <div class="container">
          <div class="row">
             <div class="col-sm-12">


              <section class="clearfix table-align notopmargin section topmargin-lg bottommargin-lg">
                <div class="col-sm-6 td">
                  <h2><span class="em">Academy </span>TV</h2>
                  <?php the_content(); ?>
                  <?php edit_post_link(); ?>
                </div>

                <div class="col-sm-6 td">
                  <?php the_post_thumbnail( 'full' ); ?>
                </div>
              </section>


             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>
  
  <?php endwhile; endif; rewind_posts(); ?>


  <section class="tutors border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12 center">
              <h2 class="title">Watch Our Videos</h2>


        <div class="clearfix bottommargin">
  
              <?php 
              $args = array(
              'paged'         => $paged, 
              'order'         => 'desc',
              'orderby' => 'date',
              'post_type' => 'academy-tv',
              'posts_per_page'   => '15',
              );

              $query = new WP_Query( $args );

              $max_page = $query->max_num_pages;

              while ($query->have_posts()) : $query->the_post(); 
              ?>

             <?php $image = get_field('video_thumbnail'); ?>
      
                        
            <article class="col-xs-6 col-sm-3 center thumb-itm">
            <a href="<?php the_field('video_url'); ?>" data-lightbox="iframe">
               <?php echo _acf_ricg_image( get_field('video_thumbnail')); ?> 
              <h3><?php the_title(); ?></h3>
              <p><a href="<?php the_field('video_url'); ?>" data-lightbox="iframe">watch now</a></p>
              </a>
            </article>

            


            <?php endwhile; ?>

             <?php  $big = 999999999; // need an unlikely integer
            echo '<div class="pagination">';
            echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $max_page
            ) );  
            echo '</div>';  ?>


            <?php rewind_posts(); ?>


        </div>


             </div><!-- span-->
          </div> <!-- .row -->
      </div><!-- .container -->
  </section>
<?php get_footer(); ?>
