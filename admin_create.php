<?php

require_once("php/create_table.php");

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT indexVal FROM admininfo WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // // Validate password
    // if(empty(trim($_POST['password']))){
    //     $password_err = "Please enter a password.";
    // } elseif(strlen(trim($_POST['password'])) < 6){
    //     $password_err = "Password must have atleast 6 characters.";
    // } else{
    //     $password = trim($_POST['password']);
    // }

    // // Validate confirm password
    // if(empty(trim($_POST["confirm_password"]))){
    //     $confirm_password_err = 'Please confirm password.';
    // } else{
    //     $confirm_password = trim($_POST['confirm_password']);
    //     if($password != $confirm_password){
    //         $confirm_password_err = 'Password did not match.';
    //     }
    // }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO admininfo (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                //TODO: show account creation page, Redirect to admin manage page
                header("location: admin_view.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>



<!DOCTYPE html>
<html>
	<head>
		 <meta charset="UTF-8">
		 <!-- Bootstrap core CSS mainly for naviagtion -->
    	<link href="bootstrap-4.0.0-beta/dist/css/bootstrap.css" rel="stylesheet">
		<!-- Our own custom CSS -->
		<link href="css/styles.css" rel="stylesheet">
  		 <!-- Fonts -->
  		<link href="https://fonts.googleapis.com/css?family=Shrikhand|Lato" rel="stylesheet">
  		<title>Milan Lab 9- Admin Create</title>
	</head>

	<body>

		 <div class="masthead">
      		<div class="inner">
          		<a class="masthead-brand" href="admin_create.php">Rochester Eats-Admin</a>

     		 </div>
  		</div>

		<div class="contain">
			<h2>Create an Account</h2>
			<!--account creation form stuff-->
		</div>

		<footer> &copy; This webpage is created by Team Milan for CSC 174 Assignment 9.</footer>

	</body>

</html>
