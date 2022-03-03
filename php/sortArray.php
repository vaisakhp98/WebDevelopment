<?php
$numbers = array(4, 6, 2, 22, 11);

function sorting($numbers){
echo  "Unsorted :" . implode(" ",$numbers) ."<br>" . "<br>" ;
sort($numbers);

echo "Sorted:" . "<br>";
$arrlength = count($numbers);
for($i = 0; $i < $arrlength; $i++) {
  echo $numbers[$i];
  echo "<br>";
}
}
sorting($numbers);
?>
