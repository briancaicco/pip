angular.module("wp",["ngRoute"]).config(function(o,t){o.when("/dashboard/",{templateUrl:localized.partials+"dash-main.html",controller:"Main"}).when("/:slug",{templateUrl:localized.partials+"dash-content.html",controller:"Content"}).otherwise({redirectTo:"/"})}).controller("Main",function(o,t,e){t.get("/piproomz-web/wp-json/wp/v2/posts/").success(function(t){o.posts=t})}).controller("Content",["$scope","$http","$routeParams",function(o,t,e){t.get("/piproomz-web/wp-json/wp/v2/posts/?filter[name]="+e.slug).success(function(t){o.post=t[0]})}]);