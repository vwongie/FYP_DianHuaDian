<?php
	include("header.php");

	//function to print flower
	function printItem($imageName,$itemName,$description,$price){
?>
	<div class="w3-row custom-padding">
		<div class="picture">
			<img class="w3-padding-16" src="img/<?php echo $imageName; ?>" alt="rose" width="250" height="300">
		</div>
		<div class="text-beside-image">
			<h3 class="w3-center"><?php echo ucwords($itemName); ?></h3>
				<p><?php echo $description;?></p>
				<p class="font-price"><b>Price: RM<?php echo $price;?></b></p>
				<form action="addToCart.php" method="post">
					<label>Quantity: </label>
					<input type="number" name="quantity"><br>
					<input type="hidden" name="price" value="<?php echo $price;?>">
					<input type="hidden" name="item" value="<?php echo $itemName;?>">
					<button class="w3-button w3-black w3-hover-grey w3-round-xxlarge addtocartbtn" type="submit" value="submit">Add to Cart</button>
				</form>
		</div>
	</div>
<?php
	}
?>


<div class="w3-content">
	<?php
		//safety helmet
		$description = "
		<table style='width:90%'>
			<tr>
				<td>Display:</td>
				<td>6.4inch Super AMOLED capacitive touchscreen (1440x2960 pixels ~516 ppi density)</td>
				<td> </td>
			</tr>
			<tr>
				<td>Camera:</td>
				<td>12MP 2160p</td>
				<td> </td>
			</tr>
			<tr>
				<td>Ram:</td>
				<td>6/8GB</td>
				<td> </td>
			</tr>
			<tr>
				<td>Processors:</td>
				<td>Exynos 9810 Octa-core (4x2.7 GHz Mongoose M3 & 4x1.8 GHz Cortex-A55)</td>
				<td> </td>
			</tr>
		</table>";
		printItem("note9.png","Samsung Galaxy Note 9",$description,3699.00);
	?>

	<?php
		//safety goggles
		$description = "<table style='width:90%'>
			<tr>
				<td>Display:</td>
				<td>6.5inch OLED capacitive touchscreen (1242x2688 pixels ~458 ppi density)</td>
				<td> </td>
			</tr>
			<tr>
				<td>Camera:</td>
				<td>12MP 2160p</td>
				<td> </td>
			</tr>
			<tr>
				<td>Ram:</td>
				<td>4 GB</td>
				<td> </td>
			</tr>
			<tr>
				<td>Processors:</td>
				<td>Apple A12 Bionic Hexa-core (2x Vortex + 4x Tempest)</td>
				<td> </td>
			</tr>
		</table>";
		printItem("IPXsMax.png","Apple iPhone Xs Max",$description,5599.00);
	?>
	
</div>
<?php include("footer.php");?>
