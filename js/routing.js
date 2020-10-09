var app = angular.module('app', ['ngRoute']);
app.config(function ($routeProvider) {
// configure the routes
$routeProvider
.when('/', {
// route for the home page
templateUrl: 'pages/appetizers.html',
controller: 'appetizersController'
})
.when('/main', {
// route for the about page
templateUrl: 'pages/main.html',
controller: 'mainController'
})
.when('/about', {
// route for the contact page
templateUrl: 'pages/about.html',
controller: 'aboutController'
})
.otherwise({
// when all else fails
templateUrl: 'pages/routeNotFound.html',
controller: 'notFoundController'
});

});



app.controller('appetizersController', function ($scope) {
$scope.message = 'Welcome to my home page!';
});
app.controller('mainController', function ($scope) {
$scope.message = 'Find out more about me.';
});
app.controller('aboutController', function ($scope) {
$scope.message = 'Main us!';
});
app.controller('notFoundController', function ($scope) {

$scope.message = 'There seems to be a problem finding the page you wanted';
//$scope.attemptedPath = $location.path();

});