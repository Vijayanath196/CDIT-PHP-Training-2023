<?php

include_once("Customer.php");
include_once("PaymentMethod.php");

class PremiumCustomer extends Customer implements PaymentMethod{


    public function paymentByCard(){
        return "card(premium class)";
    }
    public function paymentByGpay(){
        return "gpay(premium class)";
    }
}

?>