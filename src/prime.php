<?php

function prime($number, $i) {
    if ($i == 1) {
        return 1;
    } else if (($number % $i) == 0) {
        return 1 + prime($number, --$i);
    } else 0 + prime($number, --$i);
}

$number = $_REQUEST['n'];

if ($number > 1)
    $bil_prime  = prime($number, $number);

if ($bil_prime == 1)
    echo "true";
else
    echo "false";

