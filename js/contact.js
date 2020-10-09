angular.module("myapp", []).controller("MyController", function ($scope) {
        $scope.persons = {};
        $scope.persons.channels = [
            {value: "Tel", label: "Tel" },
            { value: "Email", label: "Email" }
        ];
        $scope.register = function () {
            $scope.firstNameInvalid = false;
            $scope.lastNameInvalid = false;
            $scope.numberInvalid = false;
            $scope.emailInvalid = false;
            $scope.researchInvalid = false;
            if(!$scope.registrationForm.firstName.$valid){
                $scope.firstNameInvalid = true;
            }
            if(!$scope.registrationForm.lastName.$valid){
                $scope.lastNameInvalid = true;
            }
            if(!$scope.registrationForm.number.$valid){
                $scope.numberInvalid = true;
            }
            if(!$scope.registrationForm.email.$valid){
                $scope.emailInvalid = true;
            }
            if(!$scope.registrationForm.research.$valid){
                $scope.researchInvalid = true;
            }
            if($scope.registrationForm.$valid){
                $scope.doShow = true;
            }
        }
        
});/*
app.config(function ($routeProvider) {
// configure the routes
$routeProvider
.when('/', {
// route for the home page
templateUrl: 'pages/appetizers.html',
controller: 'appetizersController'
})
.when('/about', {
// route for the about page
templateUrl: 'pages/about.html',
controller: 'aboutController'
})
.when('/contact', {
// route for the contact page
templateUrl: 'pages/contact.html',
controller: 'contactController'
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
app.controller('aboutController', function ($scope) {
$scope.message = 'Find out more about me.';
});
app.controller('contactController', function ($scope) {
$scope.message = 'Contact us!';
});
app.controller('notFoundController', function ($scope) {

$scope.message = 'There seems to be a problem finding the page you wanted';
//$scope.attemptedPath = $location.path();

});/*
var app = angular.module("myapp", ['ngRoute']);
app.convtroller("MyController", function ($scope) {
        $scope.persons = {};
        //$scope.persons.newsletterOptIn = false;
        $scope.persons.channels = [
            {value: "Tel", label: "Tel" },
            { value: "Email", label: "Email" }
        ];
        $scope.register = function () {
            $scope.firstNameInvalid = false;
            $scope.lastNameInvalid = false;
            $scope.numberInvalid = false;
            $scope.emailInvalid = false;
            $scope.researchInvalid = false;
            if(!$scope.registrationForm.firstName.$valid){
                $scope.firstNameInvalid = true;
            }
            if(!$scope.registrationForm.lastName.$valid){
                $scope.lastNameInvalid = true;
            }
            if(!$scope.registrationForm.number.$valid){
                $scope.numberInvalid = true;
            }
            if(!$scope.registrationForm.email.$valid){
                $scope.emailInvalid = true;
            }
            if(!$scope.registrationForm.research.$valid){
                $scope.researchInvalid = true;
            }
            if($scope.registrationForm.$valid){
                $scope.doShow = true;
            }
        }
        
});

app.config(function ($routeProvider) {
// configure the routes
$routeProvider
.when('/', {
// route for the home page
templateUrl: 'pages/appetizers.html',
controller: 'appetizersController'
})
.when('/about', {
// route for the about page
templateUrl: 'pages/about.html',
controller: 'aboutController'
})
.when('/contact', {
// route for the contact page
templateUrl: 'pages/contact.html',
controller: 'contactController'
})
.otherwise({
// when all else fails
templateUrl: 'pages/routeNotFound.html',
controller: 'notFoundController'
});
});


app.controller('appetizersController', function ($scope) {
$scope.message = 'Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!Welcome to my home page!';
});
app.controller('aboutController', function ($scope) {
$scope.message = 'Find out more about me.';
});
app.controller('contactController', function ($scope) {
$scope.message = 'Contact us!';
});
app.controller('notFoundController', function ($scope) {

$scope.message = 'There seems to be a problem finding the page you wanted';
//$scope.attemptedPath = $location.path();

});*/