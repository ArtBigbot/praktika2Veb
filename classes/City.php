<?php 
use praktika2Veb\classes\City as CityObject;
use praktika2Veb\classes\Country as CountryObject;
class City extends Route { 
    


        public function addCity(){
        $api = $this->api;
        $payload = $api->request()->post();
        $name = ArrayUtils::get($payload, 'name');
        $countryCode =ArrayUtils::get($payload, 'countryCode');
        $district = ArrayUtils::get($payload, 'district');

        $country = new CountryObject ((int) $countryId);




        $city = new CityObject();
        $city ->name = $name;
        $district ->district = $district;
        $population ->population=$population;

        $ok =$city->save();
        if(!$ok){
            return $api->response([
                'success'=>false,
                'message'=> 'Unable to add city'
            ]);
        }

        return $api->response([
            'success'=>true,
            'message'=> 'City was added',
            'city'=>[
                'id'=> $city->id,
                'name'=>$city->name,
                'district'=>$city->district,
                'population'=>$city->population
            ]
        ]);
        }
        public function  updateCity($cityId){
            $api = $this->api;
            $playload =$api->request()->post();

            $city = new CityObject ((int) $cityId);
            if(!Validate::isLoadedObject($city)){
                $api->response->setStatus(404);
                return $api->response([
                    'success'=>false,
                    'message'=>'City was not found'

                ]);

            }
            return $api->response([
                'success' => false,
                'message' => 'Unable to update city'

            ]);
            $ok =$city->update();

            if (!$ok) {
                return $api->response([
                    'success' => false,
                    'message' => 'Unable to update city'
                ]);
            }
            return  $api->response([
                'success' => true,
                'message' => 'City updeted  successfully'
            ]);


        }

        public function deleteCity($cityId){
            $api = $this->api;

            $city = new CityObject((int) $cityId);
            if(!Validate::isLoadedObject($city)){
                $api->response->setStatus(404);
                return $api->response([
                    'success'=>false,
                    'message'=>'City was not found'

                ]);

            }
            $ok = $city->delete();

            if (!$ok) {
                return $api->response([
                    'success' => false,
                    'message' => 'Unable to delete city'
                ]);

            }
            return  $api->response([
                'success' => true,
                'message' => 'City deleted  successfully'
            ]);

        }


}
?>