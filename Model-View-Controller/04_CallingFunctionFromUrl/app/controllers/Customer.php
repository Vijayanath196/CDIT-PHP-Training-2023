<?php

class Customer{

    public function __construct(){
        // echo "hello world";
    }
    public function index(){
        echo "index page";
    }
    public function addCustomer($params){
        echo "Customer ".$params." added";
    }
}

?>