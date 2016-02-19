<?php

$amount = $_REQUEST['amount'];

function atm($amount) {
    $denom = array(100000, 50000, 20000, 10000);

    $result = array();

    foreach ($denom as $v) {
        if ($amount >= $v) {
            $x = floor($amount / $v);
            $result[$v] = $x;
            $amount -= $v * $x;
        }
    }
    return $result;
}

$res = atm($amount);

echo json_encode($res);
