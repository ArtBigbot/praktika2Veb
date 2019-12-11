<?php 
namespace App\Models;
define( 'REDBEAN_MODEL_PREFIX', '\\Model\\' );
class Model_Country extends RedBean_SimpleModel{
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

}

?>