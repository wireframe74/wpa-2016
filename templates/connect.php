<?php

/* Template Name: Connect */


 get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="academy-tv-section bottommargin">
       <div class="container">
           <div class="row">
              <div class="col-sm-12">

                  <h2><span class="em">Academy</span> TV</h2>
                  <?php the_field('academy_tv_text'); ?>

                  <div class="center notopmargin">
                  <?php $image = get_field('academy_tv_image'); ?>
                  <?php echo _acf_ricg_image(get_field('academy_tv_image')); ?>

                  <div class="clear-fix"></div>

                    <a href="<?php bloginfo('url'); ?>/academy-tv" class="btn btn-primary">Watch Now</a>
                  </div>

              </div>  
           </div>
       </div>
    </section>

    <section class="light-beige-bg nobottommargin wedbizhour section">
       <div class="container">
           <div class="row">
              <div class="col-sm-12">

              <h2>#ukawep <span>The latest tweets from #ukawep with Kylie &amp; Zoe </span></h2>

 <?php  // dynamic_sidebar('Tweets');  ?>



              <?php edit_post_link( ); ?>
              </div>
           </div>
       </div>
    </section>



    <section class="google-hangouts bottommargin section">
       <div class="container">
           <div class="row">
              <div class="col-sm-12">

              <?php $image = get_field('google_hangouts_image'); ?>

                   <div class="table-align left-img">
                      <div class="td">
                        <h2 class="nobottommargin"><span class="em">Google</span> Hangouts</h2>
                        <?php the_field('google_hangouts_text'); ?>
                        <a href="<?php bloginfo('url'); ?>/google-hangouts" class="btn btn-secondary">View Google Hangouts</a>
                      </div>

                      <div class="td">
                        <?php echo _acf_ricg_image(get_field('google_hangouts_image')); ?>
                      </div>
                 </div>
              <?php edit_post_link( ); ?>
              </div>
           </div>
       </div>
    </section>



 
    <section class="light-beige-bg nobottommargin">
       <div class="container">
           <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
             <a target="_blank" href="https://www.youtube.com/user/ukawep"><img src="<?php bloginfo('template_directory'); ?>/images/custom/connect/subscribe-channels.png" alt="Subscribe to Our Channel"></a>
              </div>
           </div>
       </div>
    </section>




    <section class="podcasts bottommargin section">
       <div class="container">
           <div class="row">
              <div class="col-sm-12">

                  <?php $image = get_field('podcasts_image'); ?>

                   <div class="table-align left-img">
                      <div class="td">
                        <?php echo _acf_ricg_image(get_field('podcasts_image')); ?>
                      </div>

                      <div class="td">
                         <h2 class="nobottommargin"><span class="em">Podcasts</span></h2>
                         <h3>The Business of Weddings Podcast Show</h3>
                        <?php the_field('podcasts_text'); ?>
                        <a href="<?php bloginfo('url'); ?>/podcasts" class="pull-right btn btn-secondary">Listen Now</a>

                      </div>
                 </div>
              <?php edit_post_link( ); ?>
              </div>
           </div>
       </div>
    </section>


<section class="about border-top">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h2 class="title right-align">Industry <span class="em"> News</span></h2>
</div>
</div>
</div>
</section>

<?php edit_post_link(); ?>
<?php endwhile; endif; rewind_posts(); ?>



<div class="container">
<div class="row industry-news">


<?php
$args = array(
'order'  => 'DESC',
'orderby' => 'date',
'post_type' => 'post',
'posts_per_page' =>2
);

$query = new WP_Query( $args );
if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); 
?>



    <div class="col-sm-10 news-row col-sm-offset-1">
      <div class="row">
        <div class="col-sm-12 col-md-3" data-animate="fadeIn"><img src="<?php bloginfo('template_directory'); ?>/images/custom/connect/post-image.jpg" alt="<?php the_title(); ?>"></div>
        <div class="col-sm-12 col-md-9"><h2><?php the_title(); ?></h2><?php the_content(); ?></div>
      </div>
    </div>


<?php endwhile; endif; rewind_posts(); ?>



</div>
</div>










<?php get_footer(); ?>
