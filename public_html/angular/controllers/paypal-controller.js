app.controller("PaypalController", ["$scope", "LogoutService", "$window", function($scope, LogoutService, $window) {
	$scope.loadPaypal = function() {
		$window.location.href = "paypal";
	}

	$scope.logOut = function() {
		console.log("TEST 1");
		LogoutService.logout();
		console.log("TEST 3");
		$window.location.assign("");
	}
}]);