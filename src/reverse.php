<?php
$string = $_REQUEST['string'];
$count = 0;

$res = "";

for ($i=strlen($string); $i>0; $i--) {

    echo $string[$i-1];
}
