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
	 * Builds a URL for getting a category  by ID
	 */
	function getUrlForId(categoryId) {
		return(getUrl() + categoryId);
	}

	/**
	 * GETS all category
	 */
	this.all = function() {
		return($http.get(getUrl()));
	};

	/**
	 * GETS a category by ID
	 */
	this.fetch = function(categoryId) {
		return($http.get(getUrlForId(categoryId)));
	};

	/**
	 * GETS category by category name
	 **/
	this.fetchByCategoryName = function(categoryName) {
		return($http.get(getUrl() + "?categoryName=" + categoryName));
	};

	/**
	 * POSTS category
	 */
	this.create = function(category) {
		return($http.post(getUrl(), category));
	};

	/**
	 * PUTS a category
	 */
	this.update = function(categoryId, category) {
		return($http.put(getUrlForId(categoryId), category));
	};

	/**
	 * DELETES a feedback
	 */
	this.destroy = function(categoryId) {
		return($http.delete(getUrlForId(categoryId)));
	};
});