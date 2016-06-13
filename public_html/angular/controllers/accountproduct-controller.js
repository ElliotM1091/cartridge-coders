app.controller("AccountProductController", ["$location", "$scope", "AccountImageService", function($location, $scope, AccountImageService) {

	$scope.products = [];
	$scope.alerts = [];

	/**
	 * fulfills the promise from retrieving the Products
	 **/
	$scope.getProductsAndImagesByAccountId = function() {
		AccountImageService.fetchByAccountId(accountId)
			.then(function(result) {
				if(result.data.status === 200) {
					$scope.products = result.data.data;
				} else {
					$scope.alerts[0] = {type: "danger", msg: result.data.message};
				}
			});
	};

	// load the array on first view
	if($scope.products.length === 0) {
		$scope.products = $scope.getProducts();
	}
}]);

