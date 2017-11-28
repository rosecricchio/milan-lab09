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
    <title>Milan Lab08 - Admin</title>

  </head>

  <body>
    <?php include 'inc/admin_nav.php';?>
  	<article class="contain">
    <div class="break">.</div>

    <h1>Welcome to the Rochester Eats Survey Admin Page!</h1>
    <div class="explain">You can use this page to view data entries by everyone that participated in your survey, you can edit and change some of the data and you can delete desired entries.</div>
    <div class="question">How would you like to proceed?</div>

    <div class="inpage_links">
      <a href="admin_view.php">View current database entries</a><br>
      <a href="admin_edit.php">Edit data</a><br>
      <a href="admin_delete">Delete data</a><br>
    </div>

    </article>

  <footer> &copy; This webpage is created by Team Milan for CSC 174 Assignment 08.</footer>
  <?php include "inc/scripts.php" ;?> 

  </body>

  </html>

