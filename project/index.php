<?php
	include("login.php"); //include login

	//reopen login if fail
	if(isset($_GET['submitFail'])){
		echo "<script>document.getElementById(\"login\").style.display=\"block\"</script>";
	}

	include("header.php");
	include("feedback.php"); //include feedback
?>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide header-width" id="home">
  <img class="w3-image" src="img/background1.jpg" alt="Dian Hua Dian"
	width="1600" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
  </div>
</header>

<!-- Page content -->
<div class="w3-content content-max-width">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Dian Hua Dian Online Shop</h1><br>

      <p class="w3-large">Dian Hua Dian Online Shop was founded in July 2005 by a group of students who are at their last semester in college.
	  Our shop consist of a variety brands of smartphone. We offer comparison function and purchase feature for user. User can select up to 3 smartphones
	  to compare. We will compare the speculations of the phone selected as well as the pros and cons of the phone written by user.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">We believe every user can find their choice of smartphones in our shop and can know every 
	  details about the smartphone you selected in just a glance.</p>
    </div>
  </div>

  <hr>

  <!-- Item Section -->
  <div class="w3-row w3-padding-64" id="safety">
    <div class="w3-row l6 w3-padding-large">
      <h1>Our Smartphones</h1><br>

    </div>

    <div class="w3-row l6 w3-padding-large">
		<a href="safety.php">
		<img class="imghover" src="img/note9.png" width="250" height="250">
		<img class="imghover" src="img/IPXsMax.png" width="200" height="250">
		</a>
	</div>
  </div>

  <hr>

  <!-- Career Section -->
  <div class="w3-row w3-container w3-padding-64" id="career">

	<h1>Careers<h1><br>
	<h2 class="w3-center">Join us now at Dian Hua Dian Online Shop</h2>
	<div class="w3-row l6 w3-padding-64 w3-center">
		<img class="w3-margin" src="img/joinus.jpg" width="500" height="300">
	</div>

  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact Us</h1><br>
    <p>Be the first to know about giveaways, product launches, new parenting tools and more by joining our mailing list.</p>
    <p class="w3-text-red w3-large"><b>Dian Hua Dian, 80 Jalan Tembaga, 11600, Pulau Pinang</b></p>
    <p>You can also submit feedback by clicking the button below:</p>
	<a class="w3-button w3-blue w3-round" onclick = "document.getElementById('modalfeedback').style.display='block'">
		Submit Feedback</a>
	<p>You can also contact us by phone 017-5821533 or email <a class="w3-text-blue" href="mailto:email@safetyfirst.com">
		dianhuadian@smartphone.com</a>, or you can visit our social medias below:</p>
	<a href="https://www.facebook.com"><img src="img/Facebook-icon.png" alt="Facebook" width="75" height="75"></a>
	<a href="https://www.linkedin.com"><img src="img/linkedin-icon.png" alt="Linked In" width="70" height="70"></a>
	<a href="https://twitter.com/"><img src="img/Twitter-icon.png" alt="Twitter" width="85" height="85"></a>
	<a href="https://www.skype.com"><img src="img/Skype-icon.png" alt="Skype" width="75" height="75"></a>

  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<?php include("footer.php");?>
