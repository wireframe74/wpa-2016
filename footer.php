<?php if(is_page('about')) : ?>


<?php 
$args = array(
'page_id'       => 8,
'post_type' => 'page', 
);
$query = new WP_Query( $args ); ?>

<?php  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<section class="advisory-board blur-bg nobottommargin section">
		   <div class="container">
		       <div class="row">
		          <div class="col-sm-12">

		          <div class="row academy-wrap">
		              <div class="col-md-6 pull-left">
		                 <div class="vertical-align">
		                   <?php the_field('advisory_board'); ?>...<a href="#">Click Here to read more...</a>
		                 </div>
		              </div>

		               <div class="col-md-6">
		                  <img src="<?php bloginfo('template_directory'); ?>/images/home/phone-banner.png" class="pull-right" />
		               </div>
		          </div>
		          
		          </div>
		       </div>
		   </div>
		</section>
	<?php endwhile; ?>
	<?php endif; ?>
<?php endif; ?>


</div><!-- content -->



 <footer id="footer">
    <div class="container">

       <div class="row">
           <div class="col-sm-12">
              <h2 class="title">Receive our monthly newsletter and free e-books</h2>
           </div>
      </div>

       <div class="row">
           <div class="col-sm-12">
               
                 <div class="row">
                   <div class="col-sm-4"><?php the_field('footer_text', 'option'); ?>
                   </div>

                    <div class="col-sm-8">
                      <form action="" class="form-inline" role="form">
                        <input type="email" placeholder="Enter Email Address">
                        <input type="submit" value="Subscribe - it’s Free!">
                      </form>
                    </div>
                </div><!-- row -->

            </div><!-- span -->
          </div><!-- row -->

    </div><!-- container -->

     
      <div id="copyrights">
        <div class="container clearfix">
            <div class="row">
               <div class="col-sm-12">
                    <nav class=="footer-menu">
					<?php html5blank_nav(); ?>
					</nav><!-- #primary-menu end -->
                </div>
            </div>
        </div>
      </div><!-- #copyrights end -->
    </footer>

	</div><!-- #wrapper end -->



<div id="gotoTop" class="icon-angle-up"></div>




<?php wp_footer(); ?>

</body>
</html>