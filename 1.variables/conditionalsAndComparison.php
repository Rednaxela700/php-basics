<?php
// conditionals

/*
    ==

    ===

    <

    >

    <=

    >=

    !=

    !==
*/

$num = 5;

if($num == '5') {
    echo '5 passed';
}
if($num === '5') {
    echo "<br> passed strict comparison";
} elseif ($num === 5) {
    echo "<br> $num is a number equal to 5";
} else {
    echo "num else log";
}


//logical operators:
/*
 * and - &&
 * or - ||
 * xor - exclusive comparison - only if left or right is true, but not both
 */