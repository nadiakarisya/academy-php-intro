<?php

$arrNum = explode(",", $_REQUEST['source']);
$target = $_REQUEST['target'];
$count = 0;

if (!is_numeric($target)) {

} else {
    for ($i=0; $i<count($arrNum); $i++) {

        if ($arrNum[$i] == $target)
            $count++;
    }

}

echo $count;