app.controller("FeedbackViewController", ["$location", "$scope", "FeedbackService", function($location, $scope, FeedbackService) {
	// $scope.collapseAddForm = true;
	$scope.feedbacks = [];
	$scope.search = "";


	/**
	 * fulfills the promise from retrieving the misquotes from misquote API
	 **/
	$scope.getFeedbacks = function() {
		FeedbackService.fetchByPartyId("3")
			.then(function(result) {
				if(result.status === 200) {
					if(result.data !== undefined) {
						$scope.feedbacks = result.data.data;

					}  else {
						$scope.alerts[0] = {type: "danger", msg: result.data.feedback};
					}
				}});
	};

	// $scope.category = function(name) {
	// 	$scope.search = name;
	// };

	if($scope.feedbacks.length === 0) {
		$scope.feedbacks = $scope.getFeedbacks();
	}

}]);