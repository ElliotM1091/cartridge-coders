<?php require_once("../php/partials/head-utils.php"); ?>
<?php require_once("../php/partials/header.php"); ?>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link rel="stylesheet" href="../css/style2.css" type="text/css">

<body ng-controller="HomeController">
	<div class="container">
		<div class="sfooter">
			<div class="panel profilecss">
				<p></p>
				<p><strong>Welcome! You are now logged in with "Log In with PayPal".</strong></p>
				<p>Your account information: </p>
				<p>Name: <?php echo $_SESSION["sessionaccountname"]; ?></p>
				<p>Email: <?php echo $_SESSION["sessionaccountppemail"]; ?></p>
				<p>UserName: <?php echo $_SESSION["sessionaccountusername"]; ?></p>
				<p></p>
				<p><br></p>
				<p><a href=<?php session_destroy(); ?>><img src="../image/destroysessiondata.gif" width="100"
																		  height="100"></img></a> <--- click me to destroy session data
					(testing link only)</p>
				<p><br></p>
				<?php var_dump($_SESSION); ?>
			</div>
		</div>


		
		<div ng-view></div>
	</div>
	<?php require_once("../php/partials/footer.php"); ?>
</body>
</html>

