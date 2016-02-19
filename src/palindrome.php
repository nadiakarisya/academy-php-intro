<?php

$string = $_REQUEST['s'];

$length = strlen($string);
$flag = 0;

for ($i = 0; $i < $length; $i++) {
    if ($string[$i] != $string[$length - $i - 1]) {
        $flag = 1;
        break;
    }
}

if ($flag)
    $res = "false";
else
    $res = "true";

echo $res;
