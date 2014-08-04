<?php

$app['router']->get('/', function() {
// Because 'Hello, World!' is too mainstream
return 'Are you looking for me ?';
});

$app['router']->get('/data', function() {
// Because 'Hello, World!' is too mainstream
    $basePath = str_finish(dirname(__FILE__), '/');
    $data = file_get_contents($basePath . 'data.json');
    return \Illuminate\Http\JsonResponse::create(json_decode($data),200,array('Type' => 'application/json'));
});

/*
 *
 * $datas = json_decode($this->dataJson);
        header('Content-Type: application/json');
        $obj = json_encode($datas[$index]);
 */

$app['router']->get('/app', function() {
    $basePath = str_finish(dirname(__FILE__), '/');
    $data = file_get_contents($basePath . 'app.php');
    return \Illuminate\Support\Facades\Response::make($data,200,array('Type' => 'text/html'));

});

$app['router']->get('/data/{id}', function($id) {
    $basePath = str_finish(dirname(__FILE__), '/');
    $data = file_get_contents($basePath . 'data.json');
    $datas = json_decode($data);
    header('Content-Type: application/json');
    $obj = json_encode($datas[$id]);
    return \Illuminate\Http\JsonResponse::create(json_decode($obj),200,array('Type' => 'application/json'));

});