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

    <title>Milan Lab 9</title>
  </head>

  <body class="content">
  	<div class="masthead">
         <div class="inner">
              <a class="masthead-brand" href="index.php">Rochester Eats</a>
              <nav class="nav nav-masthead">
			    <a href="#anthro" class="active nav-link smoothScroll">Background</a>
			    <a href="#rochester" class="active nav-link smoothScroll">About Rochester</a>
			    <a href="#goal" class="active nav-link smoothScroll">Our Goal</a>
			    <a href="#survey" class="active nav-link smoothScroll">Take Survey!</a>
			  </nav>
         </div>
     </div>
  	<article>
  	<div class="contain">

	<div class="break">.</div>

  <div class="information">
  	<h1 class="title">Help us bring YOUR favorite foods to YOUR community!</h1>

  	<div class="par1" id="anthro">
  	<h2 class="offset">An Anthropological Perspective</h2>
  	<p>Apart from travelers, for whom eating out was first invented, few people eat out from necessity. Even more than in the home, eating out is a ceremonial event and must be considered as such. There are basically two types of eating out: entertaining oneself and entertaining others. In what sense is the family’s taking itself out to dinner ceremonial? Just as much as the family’s having the grandparents round to formal Sunday tea in the dining room. It is a special occasion marked by special dress and behavior. At its lowest level, it can depart little from eating informally at home: a visit to the local burger or fish and chip joint for a quick meal, for example. But even these places have rules that differ from the home. You cannot lounge around the local pizza parlor in a dressing gown. To go out in the street at all one must put on footwear. It all requires an effort that does not go into the informal home eating.</p>
	</div>

  	<div class="par2">
  	<figure>
  		<img src="images/luck.jpg" alt="Image of Restaurant Good Luck in Rochester, NY">
  		<figcaption>Restaurant Good Luck</figcaption>
  	</figure>
  	</div>

  	<div id="rochester" class="par3">
  	<h2 class="offset">About Rochester</h2>
  	<p>Rochester has five colleges and universities in close proximity to downtown. Many of the students in these colleges are international, and for some of them it is their first time in Rochester and in the U.S. It is very common that students live off campus after their first one or two years in college, and start eating on campus less over time. They switch to cooking at home or, due to their hectic schedule, at turn to restaurants or takout. For students who come from very different background and cultures, it might be tough to adjust to one specific cuisine, or they simply might want variety over time given that they will spend at least four years in Rochester. Besides colleges, Rochester also has corporations like Wegmans, Xerox, Eastman Kodak, Verizon, and Exelis, who are some of the largest employers in the area. Given their employees busy schedules, dining options are not only important to students, who make up a large chunk of the local community, but also to working professionals.</p>
  </div>


  <div class="par6">
  	<figure>
  		<img src="images/downtown.jpg" alt="Downtown Rochester, NY">
  		<figcaption>Downtown Rochester, NY</figcaption>
  	</figure>
  </div>

	<div class="par4">
	<h2>Top 10 Restaurants</h2>
	<ol>
		<li>East End Tavern</li>
		<li>Nosh</li>
		<li>Good Luck Restaurant</li>
		<li>Dinosaur Bar-B-Que</li>
		<li>The Spirit Room</li>
		<li>Morton’s the Steakhouse</li>
		<li>The Vesper</li>
		<li>Tap and Mallet</li>
		<li>Cedar Mediterranean Restaurant</li>
		<li>The French Quarter</li>
	</ol>
	</div>

  	<div class="par5">
  	<h2 class="offset">Our Goal</h2>
  	<p>Our aim is to understand what YOU, a Rochester local, like and dislike when it comes to various cuisines and restaurant options  so that we can bring your favorite foods closer to you. Through our survey, we want to understand more about your background (which plays a big role at shaping your preferences) and what your favorite cuisines are. Please take our short survey and help us help you eat better!</p>
  	</div>


  </div><!--information-->
