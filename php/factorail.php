<?php
$number = 6;
$temp = $number;
$f = 1;

while ($number > 0) {
    $f = $f *  $number;
    $number = $number - 1;
}
echo "Factoial of $temp is $f";
?>