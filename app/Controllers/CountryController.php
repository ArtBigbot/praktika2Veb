<?php
namespace App\Controllers;
class CountryController
{
    protected $container;

    function __construct($container)
    {
        $this->container = $container;
    }
    function __invoke($request, $response, $args)
    {
        $country = $this->container->get('contryModel');//create uor country from CountryFactory in DIC
        $args['countries'] = $country->getCountries();
       return $this->container->get('render')->render($response,'show.phtml',$args);
       
    }

}
?>