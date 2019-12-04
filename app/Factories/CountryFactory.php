<?php
namespace  App\Factories;
class CountryFactory{
    function __invoke()
    {
        $country = new praktika2Veb\app\Models\CountryModel();
        return new \praktika2Veb\app\Contry($city);
    }
}

?>