<?php
	//initialize variables
	$country = "Malaysia";
	$language = "English";
	$currency = "MYR";

	//if cookie is set
	if(isset($_COOKIE['country'])){
		switch($_COOKIE['country']){
			case 1: $country = "Malaysia";
					break;
			case 2: $country = "United States";
					break;
			case 3: $country = "Japan";
					break;
			case 4: $country = "United Kingdom";
					break;
			case 5: $country = "China";
					break;
		}

		switch($_COOKIE['currency']){
			case 1: $currency = "MYR";
					break;
			case 2: $currency = "USD";
					break;
			case 3: $currency = "JPY";
					break;
			case 4: $currency = "EUR";
					break;
			case 5: $currency = "RMB";
					break;
		}
	}

?>
