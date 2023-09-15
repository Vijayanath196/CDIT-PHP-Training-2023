<?php

include_once("Customer.php");

class CustomerService{

    public static function createCustomer() {

      $customerCode  =  readline("Enter customer code: ");
      $customerName  =  readline("Enter customer name: ");
      $customerDob   =  readline("Enter date of birth (YYYY-MM-DD): ");
      $openingDate   =  readline("Enter opening date (YYYY-MM-DD): ");
      $currentDate   =  new DateTime();

      if($openingDate > $currentDate){
        echo "opening date cannot be in future.";
        exit();
      }

      $customerPhone =  readline("Enter phone number: ");
      if (!(preg_match('/^[0-9]{10}$/', $customerPhone))) {
        echo "invalid phone number";
        exit();
      }

      if($openingDate > $currentDate){
        echo "opening date cannot be in future.";
        exit();
      }

      $isActive      =  readline("Is the customer active? (Y/N): ");

      $customer = new Customer($customerCode,$customerName,$customerPhone,$customerDob,$openingDate,$isActive);
      return $customer;
    }

    public static function displayAllCustomers(array $customerList) {

        foreach($customerList as $customer) {
            
            echo( " customer code : " .$customer->getCustomerCode() ."\n");
            echo( " customer name : " .$customer->getCustomerName() ."\n");
            echo( " phone number  : " .$customer->getPhoneNumber()  ."\n");
            echo( " date of birth : " .$customer->getDateOfBirth()  ."\n");
            echo( " opening date  : " .$customer->getOpeningDate()  ."\n");
            echo( " isactive      : " .$customer->getIsActive()     ."\n");
        }

    }

    public static function searchCustomerByPhoneNumber(array $customerList,$phoneNumber){

        foreach($customerList as $customer){
            if($customer->getPhoneNumber() == $phoneNumber){
                return $customer;
            }
        }
        return null;
    }

    public static function searchCustomerByCode(array $customerList,$customerCode){

        foreach($customerList as $customer){
            if($customer->getCustomerCode() == $customerCode){
                return $customer;
            }
        }
        return null;    
    }

    public static function displayPremiumCustomers(array $customerList){

        echo "premium customers: \n";
        $currentYear  = new DateTime();
        foreach($customerList as $customer){
            $openingDate = new DateTime($customer->getOpeningDate());
            $yearDifference = $currentYear->diff($openingDate)->y;
            if($yearDifference > 5){
              echo " customer name: ".$customer->getCustomerName();
            }
        }
    }

    public static function displaySeniorCitizens(array $customerList){

        echo "senior citizens: \n";
        $currentYear  = new DateTime();
        foreach($customerList as $customer){
            $birthDate = new DateTime($customer->getDateOfBirth());
            $age = $currentYear->diff($birthDate)->y;
            if($age > 60){
              echo " customer name: ".$customer->getCustomerName();
            }
        }

    }

}

?>