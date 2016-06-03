<div class="grav-form-wrap enrol-section section-certificate-in-event-design">
<div class="rel-wrap"><div class="form-elem">

<div class="container">
<div class="row">
    <div class="col-sm-12 center">
    <a href="#" class="btn-close">&times;</span></a>
    <h2 class="title center-align">certificate in<span class="em"><br>Event Design</span></h2>
    </div>
</div>
</div>


       


<section class="payment-wrap grav-payments container" style="display: block;">

<div class="row center">

<?php
$category = get_field('category');
$args3 = array( 
'post_type' => 'product', 
'posts_per_page' => 4, 
'product_cat' => 'certificate-in-event-design', 
'orderby' => 'menu_order', 
'order'   => 'ASC' );
$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post(); 
?>

             

<?php if(get_field('payment_plan_option') == 'full' )  : ?>

            <div class="col-sm-3 center price-option">
                <div>
                <h3>Pay in Full</h3>
               
                <p class="price"><?php echo $product->get_price(); ?> AED
                  <br><span><?php the_field('pink_text'); ?></span>
                  </p>
                   
                 <p> <?php the_field('payment_snippet'); ?></p>

                </div>
            </div>


   <?php elseif(get_field('payment_plan_option') == 'two_months' ): ?>

            <div class="col-sm-3 center price-option">
                <div>
                <h3>Pay Half now &amp; <br> half in 3 months</h3>

                  <p class="price"><?php echo $product->get_price(); ?> AED
                  <br><span><?php the_field('pink_text'); ?></span>
                  </p>
                  <p> <?php the_field('payment_snippet'); ?></p>
                

                </div>
             
            </div>


    <?php elseif(get_field('payment_plan_option') == 'four_months' ): ?>

            <div class="col-sm-3 center price-option">
              <div>

              <h3>4 month payment <br> plan</h3> 

                <p class="price"><?php echo $product->get_price(); ?> AED
                <br><span><?php the_field('pink_text'); ?></span>
                </p>
                <p> <?php the_field('payment_snippet'); ?></p>
             

              </div>

            
            </div>

    <?php elseif(get_field('payment_plan_option') == 'ten_months' )  : ?>

            <div class="col-sm-3 center price-option">
              <div>
              <h3>10 month payment <br> plan</h3>

               <p class="price"><?php echo $product->get_price(); ?> AED
                <br><span><?php the_field('pink_text'); ?></span>
                </p>
               <p> <?php the_field('payment_snippet'); ?></p>
             
              
              </div>

          
            </div>

    <?php endif; ?> 
  <?php endwhile; rewind_posts(); ?>

      <a href="<?php bloginfo('url'); ?>/courses/certificate-in-event-design" class="btn btn-primary">View Course</a>

          </div>

        </section>



  </div>
  </div>  </div>