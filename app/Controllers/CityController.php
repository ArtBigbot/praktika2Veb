<?php 
namespace App\Controllers;
use praktika2Veb\app\Models\Model_City as CityObject;
use praktika2Veb\app\Models\Model_Country as CountryObject;
use \Psr\Http\Message\RequestInterface;
use \Psr\Http\Message\ResponseInterface;
use \RedBeanPHP\R as R;
R::setup( 'mysql:host=localhost;dbname=praktika2ws','root', 'root' );
class CityController  { 
    /*
    public $city;
    public function __construct($city){
        $this->city =$city;
    }
    */
        public function addCity($cityName, $countryCode,$district,$population){
            
        $city = R::dispense('city');

        $city->name = $cityName;
        $city->countrycode = $countryCode;
        $city->district = $district;
        $city->population =$population;

        R::store($city);

        }
        public function  updateCity($cityId, $cityName ,$countryCode, $district, $population){
            $city = R::load('city',$cityId);

            $city->name = $cityName;
            $city->countrycode = $countryCode;
            $city->district = $district;
            $city->population =$population;

            R::store($city);

        }

        public function deleteCity($cityId){
            if (R::testConnection()){// check connection to database
                
                if ( R::load('city', $cityId)){
                    $city = R::load('city', $cityId); // load bin (object city) 
              
                    if (R::trash($city) ){// check if method trash can delete bin(object city) normally
                        echo "City  was deleted succesfully";
                    } else  {
                        echo "Can not delete city";
                    }
                } else{
                    echo "Coud not find  city ";
                }
               
               
            } else {
                echo "There is no connection to database";
            }
           

        }
        public function getAllCitiesByCountry($country){
            if (R::testConnection()){
                $countries = R::findLike('city',array(
                    'continent' => array($continentName)
                   ));
                   echo '<pre>' ;print_r($countries);echo '</pre>';
            }
        }




}
?>