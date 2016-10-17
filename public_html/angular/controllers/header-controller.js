// controller for header
app.controller("headerController", ["$scope", "$location", function($scope, $location) {

	// collapse navbar on xs screen
	$scope.$watch("breakpoint", function() {
		$scope.navCollapsed = ($scope.breakpoint === "xs");
	});

	$scope.where = function($location) {
		$scope.loc = $location.url();
		console.log($scope.loc)
	};
	$scope.where($location);


	$scope.breakpoint = null;
	$scope.navCollapsed = null;

}]);