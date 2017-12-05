<?php

	/* Database credentials */
	define('DB_SERVER', '66.147.242.186');
	define('DB_USERNAME', 'urcscon3_milan');
	define('DB_PASSWORD', 'coffee1N');
	define('DB_NAME', 'urcscon3_milan');

	/* Attempt to connect to MySQL database */
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	// build table query
	$query = "CREATE TABLE IF NOT EXISTS responses (
				`indexVal` int(11) NOT NULL AUTO_INCREMENT,
				`fname` varchar(35) NOT NULL,
				`lname` varchar(35) NOT NULL,
				`email` varchar(255) NOT NULL,
				`isStudent` varchar(5) NOT NULL,
				`isInternational` varchar(5) NOT NULL,
				`country` varchar(52) NOT NULL,
				`cuisines` varchar(120) NOT NULL,
				`restaurants` varchar(120) NOT NULL,
				`comments` text NOT NULL,
				PRIMARY KEY (`indexVal`)
			) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7;";

	$stmt = mysqli_prepare($link, $query);
	// run the build table query
	// $result = mysqli_query($link, $query);
	mysqli_stmt_execute($stmt);
	// build admintable query
	$query = "CREATE TABLE IF NOT EXISTS admininfo (
				`indexVal` int(11) NOT NULL AUTO_INCREMENT,
				`username` varchar(254) NOT NULL,
				`password` varchar(254) NOT NULL,
				`email` varchar(254) NOT NULL,
				PRIMARY KEY (`indexVal`)
			) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7;";
	$stmt = mysqli_prepare($link, $query);
			// run the build table query
			// $result = mysqli_query($link, $query);
			mysqli_stmt_execute($stmt);
	// $result = mysqli_query($link, $query);
?>
