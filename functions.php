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
