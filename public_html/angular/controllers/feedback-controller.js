app.controller("FeedbackController", ["$routeParams", "$scope", "FeedbackService", function($routeParams, $scope, FeedbackService) {

	$scope.newFeedback = {feedbackId: null, fetchByFeedbackSenderId: null, feedbackProductId: null, feedbackRecipientId: null, feedbackContent: "", feedbackRating: ""};
	$scope.alerts = [];

	/**
	 * create feedback and sends it to the feedback API
	 *
	 * @param feedback to send
	 * @param validated true if Angular validated the form, false if not
	 **/

	$scope.createFeedback = function(feedback, validated) {
		if(validated === true) {
			FeedbackService.create(feedback)
				.then(function(result) {
					if(result.data.status === 200) {
						$scope.alerts[0] = {type: "success", msg: result.data.message};
						$scope.newFeedback = {feedbackId: null, fetchByFeedbackSenderId: null, feedbackProductId: null, feedbackRecipientId: null, feedbackContent: "", feedbackRating: ""};
						$scope.addFeedbackForm.$setPristine();
						$scope.addFeedbackForm.$setUntouched();
					} else {
						$scope.alerts[0] = {type: "danger", msg: result.data.message};
					}
				});
		}
	};
}]);