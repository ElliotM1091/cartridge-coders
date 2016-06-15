<?php
///**
// * Get the relative path.
// * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/_header.php FarmToYou Header
// **/
//
//// include the appropriate number of dirname() functions
//// on line 9 to correctly resolve your directory's path
////require_once(dirname(dirname(__DIR__)) . "/root-path.php");
//$ROOT_PATH = __DIR__;
//$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
//$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
//$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
$PREFIX = str_repeat("../", 3);
?>
<!-- header -->
<header class="topbarcss">
<!------------------------------------------------------------------------------------------------->
	<div class="container" style="background-color: black">
		<div class="panel topbarcss" style="background-color: black">
			<div class="row topbarcss" align="left">
				<div class="col-md-5"><a href="index.php"><h1>ROMuLess</h1></a></div>
				<div class="col-md-6"><?php if (isset($_SESSION["sessionaccountid"])) {
						echo'
						<p><br><br><a href="createProduct">Create Product </a>|<a href="sendMessage"> Send Message </a>|<a href="sendFeedback"> Feedback</a></li>
						</p>';
					} else {
						echo "";
					}
					?>
				</div>
				<div class="col-md-1" ng-controller="PaypalController">
					<?php if (isset($_SESSION["sessionaccountid"])) {
//						if is logged in
						echo'
						<a ng-click="session_destroy();"><i class="fa fa-user fa-3x"></i><br>Log out</a>
						';
//						if is logged in
					} else {
//						if is not logged in
						echo'
						<a ng-click="loadPaypal();"><i class="fa fa-user fa-3x"></i><br>Login</a>
						';
//						if is not logged in
					}
					?>
				</div>
			</div>
		</div>
	</div>
<!--	---------------------------------------------------------------------------------------------->

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="btn-group btn-group-justified " role="group" aria-label="...">
					<div class="btn-group " role="group">
						<button type="button" class="btn categorybar" ng-click="categoryAll()">All</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar" ng-click="categoryAtari()">ATARI</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">NES</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">Super NES</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">N64</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">Sega</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">Gameboy</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">GBA</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">GBA DS</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">Other</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>







