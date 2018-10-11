
<?php
	if(isset($_POST["submitRegister"])){
		$conn = mysqli_connect('localhost', 'root', '');
		mysqli_select_db($conn, 'safety_equip');

		if(!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['conpass'])){
		$user = trim($_POST["user"]);
		$email = trim($_POST["email"]);
		$password = trim($_POST["password"]);
		$confirm_password = trim($_POST["conpass"]);

			if($password != $confirm_password){
				echo "<script>alert('Please make sure that password and confirm password are the same');</script>";
			}
			else{
					echo "<script>alert('You have successfully registered');</script>";
					$query = "INSERT INTO users (username, email, password, date_time) VALUES ('$user', '$email', '$password', NOW())";
					mysqli_query($conn, $query);
			}
		}
		else{
			echo "<script>alert('Please key in all the credentials');</script>";
			echo "<script>location.href=\"register.php\"</script>";
			exit();
		}
		mysqli_close($conn);
	}
?>
<?php include("header.php"); ?>
<div class="w3-display-container w3-content custom-padding" style="width:50%;">

	<div class="w3-card-4 card-padding card-background">
	<form action="register.php" method="post">

		<label>Username</label><br>
		<input class="w3-input w3-border w3-margin-bottom w3-round" type="text"
			name="user" placeholder="Enter username"><br>

		<label>Email</label><br>
		<input class="w3-input w3-border w3-margin-bottom w3-round"type="email"
			name="email" placeholder="Enter email"><br>

		<label>Password</label><br>
		<input class="w3-input w3-border w3-margin-bottom w3-round" type="password"
			name="password" placeholder="Enter password"><br>

		<label>Confirm Password</label><br>
		<input class="w3-input w3-border w3-margin-bottom w3-round" type="password"
			name="conpass" placeholder="Enter confirm password"><br>

		<button class="w3-button w3-light-green w3-block w3-round-large w3-padding-small
			w3-large button-margin w3-hover-blue" type="submit" name="submitRegister"
			value="submit">Submit</button>
	</form>
	</div>
	</div>

</div>
<?php include("footer.php");?>
