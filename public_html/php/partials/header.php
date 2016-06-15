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
<header class="p-y-4">
<!------------------------------------------------------------------------------------------------->
	<div class="container">
		<div class="panel topbarcss">
			<div class="row">
				<div class="col-md-5"><a href="index.php">ROMuLess</a></div>




				<div class="col-md-5"><?php if (isset($_SESSION["sessionaccountid"])) {
						echo "Logout";
					} else {
						echo "Login";
					}
					?>
				</div>





				<div class="col-md-2" ng-controller="PaypalController">
					<?php if (isset($_SESSION["sessionaccountid"])) {
//						if is logged in
						echo "Logout";
//						if is logged in
					} else {
//						if is not logged in
						?>
						<a ng-click="loadPaypal();">Login&#160;&#160;&#160;<i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
					</li>


						<?php;
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







