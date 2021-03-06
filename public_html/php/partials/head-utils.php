<?php
require_once dirname(__DIR__) . "/lib/xsrf.php";
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
setXsrfCookie();

/**
 * Get the relative path.
 * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/_header.php FarmToYou Header
 **/

// include the appropriate number of dirname() functions
// on line 8 to correctly resolve your directory's path
require_once(dirname(dirname(__DIR__)) . "/root-path.php");
$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
$PREFIX = str_repeat("../", $DEPTH_DIFFERENCE);
?>
<!DOCTYPE html> <!--this is the doctype declaration-->
<html lang="en" ng-app="RomULess">
	<head><!--this is the head tag to start the doc out-->

		<!--this is the 8 bit setting used universally. this is a self closing tag-->
		<meta charset="utf-8">

		<!--this helps out IE-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

		<!--going to be used for view port -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- set base for relative links - to enable pretty URLs -->
		<base href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/"; ?>">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
				integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>


		<!--custom CSS-->
<!--		<link rel="stylesheet" href="--><?php //echo $PREFIX; ?><!--css/style.css" type="text/css">-->
		<link rel="stylesheet" href="<?php echo $PREFIX; ?>css/style2.css" type="text/css">

		<!-- jQuery (needed for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

		<!--		Angular JS Libraries-->
		<?php $ANGULAR_VERSION = "1.5.6"; ?>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/
		<?php echo $ANGULAR_VERSION; ?>/angular.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/
		<?php echo $ANGULAR_VERSION; ?>/angular-messages.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/
		<?php echo $ANGULAR_VERSION; ?>/angular-route.js"></script>
		<!--				<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/-->
		<!--		--><?php //echo $ANGULAR_VERSION;?><!--/angular-animate.js"></script>-->
		<script type="text/javascript"
				  src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.3.3/ui-bootstrap-tpls.min.js"></script>


		<!--Angular app files (order: app, services, directives, controllers)-->
		<script type="text/javascript" src="angular/romuless.js"></script>
		<script type="text/javascript" src="angular/route-config.js"></script>
		<script type="text/javascript" src="angular/services/product-service.js"></script>
		<script type="text/javascript" src="angular/services/image-service.js"></script>
		<script type="text/javascript" src="angular/services/product-image-service.js"></script>
		<script type="text/javascript" src="angular/services/message-service.js"></script>
		<script type="text/javascript" src="angular/services/image-upload-service.js"></script>
		<script type="text/javascript" src="angular/services/logout-service.js"></script>
		<script type="text/javascript" src="angular/services/feedback-service.js"></script>
		<script type="text/javascript" src="angular/controllers/home-controller.js"></script>
		<script type="text/javascript" src="angular/controllers/account-product-controller.js"></script>
		<script type="text/javascript" src="angular/controllers/paypal-controller.js"></script>
		<script type="text/javascript" src="angular/controllers/product-controller.js"></script>
		<script type="text/javascript" src="angular/controllers/message-controller.js"></script>
		<script type="text/javascript" src="angular/controllers/feedback-controller.js"></script>
		<script type="text/javascript" src="angular/controllers/message-view-controller.js"></script>
		<script type="text/javascript" src="angular/controllers/feedback-view-controller.js"></script>

		<title>ROMuLess</title>
	</head>