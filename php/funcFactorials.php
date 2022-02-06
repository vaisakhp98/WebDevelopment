<?php

function factorial($num){

$f = 1;
while ($num > 0) {
    $f = $f *  $num;
    $num = $num- 1;
}
echo $f;
}

$num = 6;
factorial($num)

?>