</div><!--contain-->

	<a id="survey" class="smoothScroll">
	<div class="break">.</div>
	</a>
  	<form id="fullForm" action="user_welcome.php" method="post">

  	<div class="survey_color">

  	<div class="survey contain">
  	<fieldset>
		<legend>Contact Information</legend>

	  	<label class="fixed" for="fname">First Name</label>
		    <input type="text" id="fname" name="fname" placeholder="Your name..." required><br>

	    <label class="fixed" for="lname">Last Name</label>
		    <input type="text" id="lname" name="lname" placeholder="Your last name..." required><br>

	    <label class="fixed" for="email">Email</label>
		    <input type="email" id="email" name="email" placeholder="Your email..." required><br>

	</fieldset>

	<fieldset>
		<legend>Survey</legend>
			<div class="questions first-h3">Are you a student?</div>
			<label class="radio-container">Yes
			  <input type="radio" id="studentYes" name="student" value="yes">
			  <span class="radio-checkmark"></span>
			</label>
			<label class="radio-container">No
			  <input type="radio" id="studentNo" name="student" value="no">
			  <span class="radio-checkmark"></span>
			</label>
			<!-- Only reveal next question if they click yes above-->
			<div class="conditional_hide" id="international">
				<div class="questions">Are you an international student?</div>
				<label class="radio-container">Yes
				  <input type="radio" id="intYes" name="international" value="yes">
				  <span class="radio-checkmark"></span>
				</label>
				<label class="radio-container">No
				  <input type="radio" id="intNo" name="international" value="no">
				  <span class="radio-checkmark"></span>
				</label>
			</div>
			<!-- only reveal next question if they respond yes-->
			<div class="conditional_hide" id="getCountry">
				<div class="questions">What country are you from?</div>
					<textarea name="country" id="country-of-origin"></textarea><br>
			</div>

			<div class="questions">Please select your favorite cuisines from the list below:</div>
			<label class="checkbox-container">American
			  <input type="checkbox" name="american" id="american" value="American">
			  <span class="checkmark"></span>
			</label>

			<label class="checkbox-container">Chinese
			  <input type="checkbox" name="chinese" id="chinese" value="Chinese">
			  <span class="checkmark"></span>
			</label>

			<label class="checkbox-container">Italian
			  <input type="checkbox" name="italian" id="italian" value="Italian">
			  <span class="checkmark"></span>
			</label>

			<label class="checkbox-container">Japanese
			  <input type="checkbox" name="japanese" id="japanese" value="Japanese">
			  <span class="checkmark"></span>
			</label>

			<label class="checkbox-container">Korean
			  <input type="checkbox" name="korean" id="korean" value="Korean">
			  <span class="checkmark"></span>
			</label>

			<label class="checkbox-container">Mediterranean
			  <input type="checkbox" name="mediterranean" id="mediterranean" value="Mediterranean">
			  <span class="checkmark"></span>
			</label>

			<label class="checkbox-container">Thai
			  <input type="checkbox" name="thai" id="thai" value="Thai">
			  <span class="checkmark"></span>
			</label>

			<div class="questions">Please select your favorite restaurants in Rochester from the list below:</div>
			<label class="checkbox-container">Dinosaur BBQ
			  <input type="checkbox" name="dinobbq" id="dinobbq" value="Dinosaur BBQ">
			  <span class="checkmark"></span>
			</label>

			<label class="checkbox-container">Lento
			  <input type="checkbox" name="lento" id="lento" value="Lento">
			  <span class="checkmark"></span>
			</label>

			<label class="checkbox-container">Restaurant Good Luck
			  <input type="checkbox" name="goodluck" id="goodluck" value="Restaurant Good Luck">
			  <span class="checkmark"></span>
			</label>

			<label class="checkbox-container">Seoul House
			  <input type="checkbox" name="seoulhouse" id="seoulhouse" value="Seoul House">
			  <span class="checkmark"></span>
			</label>

			<label class="checkbox-container">Shiki Sushi
			  <input type="checkbox" name="shiki" id="shiki" value="Shiki Sushi">
			  <span class="checkmark"></span>
			</label>

			<label class="checkbox-container">Tsingtao House
			  <input type="checkbox" name="tsingtao" id="tsingtao" value="Tsingtao House">
			  <span class="checkmark"></span>
			</label>

			<label class="checkbox-container">Tournedos Steakhouse
			  <input type="checkbox" name="tournedos" id="tournedos" value="Tournedos Steakhouse">
			  <span class="checkmark"></span>
			</label>
			<br>
			<label class="questions" for="comments">Please write down the names of some of your favorite restaurants in the U.S. and include the city which they are located in:</label><br>
				<textarea name="comments" id="comments"></textarea><br>
			<br>

	</fieldset>
	<input class="button" type="submit" value="Submit"><br>
</div><!--survey contain-->
</div><!--survey-color-->
<div class="contain citations">
	<h3>Citations:</h3>
	<ul>
	<li>Source of the <a class="text-link" href="http://www.sirc.org/publik/food_and_eating_10.html">'An Anthropological Perspective'</a> paragraph.</li>
	<li>Source of <a class="text-link" href="https://www.yelp.com/search?cflt=restaurants&find_loc=Rochester%2C+NY">'Yelp - Top 10 Rochester Restaurants'.</li>
	</ul>
</div>
	</form>
	<a href="#0" class="cd-top">Top</a>
	</article>
	<footer> &copy; This webpage was created by Team Milan for CSC 174 Assignment 09.</footer>
	<script src="js/showIfChecked.js"></script>
	<!-- SmoothScroll JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<!-- Bootstrap Scripts for Navigation-->
	<?php include "inc/scripts.php" ;?> 

  </body>

</html>
