<?php require_once("../../php/partials/head-utils.php"); ?>
<?php require_once("../../php/partials/header-logged-in.php"); ?>
<link rel="stylesheet" href="../../css/style.css" type="text/css">
<link rel="stylesheet" href="../../css/style2.css" type="text/css">

<body ng-controller="HomeController">
	<div class="container">
		<div class="sfooter">
			<div class="panel profilecss">
				<p></p>
				<p><strong>Welcome! You are now logged in with "Log In with PayPal".</strong></p>
				<p><br></p>
				<p>Name: <?php echo $_SESSION["sessionaccountname"]; ?></p>
				<p>Email: <?php echo $_SESSION["sessionaccountppemail"]; ?></p>
				<p>UserName: <?php echo $_SESSION["sessionaccountusername"]; ?></p>
				<p></p>
<!--				<p><br></p>-->
<!--				<p><a href=--><?php //session_destroy(); ?><!-->
<!--				<img src="../image/destroysessiondata.gif" width="100"-->
<!--																		  height="100"></img></a> <--- click me to destroy session data-->
<!--					(testing link only)</p>-->
<!--				<p><br></p>-->
<!--				--><?php //var_dump($_SESSION); ?>
			</div>



			<div class="panel profilecss">
				<div class="row">
					<div class="col-md-3"><img src="../../image/cartridge/atari2600-cartridge.jpg" alt="atari2600-cartridge.jpg"
														height="200" width="200"></div>
					<div class="col-md-8"><strong>TITLE:</strong> Asteroids<br><br><strong>PRICE:</strong> 14.99<br><br><strong>SHIPPING:</strong> 2.99<br><br><strong>DESCRIPTION:</strong> asteroids for in greate condition wear have had it packaged for a long time!!</div>
						<div class="col-md-1"><i class="fa fa-trash fa-2x"></i><br>Delete<br><br><i class="fa fa-pencil fa-2x"></i><br>Edit</div>
				</div>
			</div>


			<div class="panel profilecss">
				<div class="row">
					<div class="col-md-3"><img src="../../image/cartridge/atari2600-cartridge.jpg" alt="atari2600-cartridge.jpg"
														height="200" width="200"></div>
					<div class="col-md-8"><strong>TITLE:</strong> Space invaders<br><br><strong>PRICE:</strong> 21.99<br><br><strong>SHIPPING:</strong> 4.99<br><br><strong>DESCRIPTION:</strong>
						You are a space ship who must destroy the invading enemy space ships</div>
					<div class="col-md-1"><i class="fa fa-trash fa-2x"></i><br>Delete<br><br><i class="fa fa-pencil fa-2x"></i><br>Edit</div>
				</div>
			</div>


			<div class="panel profilecss">
				<div class="row">
					<div class="col-md-3"><img src="../../image/cartridge/nintendo-64-cartridge.jpg" alt="nintendo-64-cartridge.jpg"
														height="200" width="200"></div>
					<div class="col-md-8"><strong>TITLE:</strong> Mario Kart 64<br><br><strong>PRICE:</strong> 39.99<br><br><strong>SHIPPING:</strong> 2.99<br><br><strong>DESCRIPTION:</strong>
						Kart racing game need I say more. It's in really good condition too!!</div>
					<div class="col-md-1"><i class="fa fa-trash fa-2x"></i><br>Delete<br><br><i class="fa fa-pencil fa-2x"></i><br>Edit</div>
				</div>
			</div>



			<div class="panel profilecss">
				<div class="row">
					<div class="col-md-3"><img src="../../image/cartridge/nes-cartridge.jpg" alt="nes-cartridge.jpg"
														height="200" width="200"></div>
					<div class="col-md-8"><strong>TITLE:</strong> Halo<br><br><strong>PRICE:</strong> 63.99<br><br><strong>SHIPPING:</strong> 2.99<br><br><strong>DESCRIPTION:</strong>
						Master Chief as he makes his way through 64 screens, divided into four zones</div>
					<div class="col-md-1"><i class="fa fa-trash fa-2x"></i><br>Delete<br><br><i class="fa fa-pencil fa-2x"></i><br>Edit</div>
				</div>
			</div>



			<div class="panel profilecss">
				<div class="row">
					<div class="col-md-3"><img src="../../image/cartridge/nes-cartridge.jpg" alt="nes-cartridge.jpg"
														height="200" width="200"></div>
					<div class="col-md-8"><strong>TITLE:</strong> Mario Brothers Kart<br><br><strong>PRICE:</strong> 19.95<br><br><strong>SHIPPING:</strong> 4.99<br><br><strong>DESCRIPTION:</strong>
						Original cartridge that came with the console, a fun game any</div>
					<div class="col-md-1"><i class="fa fa-trash fa-2x"></i><br>Delete<br><br><i class="fa fa-pencil fa-2x"></i><br>Edit</div>
				</div>
			</div>





			</div>
			</div>
		</div>
	</div>
	</div>
	<?php require_once("../php/partials/footer.php"); ?>
</body>
</html>

