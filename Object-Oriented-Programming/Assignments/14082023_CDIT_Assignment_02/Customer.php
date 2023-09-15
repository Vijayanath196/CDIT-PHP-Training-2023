<?php

class Customer {
    private $customerCode;
    private $customerName;
    private $phoneNumber;
    private $dateOfBirth;
    private $openingDate;
    private $isActive;

    public function __construct($customerCode, $customerName, $phoneNumber, $dateOfBirth, $openingDate, $isActive) {
        $this->customerCode = $customerCode;
        $this->customerName = $customerName;
        $this->phoneNumber  = $phoneNumber;
        $this->dateOfBirth  = $dateOfBirth;
        $this->openingDate  = $openingDate;
        $this->isActive     = $isActive;
    }

    public function setCustomerCode($customerCode){
        $this->customerCode = $customerCode;
    }

    public function setCustomerName($customerName){
        $this->customerName = $customerName;
    }

    public function setPhoneNumber($phoneNumber){
            $this->phoneNumber = $phoneNumber;
    }

    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setOpeningDate($openingDate){
            $this->openingDate = $openingDate;        
    }

    public function setActive($isActive){
        $this->isActive = $isActive;
    }

    public function getCustomerCode(){
        return $this->customerCode;
    }

    public function getCustomerName(){
        return $this->customerName;
    }

    public function getPhoneNumber(){
        return $this->phoneNumber;
    }

    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }

    public function getOpeningDate(){
        return $this->openingDate;
    }

    public function getIsActive(){
        return $this->isActive;
    }
}

?>
