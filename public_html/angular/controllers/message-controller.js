app.controller("MessageController", ["$routeParams", "$scope", "MessageService", function($routeParams, $scope, MessageService) {

	$scope.newMessage = {messageId: null, messageSenderId: "1", messageProductId: "10", messageRecipientId: "5", messageContent: "", messageSubject: ""};
	$scope.alerts = [];

	/**
	 * create a message and sends to message api
	 *
	 * @param message to send
	 * @param validated true if Angular validated the form, false if now
	 **/

	$scope.createMessage = function(message, validated) {
		if(validated === true) {
			MessageService.create(message)
				.then(function(result) {
					if(result.data.status === 200) {
						$scope.alerts[0] = {type: "success", msg: result.data.message};
						$scope.newMessage = {messageId: null, messageSenderId: null, messageProductId: null, messageRecipientId: null, messageContent: "", messageSubject: ""};
						$scope.addMessageForm.$setPristine();
						$scope.addMessageForm.$setUntouched();
					} else {
						$scope.alerts[0] = {type: "danger", msg: result.data.message};
					}
				});
		}
	};
}]);