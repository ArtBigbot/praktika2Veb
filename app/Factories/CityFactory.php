<?php
namespace App\Factories;
class CityFactory
{
    function __invoke()
    {
        $city = new praktika2Veb\app\Models\CityModel();
        return new \praktika2Veb\app\City($city);
    }
}
?>