app.controller("HomeController", ["$location", "$scope", "ProductImageService", function($location, $scope, ProductImageService) {
	// $scope.collapseAddForm = true;
	$scope.products = [];
	$scope.search = "";


	/**
	 * fulfills the promise from retrieving the misquotes from misquote API
	 **/
	$scope.getProducts = function() {
		ProductImageService.all()
			.then(function(result) {
				if(result.status === 200) {
					if(result.data !== undefined) {
						$scope.products = result.data.data;

					}  else {
						$scope.alerts[0] = {type: "danger", msg: result.data.message};
					}
				}});
	};
	
	$scope.category = function(name) {
		$scope.search = name;
	};
	
	if($scope.products.length === 0) {
		$scope.products = $scope.getProducts();
	}

}]);