<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">

<meta name="google-site-verification" content="ARgsUB0qDAkP2ziheD0lP5shsG0nJl1fgu-HMIZPuXM" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
  
<?php if(is_page('connect')) :?>
<script>
jQuery(document).ready(
function() {


$('.industry-news p:first-of-type').excerptize({
      numberOfCharacters:330, 
      cutOffAtWord:true, 
      showMoreText:'...',
      showLessText:''
      
});

});
</script>
<?php endif; ?>

<script> 
var $buoop = {c:2}; 
function $buo_f(){ 
 var e = document.createElement("script"); 
 e.src = "//browser-update.org/update.min.js"; 
 document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}
</script> 


  </head>


 <body <?php body_class('stretched no-transition'); ?>>






  <div id="wrapper" class="site-wrap clearfix">


    <div class="clear-menu-btn">
    <input type="checkbox">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
    </div>

  <nav id="body-nav">
  <?php html5blank_nav(); ?>
  </nav>


  <div class="push-wrap">
  </div><!-- push-wrap -->
    
        <header id="header" class="full-header">
            <div id="header-wrap">
                <div class="container clearfix">
                   
                    <div id="logo">
                        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/custom/logo.svg" alt="Logo"></a>
                    </div>

                   
                    <nav id="primary-menu">
          <?php html5blank_nav(); ?>
          </nav><!-- #primary-menu end -->

                </div>
            </div>
        </header><!-- #header end -->

<section class="header-image">

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php if (get_field('header_image')) :
  $headerImg = get_field('header_image'); ?>
  <?php echo _acf_ricg_image( get_field('header_image')); ?> 

 
  <?php else : ?>
  <img src="<?php header_image(); ?>" alt="" class="img-responsive">
  <?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
<?php rewind_posts(); ?>


    </section>

<section class="social">
<div class="container">
<ul class="social-links">
  <li class="icon-instagram"><a target="_blank" href="https://www.instagram.com/WeddingAcademyLive/"></a></li>
  <li class="icon-twitter"><a target="_blank" href="http://twitter.com/#!/ukawep"></a></li>
  <li class="icon-facebook"><a target="_blank" href="http://www.facebook.com/WeddingSchoolUK "></a></li>
  <li class="icon-youtube"><a target="_blank" href="http://www.youtube.com/ukawep "></a></li>
</ul>
</div>
</section>


<section class="connect container section">
  <div class="row">
    <div class="col-sm-12 col-md-4"><a class="btn btn-secondary" href="<?php bloginfo('url'); ?>/download-brochure">Download Brochure</a></div>
    <div class="col-sm-12 col-md-4"><p>Any questions? <a href="tel:+97145595716">call us!<br> 0845 868 3210</a></p></div>
    <div class="col-sm-12 col-md-4"><a class="btn btn-primary" href="<?php bloginfo('url'); ?>/courses">Enrol Today</a></div>
  </div>
</section>



 <div class="content">





