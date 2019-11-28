<?php 
namespace praktika2web\praktika2web\classes\country;
class Country extends ObjectModel{
    public  $code;
   public $name;
   public $continent;
   public $region;
   public $surfacearea;
   public $indepyear;
   public $population;
   public $lifeexpectancy;
   public $gnp;
   public $gnpold;
   public $localname;
   public $governmentform;
   public $headofstate;
   public $capital;
   public $code2;

   public static $defenition = array(

    'table'=>'country',
    'primary'=>'code',
    'fields'=> array(
        'name'=> array('type'=> self::TYPE_STRING,'required' => true,'validate' => 'isString'),
        'continent'=> array('type'=> self::TYPE_STRING,'required' => true,'validate' => 'isString'),
        'region'=> array('type'=> self::TYPE_STRING,'required' => true,'validate' => 'isString'),
        'surfacearea'=> array('type'=> self::TYPE_INT,'required' => true,'validate' => 'isInt'),
        'indepyear'=> array('type'=> self::TYPE_INT,'required' => false,'validate' => 'isInt'),
        'population'=> array('type'=> self::TYPE_INT,'required' => false,'validate' => 'isInt'),
        'lifeexpectancy'=> array('type'=> self::TYPE_DOUBLE,'required' => true,'validate' => 'isDouble'),
        'gnp'=> array('type'=> self::TYPE_INT,'required' => true,'validate' => 'isInt'),
        'gnpold'=> array('type'=> self::TYPE_INT,'required' => true,'validate' => 'isInt'),
        'localname'=> array('type'=> self::TYPE_STRING,'required' => true,'validate' => 'isString'),
        'governmentform'=> array('type'=> self::TYPE_STRING,'required' => true,'validate' => 'isString'),
        'headofstate'=> array('type'=> self::TYPE_STRING,'required' => true,'validate' => 'isString'),
        'capital'=> array('type'=> self::TYPE_INT,'required' => true,'validate' => 'isInt'),
        'capital'=> array('type'=> self::TYPE_STRING,'required' => true,'validate' => 'isString')
        )
    );
    public function __construct($code = null)
    {
        parent::__construct($code);
		}
}
?>