<?php
/**
 * An array stores multiple values in one single variable.
 * In PHP, there are three types of arrays:

 * Indexed arrays - Arrays with a numeric index
 * Associative arrays - Arrays with named keys
 * Multidimensional arrays - Arrays containing one or more arrays
 */

// indexed array
$cars = array("Volvo", "BMW", "Toyota");
print_r($cars);
echo count($cars) . "\n";

// Associative array
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old. \n";
foreach ($age as $name => $age) {
    echo $name . "'s age is: " . $age . "\n";
}
// Multidimensional Arrays
$multiCars = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15],
];

echo count($multiCars);
for ($row = 0; $row < 4; $row++) {
    // echo "<p><b>Row number $row</b></p>";
    // echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo $cars[$row][$col];
    }
    // echo "</ul>";
}

/**
 * sort() - sort arrays in ascending order
 * rsort() - sort arrays in descending order
 * asort() - sort associative arrays in ascending order, according to the value
 * ksort() - sort associative arrays in ascending order, according to the key
 * arsort() - sort associative arrays in descending order, according to the value
 * krsort() - sort associative arrays in descending order, according to the key

 */
