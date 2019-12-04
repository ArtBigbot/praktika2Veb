<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

$container['cityModel'] = new \App\Factories\CityModel();
$container['contryModel'] = new \App\Factories\CountryModel();

?>