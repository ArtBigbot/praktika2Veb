<?php
use App\Controllers\CountryController;
use App\Controllers\CityController;
use DI\Container;
use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;
  use Slim\Factory\AppFactory;
  use Phinx\Migration\AbstractMigration;
  //use praktika2Veb\app\Country;
  


  //require_once __DIR__ . '/../bootstrap/app.php';
  require __DIR__ . '/../vendor/autoload.php';
  

 
  $app = AppFactory::create(); 
 



//$app-> group('/api',function ()  {
   // $app->group('/v1',function() use ($api){
        //get methods
        //$app = new \DI\Bridge\Slim\App;
       // $isXHR = $app->request->isAjax();
        $app->get('/api/v1/world/country/all',CountryController::class. ':getCountries');// get all countries
        $app->get('/world/country/continent/{name}',function (Request  $request , Response $response, $args){
          $continentName = $args['name'];
          $countries = CountryController::getCountryByContinent($continentName);
          return $response;
        });// get continent by name
        $app->get('/world/country/{name}/city/all',function (Request  $request , Response $response, $args){
          $country = $args['name'];
          $cities =  CityController::getAllCitiesByCountry($country);
          return $response;
        });
        
    
        //post methods
        $app->post('/addNewCity/{cityName}/{countryCode}/{district}/{population}',function ( $request ,  $response, $args ){
          
         $cityName=$args['cityName'];
          $countryCode=$args['countryCode'];
          $district=$args['district'];
          $population=$args['population'];
          $city =  CityController::addCity($cityName, $countryCode,$district,$population);
          return $response;
        });

        //put methods
        $app->patch('/updateCity[/{id}/{cityName}/{countryCode}/{district}[/{population}]]',function (Request  $request , Response $response, $args){
          $cityId = $args['id'];
          $cityName = $args['cityName'];
          $countryCode = $args['countryCode'];
          $district = $args['district'];
          $city = $args['population'];

          $city =  CityController:: updateCity($cityId, $cityName ,$countryCode, $district, $population);
          return $response;
        });

        //delete methods
        
        
        $app->delete('/delete/city/{id}',function (  $request ,  $response, $args){
          $cityId = $args['id'];
          $city = CityController::deleteCity($cityId);
          return $response;
        });
        
       
    //})->add(new RouteMiddleware());
//})->add(new GroupMiddleware());

$app->run();

