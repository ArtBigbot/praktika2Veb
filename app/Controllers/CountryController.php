<?php 
namespace App\Controllers;
use \RedBeanPHP\R as R;
//use praktika2Veb\vendor\rb;

//require_once "vendor/autoload.php";
//\Slim\Slim::registerAutoloader();
//$app = new \Slim\Slim();
//var_dump(app);
require 'C:\xampp\htdocs\praktika2Veb\vendor\rb.php';
R::setup( 'mysql:host=localhost;dbname=praktika2ws','root', 'root' );
class CountryController  { 
  public  $country;
   protected $container;
   
  
   public  function getCountries( ){
     if(R::testConnection()){
        $countries = R::findAll( 'country' );
        echo '<pre>' ;print_r($countries);echo '</pre>';
     }else{
         exit('There is no connection to database');
     }
   }
   public function getCountryByContinent($continentName){ 
     /*  
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
    */
 if (R::testConnection()){
     $countries = R::findLike('country',array(
         'continent' => array($continentName)
        ));
        echo '<pre>' ;print_r($countries);echo '</pre>';
 }

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