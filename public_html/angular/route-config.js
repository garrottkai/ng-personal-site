// ng routing
app.config(function($routeProvider, $locationProvider) {
	$routeProvider

	// route for the home page
		.when('/', {
			controller  : 'homeController',
			templateUrl : 'angular/templates/home-template.php'
		})

		// route for the portfolio page
		.when('/portfolio', {
			controller  : 'portfolioController',
			templateUrl : 'angular/templates/portfolio-template.php'
		})

		// route for the about page
		.when('/about', {
			controller  : 'aboutController',
			templateUrl : 'angular/templates/about-template.php'
		})

		// route for the contact page
		.when('/contact', {
			controller  : 'contactController',
			templateUrl : 'angular/templates/contact-template.php'
		})

		// otherwise redirect to home
		.otherwise({
			redirectTo: '/'
		});

	//use the HTML5 History API

	$locationProvider.html5Mode(true);

});