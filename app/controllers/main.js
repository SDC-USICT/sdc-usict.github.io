angular.module('sdc')
	.controller('MainCtrl', ["$scope", "$http" , "$rootScope",
		function ($scope, $http, $rootScope) {
				$http.get('/app/data/projects.md')
     .then(function (res) {
         $scope.projects = jsyaml.load(res.data)
     })

     	$http.get('/app/data/meetup.md')
     .then(function (res) {
         $scope.meetup = jsyaml.load(res.data)
     })
		}]);
