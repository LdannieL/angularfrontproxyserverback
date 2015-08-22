'use strict'

var valorServices = angular.module('valorServices', []);

valorServices.service('userData', function() {
	var data = {};
	var user = {};

	var setData = function(newObj) {
		data = newObj;
	};

	var getData = function() {
		return data;
	}

	var resetData = function() {
		data = {};
	};

	var setUser = function(newUser) {
		user = newUser;
	};

	var resetUser = function() {
		user = {};
	}

	var getUser = function() {
		return user;
	}

	return {
		setData: setData,
		getData: getData,
		resetData: resetData,
		setUser: setUser,
		resetUser: resetUser,
		getUser:getUser
	};
});

// valorServices.factory('loginAuth', function() {
	
// })