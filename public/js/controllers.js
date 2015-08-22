'use strict';

var valorControllers = angular.module('valorControllers', ['valorServices']);

valorControllers.controller('LoginController', ['$scope', '$http', '$location', 'userData',
	function($scope, $http, $location, userData) {
		$scope.userCredentials = {};

		$scope.loginTry = function(userCredentials) {
				// $http.post('http://valor.rossilabs.net:10101/software-nation/admin/login', userCredentials)
			// $http.post('/localhost/valor/public/admin/login', userCredentials)
				$http.post('/valorapp2/public/index.php/admin/login', userCredentials)
			// $http.post('http://localhost/valorapp2/public/admin/login', userCredentials)
			// $http.post('http://localhost:8000/admin/login', userCredentials)
			.success(function(data, status, headers, config)
			{
					// setTimeout(alert(data),20000);
				// window.location.replace("dashboard");
				// $location.path = 'dashboard';
				// $scope.myHref = '/dashboard';
				// $scope.myHref = 'http://localhost:8000/dashboard';
				// $rootScope.myHref = 'http://localhost:8000/dashboard';
				

				// if (data !== 'invalid admin_id/pass combo') 
				if (data !== "INVALID_USER_OR_PASSWORD") 
				{
					// setTimeout(window.location.replace("#dashboard"),20000);
					// $location.path = '#dashboard';
						window.location.href = '#dashboard';
					// setTimeout(alert(data),20000);
					console.log(data);
					console.log('prosao if');
					userData.setUser(userCredentials);
					userData.setData(data);
				}
				else
					console.log('nije prosao if');
			})
			.error(function(data, status, headers, config)
			{
				console.log('error');
				console.log(data);
				console.log(status);
				console.log(headers);
				console.log(config);
			});
		};

		$scope.forgotPasswordAnimate = function() {
    		$(".login-form").animate({'top':'-26.04vw'},1000, function(){
    		$(".login-form-forg").animate({'left':'0'},1000);
    	});
		}
	}]);

valorControllers.controller('DashboardController', ['$scope', 'userData',
	function($scope, userData) {
		alert('usao u ovaj kontroler');
		$scope.user = {};
		$scope.user = userData.getUser();
		$scope.userData = userData.getData();
		console.log('dohvaceni podaci su');
		console.log($scope.user);
	}]);