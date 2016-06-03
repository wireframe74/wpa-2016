<?php



 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="about border-top">
      <div class="container">
          <div class="row">
             <div class="col-sm-12 center">

              <h2 class="title"><?php the_title(); ?></h2>

              <section class="clearfix topmargin-sm bottommargin-lg">
                <div class="col-sm-12">

                 <?php if(get_field('intro')) : ?>
                  <div class="bottommargin-lg">
                   <?php the_field('intro'); ?>
                 </div>
                <?php endif; ?>

                  <div class="videoWrapper">
                       <?php the_content(); ?>
                  </div>   
                  
                  <?php edit_post_link(); ?>
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
              <h2 class="title">Google Hangouts</h2>


        <div class="clearfix bottommargin">
  
              <?php 
              $args = array(
              'post_type' => 'academy-tv',
              'order'         => 'asc',
              'posts_per_page'   => '15',
              );

              $query = new WP_Query( $args );
              $max_page = $query->max_num_pages;
              while ($query->have_posts()) : $query->the_post(); 
              ?>

             <?php $image = get_field('video_thumbnail'); ?>
      
                        
            <article class="col-xs-6 col-sm-3 center thumb-itm">
            <a href="<?php the_permalink(); ?>">
              <img src=" <?php echo $image['sizes']['video-thumb']; ?>" alt="<?php the_title(); ?>">
              <h3><?php the_title(); ?></h3>
              <p><a href="<?php the_field('url'); ?>">watch now</a></p>
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

  <style>
  .videoWrapper {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  padding-top: 25px;
  height: 0;
}
.videoWrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}</style>
<?php get_footer(); ?>
