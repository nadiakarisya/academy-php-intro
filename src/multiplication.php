<?php

$x = $_REQUEST['x'];
$y = $_REQUEST['y'];

$res = "";

if ($x < 0)
    $x = abs($x);

if (!is_numeric($x) || !is_numeric($y) || !is_int(intval($x)) || !is_int(intval($y))) {
    $res = "";
} else {
    for ($i=0; $i<$x; $i++){
        $res += $y;
    }

}


echo $res;
