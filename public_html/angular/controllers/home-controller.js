app.controller("HomeController", ["$location", "$scope", "ProductService", "Pusher", function($location, $scope, ProductService, Pusher) {
	// $scope.collapseAddForm = true;
	$scope.products = [];
	// $scope.newProduct = {productId: null, attribution: "", misquote: "", submitter: ""};
	$scope.alerts = [];

	/**
	 * creates a misquote and sends it to the misquote API
	 *
	 * @param misquote the misquote to send
	 * @param validated true if Angular validated the form, false if not
	 **/
	// $scope.createMisquote = function(misquote, validated) {
	// 	if(validated === true) {
	// 		MisquoteService.create(misquote)
	// 			.then(function(result) {
	// 				if(result.data.status === 200) {
	// 					$scope.alerts[0] = {type: "success", msg: result.data.message};
	// 					$scope.newMisquote = {misquoteId: null, attribution: "", misquote: "", submitter: ""};
	// 					$scope.addMisquoteForm.$setPristine();
	// 					$scope.addMisquoteForm.$setUntouched();
	// 				} else {
	// 					$scope.alerts[0] = {type: "danger", msg: result.data.message};
	// 				}
	// 			});
	// 	}
	// };

	/**
	 * fulfills the promise from retrieving the misquotes from misquote API
	 **/
	$scope.getProducts = function() {
		ProductService.all()
			.then(function(result) {
				if(result.status === 200) {
					$scope.products = result.data;
				} else {
					$scope.alerts[0] = {type: "danger", msg: result.message};
				}
			});
	};

	/**
	 * reroute the page to the specified misquote
	 *
	 * @param misquoteId id of the misquote to load
	 **/
	$scope.loadProduct = function(productId) {
		$location.path("product/" + productId);
	};

	// subscribe to the delete channel; this will delete from the misquotes array on demand
	// Pusher.subscribe("misquote", "delete", function(misquote) {
	// 	for(var i = 0; i < $scope.misquotes.length; i++) {
	// 		if($scope.misquotes[i].misquoteId === misquote.misquoteId) {
	// 			$scope.misquotes.splice(i, 1);
	// 			break;
	// 		}
	// 	}
	// });

	// subscribe to the new channel; this will add to the misquotes array on demand
	// Pusher.subscribe("misquote", "new", function(misquote) {
	// 	$scope.misquotes.push(misquote);
	// });

	// subscript to the update channel; this will update the misquotes array on demand
	// Pusher.subscribe("misquote", "update", function(misquote) {
	// 	for(var i = 0; i < $scope.misquotes.length; i++) {
	// 		if($scope.misquotes[i].misquoteId === misquote.misquoteId) {
	// 			$scope.misquotes[i] = misquote;
	// 			break;
	// 		}
	// 	}
	// });

	// when the window is closed/reloaded, gracefully close the channel
	$scope.$on("$destroy", function () {
		Pusher.unsubscribe("product");
	});

	// load the array on first view
	if($scope.products.length === 0) {
		$scope.products = $scope.getProducts();
	}
}]);