app = angular.module "Streetstyle", []

app.controller "PostsCtrl", ($scope, $http) ->
  $http.get("dist/data.json").success((data, status, headers, config) ->
    $scope.posts = data
    window.MYSCOPE = data
    return
  ).error (data, status, headers, config) ->
    return




