<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<title>Login with PayPal - v3</title>
	</head>
	<body>


		<h1>Login with PayPal - v3</h1>
		<p>Great! Now you are a member of our site.</p>
		<hr/>

		<?php

		// --------------------------------------------- get auth code -----------------------------------------



		require_once(dirname(__DIR__) . "/vendor/autoload.php");
		$authCode = filter_input(INPUT_GET, "code", FILTER_SANITIZE_STRING);

		//		echo $authCode;


//------------------------------------------------ cURL ------------------------------------------------
// ----- @see https://developer.paypal.com/docs/api/#identity & http://incarnate.github.io/curl-to-php/
		

// ----- cURL - initialize

		$ch = curl_init();

		// ----- cURL - set options

		curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/identity/openidconnect/tokenservice");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "client_id=AWoiHG8w-yaeYyODSBIzJ-awWkLVPo7G9zWJMomAFeMTVw5wyRG_b2pyYxl7a7wB7ByjVLJ0aQ6FdVDj&client_secret=EDRJgYO1yO0_Y_ligCIUIomHjaGRiXyuWt5lYr7W4pupqxyyC_iK_1N36MYB3jdiKxCp6JAyzxg5a2FE&grant_type=authorization_code&code=".$authCode);
		curl_setopt($ch, CURLOPT_POST, 1);

		$result = curl_exec($ch);

		// ----- cURL - error checking

		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}

		// ----- cURL - close session

		curl_close ($ch);


		// ----- cURL - close session

//		echo '<pre>';
		print_r($result);




//<h2>Your Data</h2>;
//<p><b>Name:</b> echo </p>;
//<p><b>Email:</b> </b> echo </p>;
//<p><b>Code:</b> </b> echo </p>;
//<p><b>Token:</b> </b> echo </p>;
//


//		<hr/>;
		echo $authCode;

?>



	</body>
</html>
