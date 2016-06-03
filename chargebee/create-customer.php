<?php
require 'lib/ChargeBee.php';

$schedule = $_POST['schedule'];
$schedule_day_of_month = $_POST['schedule-day-of-month'];
$schedule_day_of_week = $_POST['schedule-day-of-week'];//:Monday, May 9
$schedule_day_of_bi_week = $_POST['schedule-day-of-bi-week'];//:Monday, May 16
$title = $_POST['title'];//:Mrs.
$first_name = $_POST['first_name'];//:
$last_name = $_POST['last_name'];//:
$email_address = $_POST['email_address'];//:
$telephone_number = $_POST['telephone_number'];//:
$country_code = $_POST['country_code'];//:AU
$address1 = $_POST['address1'];//:
$address2 = $_POST['address2'];//:
$city = $_POST['city'];//:
$province_code = $_POST['province_code'];//:ACT
$postal_code = $_POST['postal_code'];

ChargeBee_Environment::configure("aawep-test",
  "test_CogVXacu27TwlBhh1rMcdq3yc9CZXK0U1B");
try {
$result = ChargeBee_Customer::create(array(
	"firstName" => $first_name,
	"lastName" => $last_name,
	"email" => $email_address,
	"billingAddress" => array(
		"firstName" => $first_name,
		"lastName" => $last_name,
		"line1" => $address1,
		"line2" => $address2,
		"city" => $city,
		"phone" => $telephone_number,
		"email" => $email_address,
		"state" => $province_code,
		"zip" => $postal_code,
		"country" => $country_code
	)));
	$customer = $result->customer();
	$id = $customer->id;
	$card = $result->card();
	$card_status = $card->card_status;
	if ($card_status != "valid") {
		$result = ChargeBee_HostedPage::updatePaymentMethod(array(
			"customer" => array("id" => $id),
				"embed" => "true",
				"redirectUrl" => home_url().'/chargebee/create-subscription',
				"cancelUrl" => home_url().'/chargebee/create-customer'));
		$hosted_Page = $result->hostedPage();
		header("Location:$hosted_Page->url");
	}
/*	
	$result = ChargeBee_Subscription::createForCustomer($id, array(
		"planId" => "certificate-in-wedding-planning:-full-price"
		));
	$subscription = $result->subscription();
	$invoice = $result->invoice();
	$subscription_id = $subscription->id;
	$result = ChargeBee_HostedPage::checkoutExisting(array(
		"subscription" => array(
			"id" => $subscription_id,
			"planId" => "certificate-in-wedding-planning:-full-price" 
	)));
	$hosted_page = $result->hostedPage();
	$url = $hosted_page->url;
	echo $url;
	*/
	exit();
} catch (ChargeBee_InvalidRequestException $e) {
	echo $e->getMessage();
	exit();

} catch (Exception $e) {
	echo $e->getMessage();
	exit();
}
?>


