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
* Returns the tweet endpoint for use in other methods
*/
function getUrl() {
return(FEEDBACK_ENDPOINT);
}
