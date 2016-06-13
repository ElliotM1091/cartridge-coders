<?php require_once("../php/partials/head-utils.php"); ?>
<?php require_once("../php/partials/header.php"); ?>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link rel="stylesheet" href="../css/style2.css" type="text/css">

<body ng-controller="AccountProductController">
	<div class="container">
	<div class="sfooter">
		<div class="panel profilecss">
		<p>ROMuLess offers login by PayPal. Signing in with PayPal is quick (just a User Id and Password) and transactions are secured with verified PayPal accounts. PayPal Identity frees you from having yet another login to remember and allows for a seamless checkout. No financial data is storred by ROMuLess and you are protected by PayPal's buyer/seller guarentees.</p>
		</div>



			<p><br></p>
			<p><a href="https://www.sandbox.paypal.com/webapps/auth/protocol/openidconnect/v1/authorize?client_id=AWoiHG8w-yaeYyODSBIzJ-awWkLVPo7G9zWJMomAFeMTVw5wyRG_b2pyYxl7a7wB7ByjVLJ0aQ6FdVDj&response_type=code&scope=openid email profile&redirect_uri=https://bootcamp-coders.cnm.edu/~ddeleeuw/cartridge-coders/public_html/paypal/account.php"><img src="../image/paypal-login.png"></img></a> <--- click me to log in (testing link only)</p>
			<p><br></p>
			<p><a href=<?php session_destroy(); ?>><img src="../image/destroysessiondata.gif" width="100" height="100"></img></a> <--- click me to destroy session data (testing link only)</p>
			<p><br></p>
			
			
			






				<div class="col-md-12 profilecss">
<!--					<div class="panel">-->
						<p></p>
						<p><strong>Welcome! You are now logged in with "Log In with PayPal".</strong></p>
						<p>Your account information: </p>
						<p>Name: <?php echo $_SESSION["sessionaccountname"]; ?></p>
						<p>Email: <?php echo $_SESSION["sessionaccountppemail"]; ?></p>
						<p>UserName: <?php echo $_SESSION["sessionaccountusername"]; ?></p>
						<p></p>


						<!-- create an account object and put in session-->
						<!-- start session in super global $_session-->
						<!--if session not started start it-->

<!--						array (size=9)-->
<!--						'XSRF-TOKEN' => string 'ae7d9f967e764ad96d207d0bdce33a1165533e9a102243f3b506c7e3ab613d0698f0d88999ebc67ee1302d1412972befa413c7c7a057399206818380ac7c24ed' (length=128)-->
<!--						'sessionaccountid' => int 17-->
<!--						'sessionaccountimageid' => int 1-->
<!--						'sessionaccountactive' => int 1-->
<!--						'sessionaccountadmin' => int 0-->
<!--						'sessionaccountname' => string 'Humphrey Bogart' (length=15)-->
<!--						'sessionaccountppemail' => string 'humphrey.bogart@gmail.com' (length=25)-->
<!--						'sessionaccountusername' => string 'Humphrey17' (length=10)-->
<!--						'sessionBearerToken' => string 'A015xsSNJjLoWAD3zBRjVw.XqprLk9pIzJxK14Y3vPiOCrY' (length=47)-->

						<?php var_dump($_SESSION); ?>



						<div>

								<div class="container">

									<!-- angular view directive -->
<!--									<div ng-view></div>-->


								</div>





					</div>
<!--				</div>-->
			</div>



<!--		</div>-->
	</div>
	</div>
<?php require_once("../php/partials/footer.php"); ?>
</body>
</html>

