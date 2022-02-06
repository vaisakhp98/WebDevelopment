<?php

$num = 7;
$f = 0;

for ($i=1; $i <= $num  ; $i++) { 
   if ($num % $i == 0) {
       echo "factors of ". $num . " is " . $i ."<br>";
   }
}

?>