/**
 * Defines a constant which holds the base url of the API
 */
app.constant("CATEGORY_ENDPOINT", "php/api/category/");

/**
 * Initializes our category service
 *
 * Notice we inject the $http service, we use this to make REST calls
 * We also inject our endpoint so that it's usable inside the service
 */
app.service("FeedbackService", function($http, FEEDBACK_ENDPOINT) {

	/**
	 * Returns the tweet endpoint for use in other methods
	 */
	function getUrl() {
		return(CATEGORY_ENDPOINT);
	}

	/**
	 * Builds a URL for getting a Feedback by ID
	 */
	function getUrlForId(categoryId) {
		return(getUrl() + feedbackId);
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
	this.fetchByPartyId = function(PartyId) {
		return($http.get(getUrl() + "?partyId=" + PartyId));
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