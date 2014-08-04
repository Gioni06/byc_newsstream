<?php

require 'vendor/autoload.php';
require 'vendor/illuminate/support/Illuminate/Support/helpers.php';

$basePath = str_finish(dirname(__FILE__), '/');
$controllersDirectory = $basePath . 'Controllers';
$modelsDirectory = $basePath . 'Models';

Illuminate\Support\ClassLoader::register();
Illuminate\Support\ClassLoader::addDirectories(array($controllersDirectory, $modelsDirectory));

$app = new Illuminate\Container\Container;
Illuminate\Support\Facades\Facade::setFacadeApplication($app);

$app['app'] = $app;
$app['env'] = 'production';

with(new Illuminate\Events\EventServiceProvider($app))->register();
with(new Illuminate\Routing\RoutingServiceProvider($app))->register();

require $basePath . 'routes.php';

$request = Illuminate\Http\Request::createFromGlobals();
$response = $app['router']->dispatch($request);

$response->send();