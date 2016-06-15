app.controller("MessageViewController", ["$location", "$scope", "MessageService", function($location, $scope, MessageService) {
	// $scope.collapseAddForm = true;
	$scope.messages = [];
	$scope.search = "";


	/**
	 * fulfills the promise from retrieving the misquotes from misquote API
	 **/
	$scope.getMessages = function() {
		MessageService.fetchByPartyId("1")
			.then(function(result) {
				if(result.status === 200) {
					if(result.data !== undefined) {
						$scope.messages = result.data.data;

					}  else {
						$scope.alerts[0] = {type: "danger", msg: result.data.message};
					}
				}});
	};

	// $scope.category = function(name) {
	// 	$scope.search = name;
	// };

	if($scope.messages.length === 0) {
		$scope.messages = $scope.getMessages();
	}

}]);