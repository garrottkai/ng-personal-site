// controller for header
app.controller("headerController", ["$scope", function($scope) {

	// collapse navbar on xs screen
	$scope.$watch("breakpoint", function() {
		$scope.navCollapsed = ($scope.breakpoint === "xs");
	});


	$scope.breakpoint = null;
	$scope.navCollapsed = null;

}]);