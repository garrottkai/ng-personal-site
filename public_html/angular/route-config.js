// ng routing
app.config(function($routeProvider, $locationProvider) {
	$routeProvider

	// route for the home page
		.when('/', {
			controller  : 'homeController',
			templateUrl : 'angular/templates/home-template.php',
			title : 'Kai Garrott | Developer'
		})

		// route for the portfolio page
		.when('/portfolio', {
			controller  : 'portfolioController',
			templateUrl : 'angular/templates/portfolio-template.php',
			title : 'Portfolio'
		})

		// route for the about page
		.when('/about', {
			controller  : 'aboutController',
			templateUrl : 'angular/templates/about-template.php',
			title : 'About Kai'
		})
/*
		// route for the contact page
		.when('/contact', {
			controller  : 'contactController',
			templateUrl : 'angular/templates/contact-template.php',
			title : 'Contact'
		})
*/
		// otherwise redirect to home
		.otherwise({
			redirectTo: '/'
		});

	//use the HTML5 History API

	$locationProvider.html5Mode(true);

});