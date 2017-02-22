<DOCTYPE html>
<html>
<head>
<style>
body{
	font-family: Arial, sans-serif;
}
h1{
	color: #138D75;  
}
</style>
</head>
<body>
<?php

echo "<h1>Challenge One</h1>";

$books =array(
	array(
		"title" => "PHP and MySQL Web Development", 
		"author" => "Luke Welling", 
		"pages" => 144, 
		"type" => "Paperback", 
		"price" => 31.63,
		),
	array(
		"title" => "Web Design with HTML, CSS, JavaScript, and jQuery", 
		"author" => "Jon Duckett", 
		"pages" => 135, 
		"type" => "Paperback", 
		"price" => 41.23,
	),
	array(
		"title" => "PHP Cookbook: Solutions and Examples for PHP Programmers", 
		"author" => "David Sklar", 
		"pages" => 14, 
		"type" => "Paperback", 
		"price" => 40.88,
	),
	array(
		"title" => "JavaScript and JQuery: Interactive Front-End Web Development", 
		"author" => "Jon Duckett", 
		"pages" => 251, 
		"type" => "Paperback", 
		"price" => 20.09,
	),
	array(
		"title" => "Modern PHP: New Features and Good Practices", 
		"author" => "Josh Lockhart", 
		"pages" => 7, 
		"type" => "Paperback", 
		"price" => 28.49,
	),
	array(
		"title" => "Programming PHP", 
		"author" => "Kevin Tatroe", 
		"pages" => 26, 
		"type" => "Paperback", 
		"price" => 28.96,
	)
);

echo "<table border=\"1\">";

	echo "<thead>
		 <tr>
			 <th>Title</th>
			<th>Author</th>
			<th>Pages</th>
			<th>Type</th>
			<th>Price</th>
		 </tr>
	 </thead>";



foreach ($books as $index => $book){
	echo "<tr>";
	foreach($book as $key => $value) {
		echo "<td>$value</td>";
	}
	echo "</tr>";
}


echo "</table><br>";

$price = array_column($books, "price");

echo "<p>Your total price is: " . array_sum($price) . "</p>";

echo "<h1>Challenge Two</h1>";




headflip(5);



function headflip($heads) {

	$flipcount = 0;
	$headcount = 0;
	
	echo "<p>Beginning the coin flipping, looking for $heads heads in a row...</p>";

	while (++$headcount <= $heads){
	$flip = mt_rand(1,2);
	$flipcount++;
		if($flip == 1){
		echo "<img src=\"heads.jpg\" alt=\"Heads\" style=\"width:100px;height:98px;\">";
		}
		else {
		$headcount = 0;
		echo "<img src=\"tails.jpg\" alt=\"Tails\"style=\"width:100px;height:100px;\">";
		}
	}
	echo "<p>Flipped $heads heads in row in $flipcount flips.</p>"; 
}
 

?>
</body>
</html>