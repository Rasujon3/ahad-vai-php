<?php
// PHP JSON Introduction
// The JSON extension implements the JavaScript Object Notation
// data-interchange format.

// json_decode() Function
// The json_decode() function is used to decode
// or convert a JSON object to a PHP object.

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// // var_dump(json_decode($jsonobj));
// $obj = json_decode($jsonobj);
// echo $obj->Peter . "\n";
// echo $obj->Ben . "\n";
// echo $obj->Joe . "\n";

$arr = json_decode($jsonobj, true);

// echo $arr["Peter"] . "\n";
// echo $arr["Ben"] . "\n";
// echo $arr["Joe"] . "\n";

// json_encode() Function
// The json_encode() function is used to encode a value to JSON format.
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
$encodedAge = json_encode($age);
echo $encodedAge . "\n";
$decodedAge = json_decode($encodedAge);
echo $decodedAge->Peter . "\n";

$cars = array("Volvo", "BMW", "Toyota");
// echo json_encode($cars);
