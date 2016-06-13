app.constant("ACCOUNT_IMAGE_ENDPOINT", "php/apis/account-image/");
app.service("AccountImageService", function($http, ACCOUNT_IMAGE_ENDPOINT) {
	function getUrl() {
		return(ACCOUNT_IMAGE_ENDPOINT);
	}

	/**
	 * GETS products and images by account id
	 **/
	this.fetchByAccountId = function(accountId) {
		return($http.get(getUrl() + "?accountId=" + accountId));
	};
	//
	// this.all = function() {
	// 	return($http.get(getUrl()));
	// };

});