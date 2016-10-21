// controller for Contact view
app.controller("contactController", ["$scope", "$http", function($scope, $http) {

	$scope.formData = {};
	$scope.sendMail = function() {
		$http({
			method: 'POST',
			url: 'php/mailer/mailer.php',
			data: $scope.formData,
			headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		})
			.success(
				function() {
					console.log("i think it worked")
				}
			)
			.error(
				function() {
					console.log("failure everywhere")
				}
			)
	};

}]);