<?php

include_once("Customer.php");

class BasicCustomer extends Customer{

    public function getDiscount(){
        return 5;
    }


}

?>