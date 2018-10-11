<?php
	$dbconnect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($dbconnect, 'safety_equip');

	$productname = ($_POST['item']);
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$amount = $price*$quantity;

	$query = "INSERT INTO product(product_name, product_price, product_quantity, total_price) VALUES ('$productname', '$price', '$quantity', '$amount')";

	if(mysqli_query($dbconnect, $query)){
		echo "<script>alert(\"You have successfully added the item\");</script>";
		echo "<script>location.href='safety.php'</script>";
	}
	else{
		echo "error";
	}

	mysqli_close($dbconnect);
?>
