<?php

	// inititalize bluehost DB connection
	$username = "urcscon3_milan";
	$database = "urcscon3_milan";

	$mysqli = new mysqli('66.147.242.186', $username, 'coffee1N', $database);

	// test connection
	if ($mysqli->connect_error) {
		die('connect error (' . $mysqli->connect_errno . ')'
			. $mysqli->connect_error);
	}

	// build table query
	$query = "CREATE TABLE IF NOT EXISTS responses (
				`user_id` int(11) NOT NULL AUTO_INCREMENT,
				`fname` varchar(30) NOT NULL,
				`lname` varchar(30) NOT NULL,
				`email` varchar(30) NOT NULL,
				`isStudent` varchar(30) NOT NULL,
				`isInternational` varchar(30) NOT NULL,
				`country` varchar(30) NOT NULL,
				`cuisines` varchar(60) NOT NULL,
				`restaurants` varchar(120) NOT NULL,
				`comments` text NOT NULL,
				PRIMARY KEY (`user_id`) 
			) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7;";


	// run the build table query
	$result = mysqli_query($mysqli, $query);
?>