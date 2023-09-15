<?php

include_once("Customer.php");
include_once("PaymentMethod.php");

class BasicCustomer extends Customer implements PaymentMethod{

   
    public function paymentByCard(){
        return "card(base class)";
    }
    public function paymentByGpay(){
        return "card(base class)";
    }

}

?>