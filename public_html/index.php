<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "MY PAGE TITLE";
?>

<?php // inserting the head
require_once("php/partials/head-utils.php"); ?>

<!-- header now-->
<?php require_once("php/partials/header.php") ?>


<body class="sfooter" ng-controller="HomeController">
	<div class="sfooter">


		<div class="container">

			<!-- angular view directive -->
			<div ng-view></div>


		</div>


		<!-- footer -->
		<?php require_once("php/partials/footer.php") ?>
	</div>

</body>
</html>
