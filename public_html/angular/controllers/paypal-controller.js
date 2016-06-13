app.controller("PaypalController", ["$scope", "$window", function($scope, $window) {
	$scope.loadPaypal = function() {
		$window.location.href = "paypal";
	}
}]);