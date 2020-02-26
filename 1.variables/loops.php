<?php

//execute code set number of times

// for
// while
// do while
// foreach

// for
// @params - init, condition, inc

for ($i = 0; $i < 10; ++$i) {
    echo 'number '.$i;
    echo '<br>';
}

// while loop

$i = 0;

while ($i < 10) {
    echo $i;
    echo '<br>';
    ++$i;
}

// do while
// @params - condition

// foreach loop for arrays
$people = ['brad' => 'brad@gmail.com', 'alex' => 'alex@asd.pl', 'will' => 'william@will.would'];

foreach ($people as $person => $email) {
    echo $person.':'.$email;
    echo '<br>';
}
