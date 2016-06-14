app.controller("FeedbackController", ["$routeParams", "$scope", "FeedbackService", function($routeParams, $scope, FeedbackService) {

	$scope.newFeedback = {feedbackid: null, fetchByFeedbackSenderId: null, feedbackProductId: null, feedbackRecipientId: null, feedbackContent: "", feedbackRating: ""};
	$scope.alerts = [];
}])