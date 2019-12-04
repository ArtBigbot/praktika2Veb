<?php 
namespace App\Models;
class CityModel extends ObjectModel{
    public $id;
    public $name;
    public $countryCode;
    public $district;
   
    public $population;

    public static $definition = array(
        'table'=>'city',
        'primary'=>'id',
        'fields'=>array(
            'name'=> array('type'=> self::TYPE_STRING,'required' => true,'validate' => 'isString'),
            'countryCode'=> array('type'=> self::TYPE_INT,'required' => true,'validate' => 'isInt'),
            'district'=> array('type'=> self::TYPE_STRING,'required' => true,'validate' => 'isString'),
            'population'=> array('type'=> self::TYPE_INT,'required' => true,'validate' => 'isInt'),
            )
        );

        public function __construct($id = null){
            parent::__construct($id);
        
        }
}
?>