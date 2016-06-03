<form method="post" id="chargebee-sign-up"  novalidate="novalidate" class="form-inline" action="<?php echo home_url().'/chargebee/create-customer';  ?>">

<?php include_once(TEMPLATEPATH .'/inc/form/select-course.php');  ?>
<?php include_once(TEMPLATEPATH .'/inc/form/select-payment-dates.php');  ?>
<?php include_once(TEMPLATEPATH .'/inc/form/address-details.php');  ?>

<div class="gform_footer col-xs-12">
<div id="description" style="">

<div id="full_description" style="display: none;"><p class="amounts">I agree to pay <b>$1198</b>—a savings of <b>$300!</b></p></div>

<div id="extended_description" style="display: none;">
<div id="extended_description_monthly" style="display: block;"><p class="amounts">I agree to pay a <b>deposit of $118</b> now, followed by 12 <b>monthly installments of $115</b> each, for a total of <b>$1498</b>.</p><p class="dates">Payments will be automatically charged to my card on the 2nd of each month, starting on June 2.</p></div>
<div id="extended_description_weekly" style="display: none;"><p class="amounts">I agree to pay a <b>deposit of $118</b> now, followed by 52 <b>weekly installments of $26.50</b> each, and a final payment of $2, for a total of <b>$1498</b>.</p><p class="dates">Payments will be automatically charged to my card one per week on Mondays, starting on Monday, May 9.</p></div>
<div id="extended_description_bi-weekly" style="display: none;"><p class="amounts">I agree to pay a <b>deposit of $118</b> now, followed by 26 <b>bi-weekly installments of $53</b> each, and a final payment of $2, for a total of <b>$1498</b>.</p><p class="dates">Payments will be automatically charged to my card every two weeks, starting on Monday, May 16.</p></div>
</div>

<div id="accelerated_description" style="">
<div id="accelerated_description_monthly" style="display: block;"><p class="amounts">I agree to pay a <b>deposit of $278</b> now, followed by 4 <b>monthly installments of $280</b> each, for a total of <b>$1398</b>.</p><p class="dates">Payments will be automatically charged to my card on the 2nd of each month, starting on June 2.</p></div>
<div id="accelerated_description_weekly" style="display: none;"><p class="amounts">I agree to pay a <b>deposit of $278</b> now, followed by 17 <b>weekly installments of $65.80</b> each, and a final payment of $1.40, for a total of <b>$1398</b>.</p><p class="dates">Payments will be automatically charged to my card once per week on Mondays, starting on Monday, May 9.</p></div>
<div id="accelerated_description_bi-weekly" style="display: none;"><p class="amounts">I agree to pay a <b>deposit of $278</b> now, followed by 9 <b>bi-weekly installments of $124.40</b> each, and a final payment of $0.40, for a total of <b>$1398</b>.</p><p class="dates">Payments will be automatically charged to my card every two weeks, starting on Monday, May 16.</p></div>

</div>

<div id="currency_description"><p>All prices are in Australian dollars.</p></div>
<div id="details_link" class="breakdown_details_link" style="display: none;"><p><a href="javascript:void(0);">Detailed Payment Breakdown</a></p></div>

<div id="disclaimers"></div>

</div>


<input type="submit" id="chargebee-submit" class="button btn pull-left" value="Submit">
<small><a href="#">Privacy Policy and Enrolment Agreement</a></small>
</div>
         
</form>
