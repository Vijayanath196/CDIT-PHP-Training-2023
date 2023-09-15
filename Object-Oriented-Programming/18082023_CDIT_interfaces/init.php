<?php
 include_once("BasicCustomer.php");
 include_once("PremiumCustomer.php");

$basicCustomer = new BasicCustomer(1234);
echo $basicCustomer->paymentByCard()."\n";
echo $basicCustomer->paymentByGpay()."\n";;

$premiumCustomer = new PremiumCustomer(1234);
echo $premiumCustomer->paymentByCard()."\n";
echo $premiumCustomer->paymentByGpay()."\n";

?>