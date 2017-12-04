<?php

  // Initialize the session
  session_start();

  // If session variable is not set it will redirect to login page
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: admin_login.php");
    exit;
  }

  require_once("php/create_table.php");

  $query = "SELECT * FROM responses;";

  $result = mysqli_query($link, $query);

  $link->close();
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
    <title>Milan Lab 9 - Admin View</title>

  </head>

  <body>
    <?php include 'inc/admin_nav.php';?>
  	<article class="contain">
      <div class="break">.</div>

      <h1>Administrator Access</h1><br>

      <h2>Current Responses to Your Survey</h2>

      <div class="explain">All the responses entered from participants are displayed on the table below. You can
      	<a href="admin_edit.php"> edit</a>
      	entries as you wish or can
      	<a href="admin_delete.php">delete</a>
      the entries of your choice.</div>

      <table class="responses">

        <tr>
          <th>User ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Student?</th>
          <th>International Student?</th>
          <th>Country of Origin</th>
          <th>Favorite Cuisines</th>
          <th>Favorite Restaurants</th>
          <th>Other Restaurants</th>
        </tr>

        <?php while($temp = mysqli_fetch_assoc($result)) {  ?>

            <tr>
              <td><?php echo $temp['user_id']; ?></td>
              <td><?php echo $temp['fname']; ?></td>
              <td><?php echo $temp['lname']; ?></td>
              <td><?php echo $temp['email']; ?></td>
              <td><?php echo $temp['isStudent']; ?></td>
              <td><?php echo $temp['isInternational']; ?></td>
              <td><?php echo $temp['country']; ?></td>
              <td><?php echo $temp['cuisines']; ?></td>
              <td><?php echo $temp['restaurants']; ?></td>
              <td><?php echo $temp['comments']; ?></td>
            </tr>

        <?php } ?>

      </table>

    </article>

  <footer> &copy; This webpage is created by Team Milan for CSC 174 Assignment 9.</footer>
  <?php include "inc/scripts.php" ;?>

  </body>

</html>
