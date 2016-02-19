<?php

$year = $_REQUEST['year'];

for ($i = 0; $i < 4; $i++) {
    //get day timestamp for feburary 29 for this year
    $day = date("d", mktime(0, 0, 0, 2, 29, $year + $i));
    /*
        check if day equals 29.
        If day is 29 then it must be the leap year. if day is 01, then it not a leap year.
    */
    if ($day == 29) {
        $next = $year + $i;
        $prev = $next - 4;
        break;
    }
}

echo json_encode(array('prev' => $prev, 'next' => $next));
