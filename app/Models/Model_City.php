<?php 
namespace App\Models;
define( 'REDBEAN_MODEL_PREFIX', '\\Model\\' );
class Model_City extends RedBean_SimpleModel{
    public $id;
    public $name;
    public $countryCode;
    public $district;
    public $population;  

}
?>