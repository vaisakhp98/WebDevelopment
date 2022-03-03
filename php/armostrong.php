<html>
<body>
<h1>Armstrong Numbers </h1>
<form method="POST" action = "#">
<input type="number" name="number" />
<button name="submit" type="submit">Submit</button>
</form>
<?php
if(isset($_POST['submit']))
{
$a = $_POST['number'];
$b = $a;
$sum = 0;
$ld = 0;
while($a>=1){
	$ld = $a%10;
	$e = $ld*$ld*$ld;
	$sum = $sum + $e;
	$a = $a/10;
}
if($b==$sum){
echo $b." is Armstrong";
}else{
echo $b." is Not Armstrong";
}
}

?>
</body>
</html>
