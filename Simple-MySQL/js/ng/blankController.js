var app = angular.module('blankApp', ["ngRoute"]);
app.config(function ($routeProvider) {
    $routeProvider
            .when("/", {
                templateUrl: "dashboard"
            })
            .when('/:page', {// we can enable ngAnimate and implement the fix here, but it's a bit laggy
                templateUrl: function ($routeParams) {
                    return 'views/' + $routeParams.page + '.php';
                }
            })
            .when('/:page/:child*', {
                templateUrl: function ($routeParams) {
                    return 'views/' + $routeParams.page + '/' + $routeParams.child + '.php';
                }
            })
            .otherwise({
                redirectTo: '/dashboard'
            });
});
app.controller('GlobalController', function ($scope, $http, $window) {
    
});
app.controller('Sample', function ($scope, $http, $window) {
    $http.get("api/sampleAPI").success(function (data) {
        window.alert(JSON.stringify(data));
    });
});