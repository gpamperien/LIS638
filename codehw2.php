<DOCTYPE html>
<html>
<head>
<style>
h1 {
	text-align: center;
}
p {
	color: blue;
}
</style>
</head>
<body>


<?php
echo "<h1> Challenge One </h1>";

$ISBN = "0141441143";

echo "Testing $ISBN which ";

$validate = validateISBN($ISBN);
if ($validate == 1) {
echo "is valid.";
}
else {
echo "is not valid.";
}

function validateISBN($ISBN) {
$one = substr($ISBN, 0, 1);
$two = substr($ISBN, 1, 1);
$three = substr($ISBN, 2, 1);
$four = substr($ISBN, 3, 1);
$five = substr($ISBN, 4, 1);
$six = substr($ISBN, 5, 1);
$seven = substr($ISBN, 6, 1);
$eight = substr($ISBN, 7, 1);
$nine = substr($ISBN, 8, 1);
$ten = substr($ISBN, 9, 1);

if ($ten == "X") {
	$ten = 10;
}
else {
$ten = $ten;
}

$math = (($one  * 10) + ($two  * 9) + ($three * 8) + ($four * 7) + ($five * 6) + 
($six  * 5) + ($seven  * 4) + ($eight  * 3) + ($nine * 2) + ($ten * 1)) / 11;

$validate = is_int($math);

return $validate;
}
echo "<br>";

echo "<h1>Challenge Two</h1>";

echo "<p> Part A </p>";
$count = 0;

while (++$count < 2){
	$result = mt_rand(1,2);
		if ($result == 1){
			echo "<img src=\"heads.jpg\" alt=\"Heads\" style=\"width:100px;height:98px;\">";
		}
		else {
			echo "<img src=\"tails.jpg\" alt=\"Tails\"style=\"width:100px;height:100px;\">";
		}
}

echo "<br>";

$count = 0;

while (++$count < 4){
	$result = mt_rand(1,2);
		if ($result == 1){
			echo "<img src=\"heads.jpg\" alt=\"Heads\" style=\"width:100px;height:98px;\">";
		}
		else {
			echo "<img src=\"tails.jpg\" alt=\"Tails\"style=\"width:100px;height:100px;\">";
		}
}

echo "<br>";

$count = 0;

while (++$count < 6){
	$result = mt_rand(1,2);
		if ($result == 1){
			echo "<img src=\"heads.jpg\" alt=\"Heads\" style=\"width:100px;height:98px;\">";
		}
		else {
			echo "<img src=\"tails.jpg\" alt=\"Tails\"style=\"width:100px;height:100px;\">";
		}
}

echo "<br>";

$count = 0;

while (++$count < 8){
	$result = mt_rand(1,2);
		if ($result == 1){
			echo "<img src=\"heads.jpg\" alt=\"Heads\" style=\"width:100px;height:98px;\">";
		}
		else {
			echo "<img src=\"tails.jpg\" alt=\"Tails\"style=\"width:100px;height:100px;\">";
		}
}

echo "<br>";

$count = 0;

while (++$count < 10){
	$result = mt_rand(1,2);
		if ($result == 1){
			echo "<img src=\"heads.jpg\" alt=\"Heads\" style=\"width:100px;height:98px;\">";
		}
		else {
			echo "<img src=\"tails.jpg\" alt=\"Tails\"style=\"width:100px;height:100px;\">";
		}
}

echo "<p> Part B </p>";
$flipcount = 0;
$headcount = 0;

while ($headcount < 2){
$flip = mt_rand(1,2);
$flipcount++;
	if($flip == 1){
	$headcount++;
	echo "<img src=\"heads.jpg\" alt=\"Heads\" style=\"width:100px;height:98px;\">";
	}
	else {
	$headcount = 0;
	echo "<img src=\"tails.jpg\" alt=\"Tails\"style=\"width:100px;height:100px;\">";
	}
}

echo "<br>";

echo "Flipped two heads in a row in $flipcount flips."
?>
</body>
</html>