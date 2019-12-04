<?php
namespace  App\Factories;
class CountryFactory{
    function __invoke()
    {
        $country = new \App\Models\CountryModel();
        return new \praktika2Veb\app\Country($city);
    }
}

?>