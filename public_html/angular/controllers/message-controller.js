app.controller("MessageController", ["$routeParams", "$scope", "MessageService", function($routeParams, $scope, MessageService) {

	$scope.newMessage = {messageId: null, messageSenderId: null, messageProductId: null, messageRecipientId: null, messageContent: "", messageMailGunId: null, messageSubject: ""};
	$scope.alerts = [];

	/**
	 * create a message and sends to message api
	 *
	 * 
	 **/
}]);