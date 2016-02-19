<?php
$arrNum = explode(",", $_REQUEST['source']);
$max = $min = 0;
for ($i=0; $i<count($arrNum); $i++) {

    if (is_numeric($arrNum[$i])) {
        if ($max < $arrNum[$i])
            $max = $arrNum[$i];
        if ($min > $arrNum[$i])
            $min = $arrNum[$i];
    }
}



echo json_encode(array('min'=>$min, 'max'=>$max));