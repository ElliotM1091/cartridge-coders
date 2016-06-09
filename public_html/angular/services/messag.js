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
	 * GETS all feedback
	 */
	this.all = function() {
		return($http.get(getUrl()));
	};

	/**
	 * GETS a Feedback by ID
	 */
	this.fetch = function(feedbackId) {
		return($http.get(getUrlForId(feedbackId)));
	};

	/**
	 * GETS feedback by feedback party id
	 **/
	this.fetchByPartyId = function(partyId) {
		return($http.get(getUrl() + "?partyId=" + partyId));
	};

	/**
	 * GET feedback by feedback Sender id
	 **/
	this.fetchByFeedbackSenderId = function(feedbackSenderId) {
		return($http.get(getUrl() + "?feedbackSenderId=" + feedbackSenderId));
	};

	/**
	 * GET feedback by feedback recipient id
	 **/
	this.fetchByFeedbackRecipientId = function(feedbackRecipientId) {
		returne($http.get(getUrl() + "?feedbackRecipientId=" + feedbackRecipientId));
	};
	/**
	 * POSTS feedback
	 */
	this.create = function(feedback) {
		return($http.post(getUrl(), feedback));
	};

	/**
	 * PUTS a tweet
	 */
	this.update = function(feedbackId, feedback) {
		return($http.put(getUrlForId(feedbackId), feedback));
	};

	/**
	 * DELETES a feedback
	 */
	this.destroy = function(feedbackId) {
		return($http.delete(getUrlForId(feedbackId)));
	};
});