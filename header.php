<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	

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
	  
        <header id="header" class="no-sticky full-header">
            <div id="header-wrap">
                <div class="container clearfix">
                   
                    <div id="logo">
                        <a href="<?php bloginfo('url'); ?>" class="standard-logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo"></a>
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
  <img src=" <?php echo $headerImg['url']; ?>" alt="<?php the_title(); ?>">
 
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


<li><a target="_blank" href="#https://www.instagram.com/WeddingAcademyLive/"><i class="icon-instagram"></i><span></span></a></li>
<li><a target="_blank" href="https://twitter.com/WedAcademyUAE "><i class="icon-twitter"></i><span></span></a></li>
<li><a target="_blank" href="https://www.facebook.com/ArabianWeddingAcademy/ "><i class="icon-facebook"></i><span></span></a></li>
<li><a target="_blank" href="ttp://www.youtube.com/ukawep "><i class="icon-youtube"></i><span></span></a></li>
     

            </ul>
        </div>
    </section>


<section class="connect container section">
  <div class="row">
    <div class="col-sm-12 col-md-4"><a class="btn btn-secondary" href="<?php bloginfo('url'); ?>/download-brochure">Download Brochure</a></div>
    <div class="col-sm-12 col-md-4"><p>Any questions? <a href="tel:+97145595716">call us!<br> +971 (4) 559 5716</a></p></div>
    <div class="col-sm-12 col-md-4"><a class="btn btn-primary" href="<?php bloginfo('url'); ?>/courses">Enrol Today</a></div>
  </div>
</section>



 <div class="content">





