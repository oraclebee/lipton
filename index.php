<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Backend PHP</title>
</head>
<body>
	<h1>Hello</h1>
	<?php
	// $name = 'micheal';
	// echo gettype ($name);
	// function john(){
	// 	global $name;
	// 	echo $name;
	// }
	// john();
	// define('PERSON','Bayo');
	// echo PERSON;
	
	// echo PHP_VERSION;
	$data = ["Alex", "Samuel", "muju"];
	var_dump($data);
	echo "<br/>";
	echo $data[0];

	$person = [
		"name" => "Michelle",
        "age" => 25,
        "job" => "Developer"
	];
	echo "<pre>";
	print_r($person);
	echo "</pre>";

	// $_SERVER['PHP_SELF'];
	// $_SERVER['HTTP_REFERER'];
	// $_SERVER['HTTP_HOST'];
	// $_SERVER['SCRIPT_NAME'];
	// $_SERVER['REQUEST_METHOD'];
	// $_SERVER['HTTP_USER_AGENT'];
	// $_SERVER['SERVER_NAME'];
	

	// global variable
	$x = 5;
	function alex(){
		ECHO $GLOBALS ['x'];
	}
	alex();

	?>
	<h1><?= "Alex is here "?></h1>;
	<form method="post" action="">
		<input type="text" name="num1"></input>
		<input type="text" name="num2"></input>
		<button type="submit" >Submit</button>
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		echo $num1 * $num2;
	}
	?>
</body>
</html> 