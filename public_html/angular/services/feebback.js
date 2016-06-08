/**
 * Defines a constant which holds the base url of the API
 */
app.constant("FEEDBACK_ENDPOINT", "api/feedback/");

/**
 * Initializes our feedback service
 *
 * Notice we inject the $http service, we use this to make REST calls
 * We also inject our endpoint so that it's usable inside the service
 */
app.service("FeedbackService", function($http, FEEDBACK_ENDPOINT) {

	/**
	 * Returns the tweet endpoint for use in other methods
	 */
	function getUrl() {
		return(FEEDBACK_ENDPOINT);
	}

	/**
	 * Builds a URL for getting a tweet by ID (example: "api/tweet/4")
	 */
	function getUrlForId(tweetId) {
		return(getUrl() + tweetId);
	}

	/**
	 * GETS all tweets
	 */
	this.all = function() {
		return($http.get(getUrl()));
	};

	/**
	 * GETS a tweet by ID
	 */
	this.fetch = function(tweetId) {
		return($http.get(getUrlForId(tweetId)));
	};
