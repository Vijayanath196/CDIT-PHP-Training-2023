<?php

include_once("Person.php");

abstract class Customer extends Person{

    private $customerCode;

    public function __construct($customerCode) {
        $this->customerCode = $customerCode;
    }

    public function setCustomerCode($customerCode){
        $this->customerCode = $customerCode;
    }

    public function getCustomerCode(){
        return $this->customerCode;
    }

    abstract public function getDiscount();
}


?>