<?php
	if(!isset($_SESSION))
		session_start();

	if(isset($_POST["submitLogin"])){
		$id = $_POST["username"];
		$pass = $_POST["password"];

		//check login credentials
		if($id=="admin" && $pass=="admin"){
			$_SESSION['user'] = $id;
			echo "<script>alert(\"You have successfully login\");</script>";
			echo "<script>location.href=\"index.php\"</script>"; //redirect homepage
			exit();
		}
		else{
			echo "<script>alert('Wrong credentials! Please try again');</script>";
			echo "<script>location.href=\"index.php?submitFail=true\"</script>";//reopen login modal
			exit();
		}
	}
?>
<!-- login modal -->
<div id="login" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom modal-max-width">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('login').style.display='none'"
			class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="img/user_icon.png" alt="Avatar" width="30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="login.php" method="post">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username"
			name="username" required>

		  <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password"
			name="password" required>

		  <button class="w3-button w3-block w3-black w3-section w3-padding w3-round-large"
			type="submit" name="submitLogin" value="submit">Login</button>

		  <input class="w3-check w3-margin-top" type="checkbox"> Remember me
        </div>
      </form>
    </div>
</div>
