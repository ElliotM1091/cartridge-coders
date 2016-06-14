app.controller("ProductController", ["$routeParams", "$scope", "ProductService", function($routeParams, $scope, ProductService) {

	$scope.newProduct = {productId: null, productAccountId: "5", productImageId: "16", productAdminFee: "0", productDescription: "", productPrice: null, productShipping: null, productSold: "0", productTitle: ""};
	$scope.alerts = [];

	/**
	 * creates a product and sends it to the product API
	 *
	 * @param product the product to send
	 * @param validated true if Angular validated the form, false if not
	 **/

		$scope.createProduct = function(product, validated) {
			if(validated === true) {
				ProductService.create(product)
					.then(function(result) {
						if(result.data.status === 200) {
							$scope.alerts[0] = {type: "success", msg: result.data.message};
							$scope.newProduct = {productId: null, productAccountId: null, productImageId: null, productAdminFee: null, productDescription: "", productPrice: null, productShipping: null, productSold: null, productTitle: ""};
							$scope.addProductForm.$setPristine();
							$scope.addProductForm.$setUntouched();
						} else {
							$scope.alerts[0] = {type: "danger", msg: result.data.message};
						}
					});
			}
		};

}]);

