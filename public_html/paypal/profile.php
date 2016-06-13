<?php require_once("../php/partials/head-utils.php"); ?>
<?php require_once("../php/partials/header.php"); ?>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link rel="stylesheet" href="../css/style2.css" type="text/css">

<body>
	<div class="container">
	<div class="sfooter">
		<div class="well">

		<h2> ROMuLess uses login by paypal, blah, blah, blah, put more here</h2>
			<h3>commited to financial safty, etc</h3>
			<h4>if session user = null, click to login button else default display with any products where match</h4>
			<p><br></p>
			<p><a href="https://www.sandbox.paypal.com/webapps/auth/protocol/openidconnect/v1/authorize?client_id=AWoiHG8w-yaeYyODSBIzJ-awWkLVPo7G9zWJMomAFeMTVw5wyRG_b2pyYxl7a7wB7ByjVLJ0aQ6FdVDj&response_type=code&scope=openid email profile&redirect_uri=https://bootcamp-coders.cnm.edu/~ddeleeuw/cartridge-coders/public_html/paypal/account.php"><img src="../image/paypal-login.png"></img></a> <--- click me to log in</p>
			<p><br></p>





				<div class="col-md-12" style="background-color: white"><p><br></p></div>
				<div class="col-md-12 accountcss">
					<div class="panel">
						<p></p>
						<p><strong>Welcome! You are now logged in with "Log In with PayPal".</strong></p>
						<p>Your account information: </p>
						<p>Name: <?php echo $account->getAccountName(); ?></p>
						<p>Email: <?php echo $account->getAccountPpEmail(); ?></p>
						<p>UserName: <?php echo $account->getAccountUserName(); ?></p>
						<p></p>


						<!-- create an account object and put in session-->
						<!-- start session in super global $_session-->
						<!--if session not started start it-->



						<?php var_dump($_SESSION); ?>

						
					</div>
				</div>
			</div>



		</div>
	</div>
	</div>
<?php require_once("../php/partials/footer.php"); ?>
</body>
</html>

