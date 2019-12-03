<?php
use DI\Container;
use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;
  use Slim\Factory\AppFactory;


  //require_once __DIR__ . '/../bootstrap/app.php';
  require __DIR__ . '/../vendor/autoload.php';
  require __DIR__ . '/../vendor/rb.php';
  R::setup('mysql:host=localhost;dbname=praktika2WS','root','');

  //require_once( realpath( dirname( __FILE__ ) ).'/vendor/autoload.php' );
  //$container = new Container();

  //AppFactory::setContainer($container); 

  $app = AppFactory::create(); 

 // $container = $app->getContainer();
/*
  $container->set('Country', function (ContainerInterface $c) {
      $view = $c->get('view'); // retrieve the 'view' from the container
      return new Country($view);

  });
*/



//require __DIR__ . '/../vendor/autoload.php';
/*
$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$config['db']['host']   = 'localhost';
$config['db']['user']   = 'root';
$config['db']['pass']   = '';
$config['db']['dbname'] = 'praktika2WS';

$config = ['settings' => [
    'addContentLengthHeader' => false,
  ]];
*/
/*
$app = AppFactory::create();
$app->addRoutingMiddleware();
//$app = new \Slim\App(['settings' => $config]);
//$container = $app->getContainer();
/*
$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    $pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'],
        $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};*/

//$errorMiddleware = $app->addErrorMiddleware(true, true, true);
/*
$app->get('/hi', function (Request $request, Response $response) {
    return $response -> write('Добро пожаловать на мою страницу');
    /*
    $mapper = new Country($this->db);
    $countries = $mapper->getCountries();

    $response->getBody()->write(var_export($tickets, true));
    return $response;
    
    
});
*/


// Define app routes

$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;  
});


//


//$app-> group('/api',function ()  {
   // $app->group('/v1',function() use ($api){
        //get methods
       // $app->get('/all','\CountryAPI\Country:getCountries');// get all countries
        $app->get('/countryById/{id}', function($request, $response, $args){
           // $api = $this->api;
          
           // $sql = new DbQuery();
           // $sql->select('country.*');
           /*
            $sql->from('country','country');
            $countries = Db::getInstance()->executeS($sql);
            return $api->response([
                'sucess'=>true,
                'countries'=>$countries
            ]);
            */
            $id =$args['id'];
            $country= R::load('country',$id);
            return $country;
        });

  
        $app->get('/world/country/continent/:name',\Country::class .':getCountryByContinent');// get continent by name
        $app->get('/world/country/{name}/city/all','\app\db\country:getAllCities');
        
    
        //post methods
        $app->post('/addCity/{name}','\praktika2web\classes\City:addCity');

        //put methods
        $app->patch('/cities/:cityId?','\praktika2web\classes\City:updateCity');

        //delete methods
        $app->delete('/cities/:cityId?','\praktika2web\classes\City:deleteCity');
    //})->add(new RouteMiddleware());
//})->add(new GroupMiddleware());

$app->run();

