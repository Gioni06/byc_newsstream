/* Copyright 2014 OYGO GmbH - Germany */
var a;

a = "hello";

console.log(a);

var app;

app = angular.module("Streetstyle", []);

app.controller("PostsCtrl", function($scope, $http) {
  return $http.get("dist/data.json").success(function(data, status, headers, config) {
    $scope.posts = data;
    window.MYSCOPE = data;
  }).error(function(data, status, headers, config) {});
});
