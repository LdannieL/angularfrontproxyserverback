app.factory('login', ['$http', function($http)
{
	return $http.post('http://104.131.244.106/valorserver/admin/login', userCredentials)
				.success(function(data, status, headers, config)
				{
					console.log('not error');
					console.log(data);
					console.log(status);
					console.log(headers);
					console.log(config);
				})
				.error(function(data, status, headers, config)
				{
					console.log('error');
					console.log(data);
					console.log(status);
					console.log(headers);
					console.log(config);
				});
}])