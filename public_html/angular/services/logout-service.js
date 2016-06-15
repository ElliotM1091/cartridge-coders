app.service("LogoutService", function($http) {
	this.LOGOUT_ENDPOINT = "php/apis/logout";

	this.logout = function() {
		console.log("TEST 2");
		return ($http.get(this.LOGOUT_ENDPOINT));
	}
});