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
