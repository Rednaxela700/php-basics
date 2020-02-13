<?php

// arrays
/*
    - indexed
    - associative
    - multi-dimensional
*/
$people = ['Kevin', 'James', 'Nicole', 'Sara'];
echo $people[1];
$numbers = [23, 55, 12];
$cars = ['Honda', 'Toyota', 'Ford'];
echo $cars[2];
$cars[3] = 'Chevy'; // added another car to array
$cars[] = 'BWM'; // added bmw as last item of the array

echo count($cars); // outputs array length
echo '<br>';
print_r($cars); //prints whole array as string
echo '<br>';
var_dump($cars); //prints whole array as string including data types

// associative arrays
$people = ['Alexander' => 27, 'John' => 77, 'Will' => 55]; //strings represents the keys
echo '<br>';
echo $people['Alexander'];
$people['Jill'] = 43; //added another element
echo '<br>';
print_r($people); //printed whole array

//multidimensional arrays - arrays with inner arrays

$cars = [
    ['honda', 20, 10],
    ['toyota', 20, 10],
    ['Ford', 40, 55],
];
echo '<br>';
echo $cars[1][0]; // = toyota
