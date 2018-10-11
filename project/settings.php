<?php
	if(isset($_POST['submitSettings'])){
		//set all the preferences in cookie
		setcookie("country",$_POST['country']);
		setcookie("language",$_POST['language']);
		setcookie("currency",$_POST['currency']);
		setcookie("color",$_POST['color']);
		echo "<script>alert(\"Settings have been saved\");
				location.href=\"index.php\";</script>";
		exit();

	}

	//function to print the drop down
	function dropDown($title,$choices){
		echo "<select name=\"$title\" class=\"w3-input w3-border w3-margin-bottom\">";

		for($i=0;$i<count($choices);$i++){
			$n = $i+1;
			echo "<option value=\"$n\">$choices[$i]</option>";
		}
		echo "</select>";
	}
?>

<!-- settings modal -->
<div id="modalsettings" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom modal-max-width">

      <div class="w3-center">
        <span id="closeSettings" onclick="document.getElementById('modalsettings').
			style.display='none';" class="w3-button w3-xlarge w3-hover-red w3-display-topright"
			title="Close Modal">&times;</span>
        <img src="img/setting_icon.png" alt="Settings" width="30%" height="auto"
			class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="settings.php" method="post">
        <div class="w3-section">
          <label><b>Country</b></label>
		  <?php
			//country drop down
			$countries = array("Malaysia","United States","Japan","United Kingdom","China");
			dropDown("country",$countries);
		  ?>

		  <label><b>Currency</b></label>
          <?php
			//currency drop down
			$currencies = array("MYR","USD","JPY","EUR","RMB");
			dropDown("currency",$currencies);
		  ?>

		  <label><b>Background Color</b></label>
		  <!-- background color preferences drop down -->
		  <select name="color" class="w3-input w3-border w3-margin-bottom">
			<option value="#ffffff">White</option>
			<option value="#66ccff">Blue</option>
			<option value="#ff9999">Red</option>
			<option value="#ffcc66">Gold</option>
			<option value="#ffb3ff">Light Purple</option>
		  </select>

          <button id="submitSettings" class="w3-button w3-block w3-black w3-section w3-padding w3-round-large"
			type="submit" name="submitSettings" value="submit">Save</button>

        </div>
      </form>
    </div>
  </div>
