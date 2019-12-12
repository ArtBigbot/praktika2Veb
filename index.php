<?php
require_once "vendor/autoload.php";
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
//kkk
//$app->get('/api/v1/world/country/all', function(){
    /*
    require_once('/db/dbconnect.php');
    $query = "select * from country";
    $result =$mysqli->query($query);
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    echo json_encode($data);
    */
    
    $api->get('/api/v1/world/country/all','\app\db\country:getCountries')->name('get_countries');// get all countries

    $api->get('/api/v1/world/country/continent/:name','\app\db\country:getContinent')->name('get_Continent');// get continent by name
    $api->get('/api/v1/world/country/:name/city/all','\app\db\country:getAllCities')->name('get_CountryCities');
    
//});
//$app->run();
/*
$app->get('/api/v1/world/country/continent/{name}(Europa)', function(){
    require_once('/db/dbconnect.php');
    $query = "select * from country";
    $result =$mysqli->query($query);
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    echo json_encode($data);
});*/
?>