var cookmod = angular.module('myCookies', ['ngCookies']);

cookmod.controller('cookCtrl', function($scope, $cookies) {

	$scope.getCook = function() {
		$cookies.get($scope.Name)	;}

	$scope.setCook = function() {
		$cookies.get($scope.Name)	;}
	
});
