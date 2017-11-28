<?php

require_once("php/insert_responses.php");

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

    <title>Thank you!</title>
</head>
<body>
	<div class="masthead">
         <div class="inner">
              <a class="masthead-brand" href="user_survey.php">Rochester Eats</a>
         </div>
     </div>

<div class="contain">
	<h1>Thank you for your response, <?php echo $fname ?>!</h1>

	<div class="thanks">We value your input and appreciate you taking time out of your day to answer our questions!</div>

	<br>

	<div class="thanks">You can <a href="user_survey.php">click here</a> to go back to the homepage.</div>

</div>


</body>
</html>