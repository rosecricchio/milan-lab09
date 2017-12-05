<?php

  // Initialize the session
  session_start();

  // If session variable is not set it will redirect to login page
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: admin_login.php");
    exit;
  }

  require_once("php/create_table.php");

  if (!empty($_POST["selection"])) {
    foreach ($_POST["selection"] as $current) {

      $deleteID = $current;

      $query  = "DELETE FROM responses ";
      $query .= "WHERE indexVal = {$deleteID};";

      $push = mysqli_query($link, $query);
    }

  }

  // get all data
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
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat" rel="stylesheet">
    <title>Milan Lab 9 - Admin Delete</title>

  </head>

  <body>
    <?php include 'inc/admin_nav.php';?>
  	<article class="contain">

    <h1>Delete Responses</h1>

    <div class="explain">Please select the entries you want to delete and click the 'Delete' button.</div>

      <form action="admin_delete.php" method="POST">

        <table class="responses">

          <tr>
            <th>Select</th>
            <th>Index</th>
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
                <td><input type="checkbox" name="selection[]" value=<?php echo $temp['indexVal']; ?>></td>
                <td><?php echo $temp['indexVal']; ?></td>
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

        <input type="submit" class="button" value="Delete" style="margin-top: 15px;">

      </form>

    </article>

  <footer> &copy; This webpage is created by Team Milan for CSC 174 Assignment 9.</footer>
  <?php include "inc/scripts.php" ;?>

  </body>

</html>
