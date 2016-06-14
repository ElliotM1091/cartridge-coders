/**
 * Defines a constant which holds the base url of the API
 */
app.constant("FEEDBACK_ENDPOINT", "php/api/feedback/");

/**
 * Initializes our feedback service
 *
 * Notice we inject the $http service, we use this to make REST calls
 * We also inject our endpoint so that it's usable inside the service
 */
app.service("FeedbackService", function($http, FEEDBACK_ENDPOINT) {

	/**
	 * Returns the feedback endpoint for use in other methods
	 */
	function getUrl() {
		return(FEEDBACK_ENDPOINT);
	}

	/**
	 * Builds a URL for getting a Feedback by ID
	 */
	function getUrlForId(feedbackId) {
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
	this.fetchByPartyId = function(partyId) {
		return($http.get(getUrl() + "?partyId=" + partyId));
	};

	/**
	 * POSTS feedback
	 */
	this.create = function(feedback) {
		return($http.post(getUrl(), feedback));
	};

	/**
	 * PUTS a feedback
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