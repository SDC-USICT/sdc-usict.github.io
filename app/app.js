angular.module('sdc', ['ngRoute'])
.config(['$routeProvider', '$locationProvider',
	function ($routeProvider, $locationProvider) {
	$routeProvider.
   when('/', {
    templateUrl: 'app/views/main.html',
    controller: 'MainCtrl',
    controllerAs: 'main'
   }).
   otherwise({
    redirectTo: '/'
   });
   $locationProvider.html5Mode(false).hashPrefix('');

}])
