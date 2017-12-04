<?php
	require_once("php/create_table.php");

	// Define variables and initialize with empty values
	$username = $password = "";
	$error_message = "";

	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST"){
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
                    $error_message = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                $error_message = "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    // Check input errors before inserting in database
    if(empty($error_message)){
        // Prepare an insert statement
        $sql = "INSERT INTO admininfo (username, password, email) VALUES (?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);

            // Set parameters
						$password = trim($_POST["password"]);
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
						$param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
								session_start();
								$_SESSION['username'] = $username;
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
			<!-- a UL with LIs intentionally left blank so the JS can add error messages-->
			<div>
				<div class="password_err"></div>
				<div class="error_message"><?php echo $error_message;?></div>
				<div class="confirm_password_err"></div>
				<div class="email_err"></div>
			</div>


			<!--account creation form stuff-->
			<form method="post" action="admin_create.php">
			<div>
			<input type="text" name="username" class="username" placeholder="Username" />
			<input type="email" class="email" name="email" placeholder="Email" />
			<input type="password" class="password" placeholder="Password" name="password"/>
			<input type="password" placeholder="Confirm Password" name="confirm_password" class="confirm_password"/>
			<button type="submit" id="submit" disabled>Sign Up</button>
			</div>
			</form>
		</div>

		<?php include "inc/footer.php" ?>
