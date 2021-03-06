<?php
	// Include config file
	require_once("php/create_table.php");

	// Define variables and initialize with empty values
	$username = $password = "";
	$username_err = "";
	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST"){
				$username = trim($_POST["username"]);
        $password = trim($_POST['password']);
        // Prepare a select statement
        $sql = "SELECT username, password FROM admininfo WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;
                            header("location: admin_view.php");
                        } else{
                            // Display an error message if password is not valid
                            $username_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
      // Close statement
      mysqli_stmt_close($stmt);
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
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat" rel="stylesheet">
  		<title>Milan Lab 9- Admin Login</title>
	</head>

	<body>

		 <div class="masthead">
      		<div class="inner">
          		<a class="masthead-brand" href="admin_login.php">Rochester Eats-Admin</a>
     		 </div>
  		</div>

		<div class="contain fill-in-form">

			<h2>Login</h2>
			<span class="help-block error_message"><?php echo $username_err;?></span>
			<!--login form stuff-->
			<form method="post" action="admin_login.php">
			<input type="text" name="username" class="username" placeholder="Username" required/><br>
			<input type="password" class="password" name="password" placeholder="Password" required/><br>
			<button type="submit" class="button" id="submit">Log In</button>
			</form>

			<div class="explain">Don't have an account? Click <a href="admin_create.php"> here </a> to create one.</div>
		</div>

		<?php include "inc/footer.php" ?>
