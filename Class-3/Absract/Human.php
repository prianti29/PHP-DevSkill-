<?php

//abstract class e kono obj toiri kora jay na

abstract class Human
 {
     //Properties 
     public $name;
     public $age;
     private $bankBalance;

    //------------>
     //Constructor
     //----------->
     //Kono propertier value jodi onj create howar sathe sathe initialize korte cai tahole constructor use korte hoy

     public function __construct()  //ekhane parameter e $age dile main.php teo Obj create e perameter e age value dite hobe
     {
         $this->age = 18;
     }

     //--------------------------------------------->
     //set & get method for private access modifier
     //-------------------------------------------->
     //set method value just private modifer er jonno value set kore 
     public function set_balance($bankBalance){
         // set some info in database 
         // send email 
         // send sms
         $this->bankBalance = $bankBalance;
     }
     //get methos value just get kore private modifier er jonno
     public function get_balance(){
         return $this->bankBalance;
     }

     //methods
     public function display (){
         echo "Name is $this->name <br>";
         echo "Age is $this->age <br>";
         echo "Bank Balance is $this->bankBalance <br>";
     }
    /*
     public function info (){
       echo "Info Called";
    }
    */
    
    abstract public function calculator_result(): bool; 

    public function save (){
        echo "Info saved";
    }
    public function __destruct()
    {
        echo "Destruct called"; // kono obj ses e kichu call kora lagle auto call kore
    }
 }
?>