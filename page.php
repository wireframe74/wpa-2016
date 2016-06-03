<?php

/* Template Name: Student of the Month */


 get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<section class="about border-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="title right-align"><?php the_title(''); ?></h2>
        <?php edit_post_link(); ?>
      </div>
    </div>
  </div>
</section>

<section class="starting-a-business nobottommargin">
<div class="container">
   <div class="row">

      <div class="col-sm-10">
        <?php if ( has_post_thumbnail() )  :?>
          <div class="row table-align no-padding bottommargin">
            <div class="col-sm-6 td">
            <?php the_post_thumbnail(); ?>
            </div>

            <div class="col-sm-6 td business-intro  page-intro center">
            <p><?php the_field('intro'); ?></p>
            </div>
          </div>
        <?php endif; ?>
        </div> <!-- span -->

<div class="clearfix"></div>
<?php if($post->post_content!="") : ?>
<?php if(get_field('select_colums') == '1' )  : ?>
<div class="col-xs-12 bottommargin  ">
<?php elseif(get_field('select_colums') == '2') :?>
<div class="column-2 bottommargin ">
<?php elseif(get_field('select_colums') == '4') :?>
<div class="column-4 bottommargin">
<?php else :?>
<div class="column-3 bottommargin">
<?php endif;?>
<?php the_content(); ?>
</div>


</div>
</div>

<?php endif;?>
</section>

<?php if(get_field('form_embed')) : ?>
  <section class="page-form bottommargin">
   <div class="container">
      <div class="row">
      <div class="col-xs-12">
        <?php the_field('form_embed'); ?>
      </div>
    </div>

   </div>
  </section>
<?php endif; ?>

<?php endwhile; endif; rewind_posts(); ?>
<?php get_footer(); ?>