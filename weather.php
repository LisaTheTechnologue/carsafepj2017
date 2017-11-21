<?php
$_SESSION['title'] = "WALKING, WEATHER, AND DRIVING CONDITIONS ";
$_SESSION['lead'] = "Check Before Going Out!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
	<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
	<meta NAME="TITLE" CONTENT="Automobile Safety Foundation">
	<meta NAME="DESCRIPTION" CONTENT="A public safety announcement from the Automobile Safety Foundation: STEERING LOCKS POSE AN INTERNATIONAL SAFETY EMERGENCY.">
	<meta NAME="KEYWORDS" CONTENT="AUTOMOBILE SAFETY FOUNDATION , car safety, carsafe.org, travel, news, expose, censorship, cover up, cover-up, cars, automobiles, autos, auto safety, transportation, auto news, psa, public safety announcement, non profit organization, accidents, driving, lawsuits, books and movies">
	<meta name="Advisor" content="www.wsiProNetResults.com">
	<meta NAME="OWNER" CONTENT="ASF2001@hotmail.com">
	<meta NAME="AUTHOR" CONTENT="AUTOMOBILE SAFETY FOUNDATION.">
	<meta HTTP-EQUIV="CHARSET" CONTENT="US-ASCII">
	<meta HTTP-EQUIV="CONTENT-LANGUAGE" CONTENT="English">
	<meta NAME="ROBOTS" CONTENT="index,follow">
	<meta NAME="REVISIT-AFTER" CONTENT="15 days">
	<meta NAME="ROBOTS" CONTENT="ALL">

    <!-- SmartAddon.com Verification --> 
	<meta name="smartaddon-verification" content="e6782087caa9679395ea9100ae5d0ea3" />

	<!--Title-->
	<title>AUTOMOBILE SAFETY FOUNDATION</title>

	<!--Favicon-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
   	
    <!--Custom StyleSheet-->
    <link href="css/banner.css" rel="stylesheet" />
    <link href="css/Site.css" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
	<link href="css/other.css" rel="stylesheet" />

	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Oxygen+Mono|Handlee|Space+Mono" rel="stylesheet">
	
	<!--Icon: Font Awesome-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!--Bootstrap 4--> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	
</head>
<body >
<?php include "php/nav.php" ?>
<?php include "php/banner2.php" ?>
<div class="container">
	<p>Park your car and walk. Walking is good for your health, and not driving is good for the environment.<br>
	Check the weather and driving conditions </p>
	<form action="http://www.weather.com/weather/today/" method="get" 
		target="_blank" name="frmMain">
		<label for="zip">Enter city or US Zip:</label>
		<input id="zip" class="form-group" name="destination" type="text" size="8" value="" />
		<input type="image" src="http://image.weather.com/pics/button_go.gif" width="26" 
		height="23" border="0" alt="go!" value="Go City" onclick="submitLocation(); return false;" />
	</form>
</div>
<?php include "php/navbottom.php" ?>

<?php include "php/footer.php" ?>
</body>
</html>