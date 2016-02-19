<?php

function fibonacci($n) {

    if($n < 0)
        return -1;

    if ($n == 0)
        return 0;

    if($n == 1)
        return 1;
    else if ($n>1)
        return fibonacci($n-1) + fibonacci($n-2);

}

$number = $_REQUEST['n'];

echo fibonacci($number-1);