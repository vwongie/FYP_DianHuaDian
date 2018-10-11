	<?php
	include("checkpref.php");
	include("settings.php");
	include("login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dian Hua Dian</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		th{
			font-weight: normal;
		}
	</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding  w3-card header-letter-spacing">

    <!-- Right-sided navbar links. Hide them on small screens -->
		<div class="w3-center w3-hide-small">
		  <a href="index.php#home" class="w3-bar-item w3-button">Home</a>
		  <a href="index.php#about" class="w3-bar-item w3-button">About</a>
		  <a href="index.php#safety" class="w3-bar-item w3-button">Phone Products</a>
		  <a id="register" href="register.php" class="w3-bar-item w3-button">Register</a>
		  <a id="login" onclick="document.getElementById('login').style.display='block'" class="w3-bar-item w3-button">Login</a>
		  <a href="index.php#career" class="w3-bar-item w3-button">Careers</a>
		  <a href="index.php#contact" class="w3-bar-item w3-button">Contact Us</a>
		  <a class="w3-bar-item w3-button" href="shoppingCart.php">Shopping Cart</a>
		  <a onclick="document.getElementById('modalsettings').style.display='block'" class="w3-bar-item w3-button">Settings</a>


		</div>
		<div class="w3-right w3-hide-small">

		  <div class="w3-dropdown-hover w3-white">
			  <button class="w3-button"><img src="img/setting_icon.png"
			  alt="Preferences" height="30" width="30"></button>
				<div class="w3-dropdown-content w3-bar-block w3-border">
					<span class="w3-padding w3-block"><?php echo $country;?></span>
					<span class="w3-padding w3-block"><?php echo $language;?></span>
					<span class="w3-padding w3-block"><?php echo $currency;?></span>
				</div>
		  </div>
		  <div class="w3-bar-item">
			<span class="header-time-letter-spacing" id="date"></span>
			<span class="header-time-letter-spacing" id="time"></span>
		  </div>

		  <span class="w3-bar-item invisible" id="username"><b>
			<?php if(isset($_SESSION['user']))echo $_SESSION['user'];?></b></span>
		  <a id="logout" class="w3-bar-item w3-button w3-black w3-round-large"
			style="display:none;" href="logout.php">Logout</a>
		</div>

    </div>
  </div>
<?php
	//change the header if login is success
	if(isset($_SESSION['user'])){
		echo "<script>document.getElementById(\"logout\").style.display = \"block\";</script>";
		echo "<script>document.getElementById(\"username\").style.display = \"block\";</script>";
		echo "<script>document.getElementById(\"login\").style.display = \"none\";</script>";
		echo "<script>document.getElementById(\"register\").style.display = \"none\";</script>";
	}
?>

<!-- javascript to update time and date -->
<script type="text/javascript">
		var dateElement = document.getElementById("date");

		function updateDate(date){
			n =  new Date();
			y = n.getFullYear();
			m = n.getMonth() + 1;
			d = n.getDate();

			date.innerHTML = m + "/" + d + "/" + y;
		}

		var clockElement = document.getElementById( "time" );

		function updateClock ( clock ) {
			clock.innerHTML = new Date().toLocaleTimeString();
		}
		updateClock( clockElement );
		updateDate( dateElement);
		setInterval(function () {
			updateClock( clockElement );
			updateDate( dateElement);
		}, 1000);
</script>
