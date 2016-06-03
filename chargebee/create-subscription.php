<?php
require 'lib/ChargeBee.php';
ChargeBee_Environment::configure("aawep-test",
  "test_CogVXacu27TwlBhh1rMcdq3yc9CZXK0U1B");

$hostedPageId = $_GET['id'];
$status = $_GET['state'];

try {
	if ($status == "succeeded") {
		$result = ChargeBee_HostedPage::retrieve($hostedPageId);
		$hostedPage = $result->hostedPage();
		if ($hostedPage->state != "succeeded") {
			header("HTTP/1.0 400 Error");
			include($_SERVER["DOCUMENT_ROOT"]."/error_pages/400.html");
			return;
		}
		$content = $hostedPage->content();
		$customerId = $content->customer()->id;
		$result = ChargeBee_Subscription::createForCustomer($customerId,
			array("planId"=>"certificate-in-wedding-planning:-full-price"));
		$subscription = $result->subscription();
		header("Location:".home_url().'/chargebee/thankyou');
	}
	exit();

} catch (ChargeBee_InvalidRequestException $e) {
	echo $e->getMessage();
	exit();

} catch (Exception $e) {
	echo $e->getMessage();
	exit();
}
?>


