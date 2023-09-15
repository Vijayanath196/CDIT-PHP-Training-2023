<?php

class Customer{

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

}


?>