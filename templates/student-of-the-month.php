<?php

/* Template Name: Student of the Month */


 get_header(); ?>

<?php 
$args = array(
'post_type' => 'student-of-the-month',
'posts_per_page'   => '1',
);

$query = new WP_Query( $args );
$max_page = $query->max_num_pages;
while ($query->have_posts()) : $query->the_post(); 
?>

<section class="about border-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="title right-align">Student of<span class="em"> the Month</span></h2>
      </div>
    </div>
  </div>
</section>

<section class="starting-a-business bottommargin">
<div class="container">
   <div class="row">
      <div class="col-sm-10  col-sm-offset-1">

            <div class="row table-align no-padding bottommargin">
                 <div class="col-sm-6 td">
                 <?php $image = get_field('thumbnail'); ?>
                 <?php echo _acf_ricg_image( get_field('thumbnail')); ?> 
                 </div>

                 <div class="col-sm-6 td business-intro center">

                 <h2 class="center">
                 <span class="em"><?php the_title(''); ?></span>
                 </h2>

                 <?php the_field('intro'); ?>
                 </div>

                
            </div>
        </div> <!-- span -->
<div class="clearfix"></div>

         <div class="column-3 topmargin-sm">
         <?php the_content(); ?>
         </div>

         </div>
         </div>
         </section>
<?php endwhile; rewind_posts(); ?>

 <section class="tutors border-top topmargin-lg">
      <div class="container">
          <div class="row">
             <div class="col-sm-12 center">
              <h2 class="title">Archive</h2>


        <div class="clearfix bottommargin">
  
              <?php 
              $args = array(
              'paged'         => $paged, 
              'order'         => 'desc',
              'post_type' => 'student-of-the-month',
              'posts_per_page'   => '15',
              'offset' => '1'
              );

              $query = new WP_Query( $args );

              $max_page = $query->max_num_pages;

              while ($query->have_posts()) : $query->the_post(); 
              ?>

             <?php $image = get_field('thumbnail'); ?>
      
                        
            <article class="col-sm-5ths center thumb-itm">
            <a href="<?php the_permalink(); ?>">
              <img src=" <?php echo $image['sizes']['medium']; ?>" alt="<?php the_title(); ?>">
              <h3><?php the_title(); ?></h3>
              <p><a href="<?php the_permalink(); ?>">view profile</a></p>
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