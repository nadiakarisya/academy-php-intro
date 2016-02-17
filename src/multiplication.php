<?php

$x = $_REQUEST['x'] ?: 0;
$y = $_REQUEST['y'] ?: 0;

echo $x > 0 & $y > 0 ? $x * $y : 0;