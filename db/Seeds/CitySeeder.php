<?php


use Phinx\Seed\AbstractSeed;
use Illuminate\praktika2web\classes;

class CitySeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $json = File::get("data.json");
        $data = json_decode($json);
        $array1 = (array) $data;
        foreach ($array1['city'] as $obj) {
            DB::table('city')->insert(array(
                'id' => $obj->id,
                'name' => $obj->name,
                'countrycode' => $obj->countrycode,
                'district' => $obj->district,
                'population' => $obj->population
            ));
            foreach ($data['relatedcity'] as $obj) {
                DB::table('city_related')->insert(array(
                    'countrycode' => $obj->countrycode
                ));
            }
        }
    }
       
    
}


/*
{
        $json = File::get("data.json");
        $data = json_decode($json);
        $array1 = (array) $data;
        foreach ($array1['city'] as $obj) {
            DB::table('city')->insert(array(
                'id' => $obj->id,
                'name' => $obj->name,
                'countrycode' => $obj->countrycode,
                'district' => $obj->district,
                'population' => $obj->population
            ));
            foreach ($data['relatedcity'] as $obj) {
                DB::table('city_related')->insert(array(
                    'countrycode' => $obj->countrycode
                ));
            }
        }
    }
*/



/*
{
        $json = File::get("data.json");
        $data = json_decode($json);
        $array1 = $data->toArray();
        foreach ($array1['city'] as $obj) {
            DB::table('city')->insert(array(
                'id' => $obj->id,
                'name' => $obj->name,
                'countrycode' => $obj->countrycode,
                'district' => $obj->district,
                'population' => $obj->population
            ));
        }
    }
*/