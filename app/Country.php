<?php 
namespace App;
use praktika2Veb\classes\Models\Country as CountryObject;
use praktika2Veb\vendor\slim\slim\Slim\Route ;
use psr\container\src\ContainerInterface;
use db\DbQuery;
use \Psr\Http\Message\RequestInterface;
use \Psr\Http\Message\ResponseInterface;
//require_once "vendor/autoload.php";
//\Slim\Slim::registerAutoloader();
//$app = new \Slim\Slim();
//var_dump(app);

class Country extends Route { 
  public  $country;
   protected $container;
   
   public function __construct() {
    $this->country =$country;
}

   public  function getCountries(RequestInterface $request,ResponseInterface $response ){
       /*
       $api = $this->api;
       $sql = new DbQuery();
       $sql->select('country.*');
       $sql->from('country','country');
       $countries = Db::getInstance()->executeS($sql);
       return $api->response([
           'sucess'=>true,
           'countries'=>$countries
       ]);
       */
      $response->getBody()->write('Hi!');
      return $response;
   }
   public function getCountryByContinent($continentName){ 
    $api = $this->api;
    $country = new CountryObject((string) $continent);
    if(!Validate::isLoadedObject($continentName)){
        $api->response->setStatus(404);
        return $api->response([
            'success'=>false,
            'message'=>'Continent was not found'
           // 'success'=> true,
        ]);
    }
    return $api->response([
        'success' => true,
        'message'=>'Countries were found',
        'country'=>[
            'code'=>$country->code,
            'name'=>$country->name,
            'continent'=>$country->continent,
            'region'=>$country->region,
            'surfacearea'=>$country->surfacearea,
            'indepyear'=>$country->indepyear,
            'population'=>$country->population,
            'lifeexpectancy'=>$country->lifeexpectancy,
            'gnp'=>$country->gnp,
            'gnpold'=>$country->gnpold,
            'localname'=>$country->localname,
            'governmentform'=>$country->governmentform,
            'headofstate'=>$country->headofstate,
            'capital'=>$country->capital,
            'code2'=>$country->code2,
        ],
    ]);
   }
     //else{
        /*
        return $api->response([
            'success'=>true,
            'message'=>'',
           // 'success'=> true,
           $sql->select(`country.`continent`');
           $sql->from('country','country');
           $countries = Db::getInstance()->executeS($sql);
       
           return $api->response([
               'sucess'=>true,
               'countries'=>$countries
           ]);
          
          }
       
        ]);*/
  //  }


} 

?>