<?php

//----------->
// Printing
//----------->
/*
$age = 18.45;
echo $age."\n";
// type casting 
$age = (int)18.4;
echo $age . "\n";
echo "hello world \n";

var_dump("hello World");   //uses for print with character
//Print_r for printing array */
//----------->
//user Input
//----------->
/*
$age = readline("Enter a Number ");
echo ($age."\n");
*/
//---------------------------------->
//Numeric array (index value 012345)
//---------------------------------->
/*
$a[0] = 10;
$a[1] = 34;
print_r($a);
*/
// ----------------------------------------->
//Associative array (index value in string)
// ----------------------------------------->
/*
$a["One"] = 10;
$a["two"] = 34;
print_r($a);
*/
// ----------------------------->
//Declearation of array (Numeric)
// ----------------------------->
/*
$list = array("Jamal","kamal",122,123.45);
$list2 = ["Jamal 2","kamal 3",122,123.45];
$list2[4] = "Dev SKill"; //for add new array
*/
//---------------------------------------->
//push function for add new array element
//---------------------------------------->
/*
array_push($list2,"laravel");
*/
//------------------------------------------------>
//Array merge use to merge and concatenation array
//------------------------------------------------>
/*
$new_list = array_merge($list,$list2);

print_r($list);
var_dump($list2); //show with datatype
*/
//---------------------------------->
//forEach for print array (insertion)
//---------------------------------->
/*
foreach($list as $key => $value){
    // echo $value."\n";
    // echo $key."\n";
    echo $key."==".$value."\n \n";
    // echo "$key==$value\n"; //single qoute e value add kora jay na
}
*/
//print new_array (merge)
/*
echo "Print New Array \n ";
foreach($new_list as $key => $value){
    echo "$key==$value\n";
}
*/
//with forloop
/*
for($i=0;$i<count($list2);$i++){
    echo $list2[$i]."\n";
}
*/

// --------------------------------->
//Declearation of array (Associative)
// --------------------------------->
/*
$age_list = array(
    "sakib" => "ten", 
    "tamin" =>43, 
    "musfiq" => 34
);
foreach($age_list as $key => $value){
    echo "$key == $value\n";
}
echo "sakib's age is ".$age_list['sakib'];
*/
// ---------------------------------------------->
//Declearation of array (Associative) with object
// ---------------------------------------------->

$person_list = array(
    [
        "name" => "sakib",
        "age" => 23,
        "income" => 235.4
    ],
    [
        "name" => "tamim",
        "age" => 34,
        "income" => [533.4,34]

    ]
);

// echo "tamims's age is ".$person_list[1]['age'];

// for implode
echo "tamims's age is ".implode(" ",$person_list[1]['income']);
//explode use for string convertor
?>