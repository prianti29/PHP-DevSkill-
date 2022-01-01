<?php

//for inheritance
require_once('Human.php');
class Student extends Human{
    public $roll_no;
    public $cgpa;
    const UNI_NAME = "PCIU";

    public function __construct(){
        $this->cgpa = 2.3;
        parent::__construct();
    }
    //override
    public function display(){
        echo"Cgpa is $this->cgpa <br>";
        echo"Roll is $this->roll_no <br>";
        echo"Bank Balance is $this->bankBalance <br>";
        echo"Uni name is ".self::UNI_NAME."<br>";

        parent::display();

    }
}

?>