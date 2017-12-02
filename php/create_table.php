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

	// build admintable query
	$query = "CREATE TABLE IF NOT EXISTS admininfo (
				`indexVal` int(11) NOT NULL AUTO_INCREMENT,
				`username` varchar(254) NOT NULL,
				`password` varchar(254) NOT NULL,
				PRIMARY KEY (`indexVal`)
			) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7;";

	$result = mysqli_query($mysqli, $query);
?>
