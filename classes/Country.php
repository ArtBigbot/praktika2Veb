<?php 
use praktika2Veb\praktika2web\classes\country as CountryObject;
use praktika2Veb\vendor\slim\slim\Slim\Route ;
use psr\container\src\ContainerInterface;
//require_once "vendor/autoload.php";
//\Slim\Slim::registerAutoloader();
//$app = new \Slim\Slim();
//var_dump(app);
class country extends Route { 
   protected $container;
   public function __construct(ContainerInterface $container) {
    $this->container = $container;
}
   public function getCountries(){
       $api = $this->api;
       $sql = new DbQuery();
       $sql->select('country.*');
       $sql->from('country','country');
       $countries = Db::getInstance()->executeS($sql);
       return $api->response([
           'sucess'=>true,
           'countries'=>$countries
       ]);
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