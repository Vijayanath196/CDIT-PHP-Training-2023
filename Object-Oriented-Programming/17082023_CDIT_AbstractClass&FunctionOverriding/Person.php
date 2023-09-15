<?php


class Person {

    private $firstName;
    private $lastName;

    public function __construct($firstName,$lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function setFirstName($firstName){
        $this->lastName = $firstName;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function setLasttName($lastName){
        $this->lastName = $lastName;
    }

    public function getLastName(){
        return $this->lastName;
    }

}


?>