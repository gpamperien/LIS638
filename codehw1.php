<DOCTYPE html>
<html>
<head>
</head>
<body>
<h1> Challenge 1: Correct Change</h1>
<?php

/*$cashgiven = 20.00;
$price = 18.45;

$changedue = $cashgiven - $price; //establishing change due 

$cents = $changedue * 100; //converting to cents
	echo "You are due $cents cents back in change.<br>"; */
	
$cents = 159;

echo "You are due $cents cents back in change.<br><br>";

echo "Your change is ";

while ($cents >=100) {
	$dollarsdue = (int) ($cents / 100); //establishing how many dollars
	$cents = $cents - $dollarsdue * 100; //modifying to below 100 to stop loop
	echo "$dollarsdue dollar(s) "; //testprint
		
}


while ($cents >= 25) { //for quarters
	if ($cents - 75 >= 0) { //75 cents or more
	$quartersdue = 3;
	}
	elseif ($cents - 50 >= 0) { //50 cents or more
	$quartersdue = 2;
	}
	else { //25 cents or more
	$quartersdue = 1; 
	}
	$cents = $cents - $quartersdue  * 25; //modifying to below 25 to stop loop
	echo "$quartersdue quarter(s) ";
	
			
}

while ($cents >= 10) { //for dimes
	if ($cents - 20 >= 0) { //20 cents or more
	$dimesdue = 2;
	}
	else { //10 cents or more
	$dimesdue = 1;
	}
	$cents = $cents - $dimesdue * 10; //modifying to below 25 to stop loop
	echo "$dimesdue dime(s) ";
	
}

while ($cents >= 5) {
	if ($cents - 5 >= 0) {
	$nickelsdue = 1;
	}
	else {
	$nickelsdue = '0';
	}
	$cents = $cents - 5;
	echo "$nickelsdue nickel(s) ";
	
}

while ($cents > 0) {
	if ($cents - 4 >= 0) {
	$penniesdue = 4; 
	}
	elseif ($cents - 3 >= 0) {
	$penniesdue = 3;
	}
	elseif ($cents - 2 >= 0) {
	$penniesdue = 2;
	}
	elseif ($pennies = 1) {
	$penniesdue = 1;
	}
	else {
	echo "no";
	}
	$cents = $cents - $penniesdue;
	echo " $penniesdue cent(s)";
	
}	
?>

<br>
<br>
<br>
<h1> Challenge 2: 99 Bottles </h1>
<?php

$bottles = 9;

while ($bottles > 0) {
	echo "$bottles bottles of beer on the wall, $bottles bottles of beer!<br>
	Take one down and pass it around, ";
	--$bottles; 
	echo "$bottles bottles of beer on the wall.<br>";
	}

?>
</body>