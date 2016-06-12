


app.controller("AccountProductController", ["$location", "$scope", "ProductService", "Pusher", function($location, $scope, ProductService, Pusher) {
	$scope.collapseAddForm = true;
	$scope.products = [];
	$scope.newProduct = {productId: null, attribution: "", misquote: "", submitter: ""};
	$scope.alerts = [];

	/**
	 * fulfills the promise from retrieving the misquotes from misquote API
	 **/
	$scope.getMisquotes = function() {
		ProductService.fetchByProductAccountId(productAccountId)
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

