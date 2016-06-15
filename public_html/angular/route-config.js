// configure our routes
app.config(function($routeProvider, $locationProvider) {
	$routeProvider

	// route for the home page
		.when('/', {
			controller  : 'HomeController',
			templateUrl : 'angular/views/home.php'
		})

		// route for the account page
		.when('/profile', {
			controller  : 'AccountProductController',
			templateUrl : 'angular/views/profile.php'
		})

		// route for sending message
		.when('/sendMessage', {
			controller  : 'MessageController',
			templateUrl : 'angular/views/message-form.php'
		})

		// route for creating a product
		.when('/createProduct', {
			controller  : 'ProductController',
			templateUrl : 'angular/views/product-form.php'
		})

		// route for sending feedback
		.when('/sendFeedback', {
			controller  : 'FeedbackController',
			templateUrl : 'angular/views/feedback-form.php'
		})

		// route for uploading image
		.when('/uploadImage', {
			controller  : 'ProductController',
			templateUrl : 'angular/views/upload-image.php'
		})

		// otherwise redirect to home
		.otherwise({
			redirectTo: "/"
		});

	//use the HTML5 History API
	$locationProvider.html5Mode(true);
});