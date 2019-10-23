<?php
<<<<<<< HEAD
require_once "vendor/autoload.php";
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

$app->get('/api/v1/world/country/all', function(){
    require_once('/db/dbconnect.php');
    $query = "select * from country";
    $result =$mysqli->query($query);
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    echo json_encode($data);
});
$app->run();

$app->get('/api/v1/world/country/continent/{name}(Europa)', function(){
    require_once('/db/dbconnect.php');
    $query = "select * from country";
    $result =$mysqli->query($query);
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    echo json_encode($data);
});
=======
require '../vendor/autoload.php'
$app = new \Slim\App();

//example

$app->get('/', function($request, $response, $args){
    $response->write('Welcome to Slim')
})
""
$app->get('/countries', function($request, $response, $args) use ($countries){
    return $response->withJson($countries)
})

//example
>>>>>>> c56cb043123e99e375966d6b6430f11dfb3811f3
?>