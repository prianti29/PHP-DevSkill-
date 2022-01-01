<?php

// $age =  readline("Enter a number: ");

//  echo ($age);

// $a["one"] = 10;
// $a["two"] = 20;
// print_r($a);

$list = array("Jamal", "kamal", 100,  183.5);
$list2 = ["Jamal 2", "kamal 2", 200,  83.5];

$list2[4] = "Dev Skill";
array_push($list2, "Laravel");

$new_list = array_merge($list, $list2);
// print_r($list);
// var_dump($list2);



// for ($i = 0; $i < count($list2); $i++) {
//     echo $list2[$i];
// }

// $age_list = array(
//     "shakib" => "Ten",
//     "tamim" => 35,
//     "mushfique" => 30
// );

// foreach ($age_list as $key => $value) {
//     // echo  $key . "==" . $value . "\n";
//     echo  "$key == $value \n";
// }

// echo "Shakibs age is " . $age_list["shakib"];

// $person = array(
//     "name" => "Shakib",
//     "age" => 35,
//     "income" => 300.5
// );
// $person = [
//     "name" => "Shakib",
//     "age" => 35,
//     "income" => 300.5
// ];


// $person_list = array(
//     [
//         "name" => "Shakib",
//         "age" => 35,
//         "income" => 300.5
//     ],
//     [
//         "name" => "Tamim",
//         "age" => 34,
//         "income" => [155.5, 200]
//     ]
// );

// echo "Tamims age is " . implode(",", $person_list[1]["income"]);

// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// $obj = json_decode($jsonobj);

// echo $obj['Peter'];
// echo $obj->Ben;
// echo $obj->Joe;

$d1 = new DateTime("2002-12-31");
$d2 = new DateTime(date("Y-m-d"));

$diff = $d2->diff($d1)->format("%y");

// echo $diff;

echo date('d F,Y', time());

// echo time();
