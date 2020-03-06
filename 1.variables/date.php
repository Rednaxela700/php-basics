<?php
echo date('d'); // Day
echo date('m'); // Month
echo date('Y'); // Year
echo date('l'); // day of the week

echo '<br>';
echo date('Y/m/d'); // year/month.day
echo '<br>';

//    Set timezone
date_default_timezone_set('Europe/Warsaw');

echo date('h'); //hours
echo date('i'); //minutes
echo date('s'); //seconds
echo date('a'); //AM/PM

//make a timestamp in unix time

$timestamp = mktime(10, 14, 54, 01, 02, 1993);

echo "<br>" . $timestamp . "<br>";

echo date('m/d/Y', $timestamp); //date fn can take timestamp as second parameter

//convert time typed in string to unix format
$timestamp2 = strtotime('7:00pm March 06 2020');

echo "<br>" . $timestamp2 . "<br>";

echo date('m/d/Y h:i:sa', $timestamp2);

$timestamp3 = ('tomorrow');

echo "<br>" . date('m/d/Y h:i:sa', $timestamp3) . "<br>";
