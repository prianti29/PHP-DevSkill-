<?php
//adding another file
 require_once('Human.php'); //error khele porer program theme jay
// require('main.php'); //ekbare besi include kora jay na,upore kono error thakleo pore code ar run kore na
//include ('Human1.php'); // warning dileo code continue kore run kore
//include 'Human.php'; 

 //Creting objects
 $obj1 = new Human();

 //Onject values
 $obj1->name = "Tamim";
 $obj1->age = "35";

 //for private modifier
 $obj1->set_balance(103.4);
 //echo "balance is ".$obj1->get_balance(); //only print balance 

//for public modifier
/*
$obj1->bankBalance = "104.5";
*/
//displaying obj
 $obj1->display();

//obj1->save()  jodi amra obj database obj save korte cai

//Creting another objects
/*
 $obj2 = new Human();

 //Onject values
 $obj2->name = "sakib";
 $obj2->age = "24";
 $obj2->bankBalance = "215.5";
 
 //displaying obj
 $obj1->display();
 */
?>