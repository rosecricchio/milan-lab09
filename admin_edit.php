<?php
  // // Initialize the session
  // session_start();
  //
  // // If session variable is not set it will redirect to login page
  // if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  //   header("location: admin_login.php");
  //   exit;
  // }

  require_once("php/create_table.php");

  if (isset($_POST["selection"])) {
  // make the update query here

    $updatedFields = array();
    $updateID = $_POST["selection"];

    if (!empty($_POST["fname2"])) {
      array_push($updatedFields, [Trim(stripslashes($_POST["fname2"])), 'fname']);
    }
    if (!empty($_POST["lname2"])) {
      array_push($updatedFields, [Trim(stripslashes($_POST["lname2"])), 'lname']);
    }
    if (!empty($_POST["email2"])) {
      array_push($updatedFields, [Trim(stripslashes($_POST["email2"])), 'email']);
    }
    if (!empty($_POST["isStudent2"])) {
      array_push($updatedFields, [Trim(stripslashes($_POST["isStudent2"])), 'isStudent']);
    }
    if (!empty($_POST["isInternational2"])) {
      array_push($updatedFields, [Trim(stripslashes($_POST["isInternational2"])), 'isInternational']);
    }
    if (!empty($_POST["country2"])) {
      array_push($updatedFields, [Trim(stripslashes($_POST["country2"])), 'country']);
    }
    if (!empty($_POST["cuisines2"])) {
      array_push($updatedFields, [Trim(stripslashes($_POST["cuisines2"])), 'cuisines']);
    }
    if (!empty($_POST["restaurants2"])) {
      array_push($updatedFields, [Trim(stripslashes($_POST["restaurants2"])), 'restaurants']);
    }
    if (!empty($_POST["comments2"])) {
      array_push($updatedFields, [Trim(stripslashes($_POST["comments2"])), 'comments']);
    }

    while ($val = array_pop($updatedFields)) {
      $query  = "UPDATE responses ";
      $query .= "SET {$val[1]} = '{$val[0]}'";
      $query .= "WHERE user_id = {$updateID};";

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
  <link href="https://fonts.googleapis.com/css?family=Shrikhand|Lato" rel="stylesheet">
    <title>Milan Lab 9 - Admin Edit</title>

  </head>

  <body>
    <?php include 'inc/admin_nav.php';?>
  	<article class="contain">
    <div class="break">.</div>

    <h1>Administrator Access</h1><br>

    <h2>Edit Responses</h2>

    <div class="explain">Please select the entry you want to edit and use the boxes at the bottom of the table to update the section you want to change. Click 'Update' when finished.</div>

      <form action="admin_edit.php" method="POST">

        <table class="responses">

          <tr>
            <th>Select</th>
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
                <td><input type="radio" name="selection" value=<?php echo $temp['user_id']; ?>></td>
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

          <tr>
            <td>Update Info:</td>
            <td></td>
            <td><input type="text" name="fname2" size="10"></td>
            <td><input type="text" name="lname2" size="10"></td>
            <td><input type="email" name="email2" size="10"></td>
            <td><input type="text" name="isStudent2" size="5"></td>
            <td><input type="text" name="isInternational2" size="5"></td>
            <td><input type="text" name="country2" size="10"></td>
            <td><input type="text" name="cuisines2" size="10"></td>
            <td><input type="text" name="restaurants2" size="10"></td>
            <td><input type="text" name="comments2" size="10"></td>
          </tr>

        </table>

        <input type="submit" value="Update" style="margin-top: 15px;">

      </form>

    </article>

  <footer> &copy; This webpage is created by Team Milan for CSC 174 Assignment 9.</footer>
  <?php include "inc/scripts.php" ;?>

  </body>

</html>
