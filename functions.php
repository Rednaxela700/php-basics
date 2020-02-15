<?php

// function is a block of code that can be repeatedly called

//  camelCase - myFn()
// lowercase - my_fn()
// pascal case - MyFunction()

function simpleFn($name = 'World')
{
    echo 'Hello '.$name;
}
simpleFn('John');

function addNumber($num1, $num2)
{
    return $num1 + $num2;
}

echo addNumber(2, 3);
$myNum = 10;
function addFive($num)
{
    $num += 5;
}
function addTen(&$num) //ampersand is a reference to variable
{
    $num += 10;
}

addFive($myNum);

addTen($myNum);
echo '<br>';
echo "value is: {$myNum}<br>";
