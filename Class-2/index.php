<?php

/*
$str = "HELLO WORLD";
print_r(explode(" ",$str))."\n";
echo(strtolower($str))."\n";
echo(strtoupper($str))."\n";
echo(strlen($str))."\n";
echo(trim($str))."\n"; //string er age pore kono space thake tahole segulo clean kore dey
echo str_replace("world","peter","hello world")."\n";
*/

//-------------------->
//JSON encode & decode
//-------------------->

/*
$str = array ("peter" => 23, "ben" => 43, "joe" => 24);
echo json_encode($str); //save on database

$str1 = '{"peter":23, "ben":43, "joe":24}';
var_dump(json_decode($str1)); //save php format from database

$jsonObj = '{"peter":23, "ben":43, "joe":24}';
$obj = json_decode($str1 ,true);

echo $obj['peter'];
*/

//--------->
//date time
//--------->

$d1 = new DateTime("2002-02-02");
// $d2 = new DateTime("2021-11-18");
//or
$d2 = new DateTime(date("Y-m-d"));   //convert into string
$diff = $d1->diff($d2)->format("%a");

// echo "today is ". date("Y/m/d");
echo $diff;
echo date('d,F,Y',strtotime("2002-12-31"));

//----------->
//str to time
//----------->

$d = strtotime ("10:30pm April 15 2014");
echo "created date is ".date("Y-m-d:sa",$d);
?>