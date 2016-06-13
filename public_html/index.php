<?php
// inserting the head
require_once("php/partials/head-utils.php");?>

<body class="sfooter" ng-controller="HomeController">
	<div class="sfooter">
		
		<!-- header now-->
		<?php require_once("php/partials/header.php") ?>

		

		<div class="container">

			<!-- angular view directive -->
			<div ng-view></div>


		</div>

		<!-- footer -->
		<?php require_once("php/partials/footer.php") ?>

</body>
</html>

