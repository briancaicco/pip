// angular.module('wp', ['ngRoute'])
// .config(function($routeProvider, $locationProvider) {
//     $routeProvider
//     .when('/', {
//         templateUrl: localized.partials + 'dash-main.html',
//         controller: 'Main'
//     })
// })
// .controller('Main', function($scope, $http, $routeParams) {
//     $http.get('/piproomz-web/wp-json/wp/v2/posts/').success(function(res){
//         $scope.posts = res;
//     });
// });
angular.module('wp', ['ngRoute'])
.config(function($routeProvider, $locationProvider) {
 
    $routeProvider
    .when('/dashboard/', {
        templateUrl: localized.partials + 'dash-main.html',
        controller: 'Main'
    })
    .when('/:slug', {
        templateUrl: localized.partials + 'dash-content.html',
        controller: 'Content'
    })
    .otherwise({
        redirectTo: '/'
    });
})
.controller('Main', function($scope, $http, $routeParams) {
    $http.get('/piproomz-web/wp-json/wp/v2/posts/').success(function(res){
        $scope.posts = res;
    });
})
.controller('Content',
        ['$scope', '$http', '$routeParams', function($scope, $http, $routeParams) {
            $http.get('/piproomz-web/wp-json/wp/v2/posts/?filter[name]=' + $routeParams.slug).success(function(res){
                $scope.post = res[0];
            });
        }
    ]
);