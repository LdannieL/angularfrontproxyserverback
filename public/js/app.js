var valorApp = angular.module('valorApp', [
	'ngRoute',
	'valorControllers'
	], function($interpolateProvider) {
		$interpolateProvider.startSymbol('<%');
		$interpolateProvider.endSymbol('%>');
	});

valorApp.config(['$routeProvider',
	function($routeProvider) {
		$routeProvider
			.when('/', {
				templateUrl: 'partials/login.html',
				controller: 'LoginController'
			})
			 .when('/dashboard', {
			 	// templateUrl: 'partials/dashboard.blade.php',
			 	templateUrl: 'partials/dashboard.html',
			 	controller: 'DashboardController'
			 })
			.otherwise({
				redirectTo: '/'
			});
	}])