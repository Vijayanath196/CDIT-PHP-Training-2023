<?php
 include_once("BasicCustomer.php");
 include_once("PremiumCustomer.php");


$basicCustomer = new BasicCustomer(1234);
echo $basicCustomer->getDiscount();

$premiumCustomer = new PremiumCustomer(1234);
echo $premiumCustomer->getDiscount();

?>