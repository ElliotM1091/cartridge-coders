<?php require_once("../php/partials/head-utils.php"); ?>
<?php require_once("../php/partials/header.php"); ?>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link rel="stylesheet" href="../css/style2.css" type="text/css">

<body ng-controller="AccountProductController">
	<div class="container">
		<div class="sfooter">
			<div class="panel profilecss">
				<div class="row" align="justify">
					<p>ROMuLess offers login by PayPal. Signing in with PayPal is quick (just a User Id and Password) and
						transactions are secured with verified PayPal accounts. PayPal Identity frees you from having yet
						another login to remember and allows for a seamless checkout. No financial data is storred by ROMuLess
						and you are protected by PayPal's buyer/seller guarentees.</p>
				</div>
				<div class="row" align="center">
					<p><br><a
							href="https://www.sandbox.paypal.com/webapps/auth/protocol/openidconnect/v1/authorize?client_id=AWoiHG8w-yaeYyODSBIzJ-awWkLVPo7G9zWJMomAFeMTVw5wyRG_b2pyYxl7a7wB7ByjVLJ0aQ6FdVDj&response_type=code&scope=openid email profile&redirect_uri=https://bootcamp-coders.cnm.edu/~ddeleeuw/cartridge-coders/public_html/paypal/account.php"><img
								src="../image/paypal-login.png"></img></a><br><br></p>
				</div>
				<div class="row" align="justify">
					<p>As well, logging in with PayPal will allow you to view your own cartridges for sale, add new
						carterages, leave feedback on buyer/seller and ask questions prior to purchase. If however you prefer
						not to login with PayPal, just click the buy now button and no data will be sharred with ROMuLess but
						the transaction will still go through.</p>

				</div>
			</div>

			<!----------------------------------- if then statement for logged in or not ------------------>


		</div>
	</div>
	<?php require_once("../php/partials/footer.php"); ?>
</body>
</html>

