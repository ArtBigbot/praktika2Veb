<?php
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
?>