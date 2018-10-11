<?php
	if(isset($_GET["total"])){
		echo "<script>alert(\"You have successfully check out with item of RM {$_GET["total"]}\");</script>";

		$dbconnect = mysqli_connect('localhost', 'root','');
		mysqli_select_db($dbconnect, 'safety_equip');
		mysqli_query($dbconnect, "TRUNCATE TABLE product");
		mysqli_close($dbconnect);
	}

	//print all the items in the cart
	function printCartTable(){
		$total = 0;

		$dbconnect = mysqli_connect('localhost', 'root','');
		mysqli_select_db($dbconnect, 'safety_equip');

		$view = "SELECT product_name, product_price, product_quantity, total_price FROM product";
		$result = $dbconnect->query($view);
		if($result->num_rows > 0){
			while ($row = $result->fetch_assoc()){
				echo "<tr><td>" . $row["product_name"]. "</td> <td>" . $row["product_price"]. "</td> <td>" . $row["product_quantity"]. "</td> <td>" . $row["total_price"]. "</td>";
				$total = $total + $row["total_price"];
			}
		}

		else{
			echo "<tr><td>No item in cart</td><td></td><td></td><td></td></tr>";
		}

		echo "<tr>
				<td></td>
				<td></td>
				<td><b>Total: </b></td>
				<td><b>RM $total</b></td>
				</tr>";

		return $total;
	}

	include("header.php");
	?>

	<div class="content-custom">
	<div class="w3-content">
	<div class="w3-row custom-padding">
		<table class="w3-table-all w3-margin">
		<tr>
			<th>Smart Phone</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Amount</th>
		</tr>
		<?php
			$total = printCartTable();
		?>
		</table>
		<?php
			echo "<a class=\"w3-button w3-black w3-round-large
			w3-padding-small w3-large w3-hover-grey w3-right w3-margin-top w3-margin-bottom
			confirmation\" href=\"shoppingCart.php?total=$total\">Check Out</a>";
		?>

		<button id="myBtn" class="w3-button w3-black w3-round-large w3-padding-small w3-large w3-hover-grey
		w3-right w3-margin-top w3-margin-bottom w3-margin-right">Edit</button>

		<?php
			if(isset($_POST["submitEdit"])){
				$name = $_POST["productname"];

				//remove product from shopping cart
				$dbconnect = mysqli_connect('localhost', 'root','');
				mysqli_select_db($dbconnect, 'safety_equip');

				$delete = "DELETE FROM product WHERE product_name = ('$name')";

				if(mysqli_query($dbconnect, $delete)){
					echo "<script>alert(\"You have successfully remove the product from the shopping cart\");</script>";
					echo "<script>location.href=\"shoppingCart.php\"</script>"; //redirect shopping cart page
					exit();
				}
				else{
					echo "<script>alert('Fail to remove item! Please try again');</script>";
					echo "<script>location.href=\"shoppingCart.php\"</script>";
					exit();
				}
			}
		?>
		<div id="edit" class="w3-modal">
			<div class="w3-modal-content w3-card-4 w3-animate-zoom modal-max-width">

				<div class="w3-center"><br>
				<span onclick="document.getElementById('edit').style.display='none'"
					class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
				</div>

				<form class="w3-container" action="shoppingCart.php" method="post">
				<div class="w3-section">
					<label><b>Which product do you want to remove? </b></label>
					<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Product Name"
					name="productname" required>

					<button class="w3-button w3-block w3-black w3-section w3-padding w3-round-large"
					type="submit" name="submitEdit" value="submit">Remove</button>
				</div>
				</form>
			</div>
		</div>

			</div>
		</div>
		</div>


	<?php include("footer.php"); ?>



	<!-- javascript to ask confirmation from user
	-->

	<script type="text/javascript">
		$('.confirmation').on('click', function () {
				return confirm('Are you sure you want to check out?');
		});

	// Get the modal
	var modal = document.getElementById('edit');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal
	btn.onclick = function() {
		modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}

	</script>
