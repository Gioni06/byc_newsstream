<!doctype html>
<html class="no-js" ng-app="Streetstyle">
<head>
    <meta charset="utf-8">
    <meta property="og:title" content="Virgin Atlantic Advert 2010"/>
    <title>streetstyle</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

    <script src="bower_components/modernizr/modernizr.js"></script>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/angular/angular.min.js"></script>
    <script src="dist/app.min.js"></script>

</head>
<body ng-controller="PostsCtrl">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3" ng-repeat="post in posts">
                <h1>{{post.title}}</h1>
            </div>
        </div>
    </div>
</div>

</body>
</html>