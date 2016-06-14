app.controller("FeedbackController", ["$routeParams", "$scope", "FeedbackService", function($routeParams, $scope, FeedbackService) {

	$scope.newFeedback = {feedbackId: null, feedbackSenderId: "1", feedbackProductId: "10", feedbackRecipientId: "5", feedbackContent: "", feedbackRating: ""};
	$scope.alerts = [];

	/**
	 * create a feedback and sends to feedback api
	 *
	 * @param feedback to send
	 * @param validated true if Angular validated the form, false if now
	 **/

	$scope.createFeedback = function(feedback, validated) {
		if(validated === true) {
			FeedbackService.create(feedback)
				.then(function(result) {
					if(result.data.status === 200) {
						$scope.alerts[0] = {type: "success", msg: result.data.message};
						$scope.newFeedback = {feedbackId: null, feedbackSenderId: null, feedbackProductId: null, feedbackRecipientId: null, feedbackContent: "", feedbackSubject: ""};
						$scope.addFeedbackForm.$setPristine();
						$scope.addFeedbackForm.$setUntouched();
					} else {
						$scope.alerts[0] = {type: "danger", msg: result.data.message};
					}
				});
		}
	};
}]);