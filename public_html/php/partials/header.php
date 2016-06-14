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
	<div class="container">

		<!-- brand and toggle  stuff-->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand" href="index.html">ROMuLess</a>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" size="55" class="form-control" placeholder="">
						</div>
						<button type="submit" class="btn btn-default">Search</button>
					</form>
<!--					other areas we can access-->
					<div class="collapse navbar-collapse" id="main-nav">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="createProduct">Create Product</a></li>
							<li><a href="sendMessage">Send Message</a></li>
							<li><a href="sendFeedback">Feedback</a></li>
							</ul>
					</div>
					<ul class="nav navbar-nav navbar-right" ng-controller="PaypalController">
						<li><a ng-click="loadPaypal();"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
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