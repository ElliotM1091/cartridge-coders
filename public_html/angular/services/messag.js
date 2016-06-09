/**
 * Defines a constant which holds the base url of the API
 */
app.constant("MESSAGE_ENDPOINT", "php/api/message/");

/**
 * Initializes our message service
 *
 * Notice we inject the $http service, we use this to make REST calls
 * We also inject our endpoint so that it's usable inside the service
 */
app.service("MessageService", function($http, MESSAGE_ENDPOINT) {

	/**
	 * Returns the message endpoint for use in other methods
	 */
	function getUrl() {
		return(MESSAGE_ENDPOINT);
	}

	/**
	 * Builds a URL for getting a message by ID
	 */
	function getUrlForId(messageId) {
		return(getUrl() + messageId);
	}

	/**
	 * GETS a message by ID
	 */
	this.fetch = function(messageId) {
		return($http.get(getUrlForId(messageId)));
	};

	/**
	 * GETS feedback by message party id
	 **/
	this.fetchByPartyId = function(partyId) {
		return($http.get(getUrl() + "?partyId=" + partyId));
	};

	/**
	 * POSTS message
	 */
	this.create = function(message) {
		return($http.post(getUrl(), message));
	};

	/**
	 * PUTS a tweet
	 */
	this.update = function(messageId, message) {
		return($http.put(getUrlForId(messgaeId), message));
	};

	/**
	 * DELETES a feedback
	 */
	this.destroy = function(feedbackId) {
		return($http.delete(getUrlForId(feedbackId)));
	};
});