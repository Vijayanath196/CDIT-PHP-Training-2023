<?php

class Pages{
    public function __construct(){

    }
    public function index(){
        echo 'helloworld';
    }
    public function about($id){
        echo $id;
    }
}

?>