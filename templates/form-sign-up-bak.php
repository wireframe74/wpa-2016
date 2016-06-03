<form method="post" id="chargebee-sign-up"  novalidate="novalidate" class="form-inline" action="<?php echo home_url().'/chargebee/create-customer';  ?>">
<?php include_once(TEMPLATEPATH .'/inc/form/select-course.php');  ?>
<?php include_once(TEMPLATEPATH .'/inc/form/select-payment-dates.php');  ?>
<?php include_once(TEMPLATEPATH .'/inc/form/address-details.php');  ?>



<input type="submit" id="chargebee-submit" class="button btn pull-left" value="Submit">
<small><a href="#">Privacy Policy and Enrolment Agreement</a></small>
</div>
         
</form>


