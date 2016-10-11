// main ng app file
var app = angular.module("kaiApp", ["ngRoute", "ngMessages"/*, "ngAnimate", "ngTouch"*/]);

app.run(['$rootScope', function($rootScope) {
	$rootScope.$on('$routeChangeSuccess', function (event, current/*, previous*/) {
		$rootScope.title = current.$$route.title || 'Kai Garrott, Developer';
	});
}]);