<?php

// single line comment
// another single line comment
/*
multiline
comments
*/

    //Variables
    /*
        - Prefix $
        - start with a letter or an underscore
        - only letters, or numbers
        - case sensitive
    */
$output = 'Hello World';
echo $output;

// data types
    /*
        - String
        - numbers - positive or negative
        - Integers
        - Floats
        - booleans
        - arrays
        - objects
        - NULL
        - Resource

        */
$num1 = 4;
$float = 4.4;
$bool1 = true;

// variables concatenation
$sum = $num1 + $ {$float};
$string1 = '<br>hi';
$string2 = 'there';
$greeting = $string1.' '.$string2.'!';
$greeting2 = "<br>{$string1} {$string2}"; //double quotes can parse strings, single don't
$greeting3 = '<br>this\'s big'; //escape operator
echo $greeting;
echo $greeting2;
echo $greeting3;

//constants never change, used to store names of databases etc
define('GREETING', 'hello everyone', true);
echo '<br>'.greeting;
