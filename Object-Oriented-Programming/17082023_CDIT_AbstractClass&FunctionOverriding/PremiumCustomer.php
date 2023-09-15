<?php

include_once("Customer.php");

class PremiumCustomer extends Customer{

    public function getDiscount(){
        return 10;
    }
}

?>