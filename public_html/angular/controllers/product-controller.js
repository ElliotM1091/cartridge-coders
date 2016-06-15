app.controller("ProductController", ["$routeParams", "$scope", "ProductService", "ImageUploadService", function($routeParams, $scope, ProductService, ImageUploadService) {

	$scope.newProduct = {productId: null, productAccountId: "5", productImageId: null, productAdminFee: "0", productDescription: "", productPrice: null, productShipping: null, productSold: "0", productTitle: ""};
	$scope.alerts = [];
	$scope.imageUploadYN = 'false';
	
	$scope.uploadImage = function() {
		ImageUploadService.create()
			.then(function(result) {
				if(result.data.status === 200) {
					$scope.alerts[0] = {type: "success", msg: result.data.message};
					$scope.newProduct.productImageId = result.data.data;
				}
			})
	};

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

