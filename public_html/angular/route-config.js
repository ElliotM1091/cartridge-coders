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
			templateUrl : 'angular/views/account-products.php'
		})

		// route for the sign in page
		.when('/signin', {
			controller  : 'signinController',
			templateUrl : 'angular/views/signin.php'
		})

		// route for the category page
		.when('/product', {
			controller  : 'productController',
			templateUrl : 'angular/views/product.php'
		})

		// route for the sign up page
		.when('/search-results', {
			controller  : 'searchResultsController',
			templateUrl : 'angular/views/search-results.php'
		})

		// otherwise redirect to home
		.otherwise({
			redirectTo: "/"
		});

	//use the HTML5 History API
	$locationProvider.html5Mode(true);
});