<?php

	require_once("create_table.php");

	// take input values from POST
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$comments = $_POST["comments"];
	$isStudent = $_POST["student"];

	if (isset($_POST["international"])) {
		$isIntStudent = $_POST["international"];
	} else {
		$isIntStudent = "no";
	}

	if (isset($_POST["country"])) {
		$country = $_POST["country"];
	} else if ($_POST["student"] === "yes") {
		$country = "United States";
	} else {
		$country = "Unknown";
	}

	// init array to hold cuisine vals that have been set
	$selectCuisines = array();
	$cuisineNames = ["american", "chinese", "italian", "japanese", "korean", "mediterranean", "thai"];

	// push selected cuisines to array
	while($name = array_pop($cuisineNames)) {
		if (isset($_POST[$name])) {
			array_push($selectCuisines, $_POST[$name]);
		}
	}

	// create a string from list of cuisines
	$cuisinesString = implode(",", $selectCuisines);

	// init array to hold restaurant vals that have been set
	$selectRestaurants = array();

	$restaurantNames = ["dinobbq", "lento", "goodluck", "seoulhouse", "shiki", "revelry", "tsingtao", "tournedos"];

	// push selected restaurants to array
	while ($name = array_pop($restaurantNames)) {
		if (isset($_POST[$name])) {
			array_push($selectRestaurants, $_POST[$name]);
		}
	}

	// create a string from list of restaurants
	$restaurantsString = implode(",", $selectRestaurants);

	// sanitize text inputs
	$fname = Trim(stripslashes($fname));
	$lname = Trim(stripslashes($lname));
	$email = Trim(stripslashes($email));
	$comments = Trim(stripslashes($comments));


	$query  = "INSERT INTO responses (fname, lname, email, isStudent, isInternational, country, cuisines, restaurants, comments) VALUES ";

	$query .= "('{$fname}', '{$lname}', '{$email}', '{$isStudent}', '{$isIntStudent}', '{$country}', '{$cuisinesString}', '{$restaurantsString}', '{$comments}');";


	$runquery = mysqli_query($link, $query);


	$link->close();
?>
