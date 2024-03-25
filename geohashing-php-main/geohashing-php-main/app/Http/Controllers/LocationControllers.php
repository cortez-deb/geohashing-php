<?php

namespace App\Http\Controllers;
use Geocoder\Query\GeocodeQuery;
use Geocoder\Provider\GoogleMaps\GoogleMaps;
use Sk\Geohash\Geohash;
use Illuminate\Http\Request;
use App\Models\locations; 
use Validator;

class LocationControllers  extends Controller
{
    public function getGeocode($geohash,$level){
        $g = new Geohash();
        $coordinates = $g->decode($geohash, $level);
        // $result = [
        //     'latitude'=>$coordinates['latitude'],
        //     'longitude'=>$coordinates['longitude']
        // ];
        return $coordinates;
    }

    public function getGeohash($lat, $long, $length){
        $geohash = new Geohash();
        $result = $geohash->encode($lat, $long, $length);
        return $result;
    }

    public function getHashs(){
        
        $_Location = locations::all();

        //retun the geoCodes not the hashes
        foreach($_Location as $key => $value){
            $_Location[$key]['geohash_3'] = $this->getGeocode($value['geohash_3'],3);
            $_Location[$key]['geohash_4'] = $this->getGeocode($value['geohash_4'],4);
            $_Location[$key]['geohash_5'] = $this->getGeocode($value['geohash_5'],5);
            $_Location[$key]['geohash_6'] = $this->getGeocode($value['geohash_6'],6);
            $_Location[$key]['geohash_7'] = $this->getGeocode($value['geohash_7'],7);
            $_Location[$key]['geohash_8'] = $this->getGeocode($value['geohash_8'],8);
            $_Location[$key]['geohash_9'] = $this->getGeocode($value['geohash_9'],9);
        } 
        $data = [
            'status'=>200,
            'location'=>$_Location
        ];
        return response()->json($data,200);
    }

    public function createHashs(Request $request){

        $validator = Validator::make($request->all(), [
            'org_id' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        if ($validator->fails()) {
            $data = [
                'status'=>400,
                'message'=>$validator->messages()
            ];
            return response()->json($data,400);
        }
        else{

            $_levle_1_hash = $this->getGeohash($request->latitude, $request->longitude, 1);
            $_levle_2_hash = $this->getGeohash($request->latitude, $request->longitude, 2);
            $_levle_3_hash = $this->getGeohash($request->latitude, $request->longitude, 3);
            $_levle_4_hash = $this->getGeohash($request->latitude, $request->longitude, 4);
            $_levle_5_hash = $this->getGeohash($request->latitude, $request->longitude, 5);
            $_levle_6_hash = $this->getGeohash($request->latitude, $request->longitude, 6);
            $_levle_7_hash = $this->getGeohash($request->latitude, $request->longitude, 7);
            $_levle_8_hash = $this->getGeohash($request->latitude, $request->longitude, 8);
            $_levle_9_hash = $this->getGeohash($request->latitude, $request->longitude, 9);


            $data = [
                'org_id'=>$request->org_id,
                'geohash_1'=>$_levle_1_hash,
                'geohash_2'=>$_levle_2_hash,
                'geohash_3'=>$_levle_3_hash,
                'geohash_4'=>$_levle_4_hash,
                'geohash_5'=>$_levle_5_hash,
                'geohash_6'=>$_levle_6_hash,
                'geohash_7'=>$_levle_7_hash,
                'geohash_8'=>$_levle_8_hash,
                'geohash_9'=>$_levle_9_hash,
            ];
            $location = new locations();
            $location->org_id = $data['org_id'];
            $location->geohash_3 = $data['geohash_3'];
            $location->geohash_4 = $data['geohash_4'];
            $location->geohash_5 = $data['geohash_5'];
            $location->geohash_6 = $data['geohash_6'];
            $location->geohash_7 = $data['geohash_7'];
            $location->geohash_8 = $data['geohash_8'];
            $location->geohash_9 = $data['geohash_9'];
            $location->save();
            $data = [
                'status'=>200,
                'message'=>'Data has been saved'
            ];
            return response()->json($data,200);
        }
      
    }

    public function deleteHashs(Request $request){
        $validator = Validator::make($request->all(), [
            'org_id' => 'required',
        ]);

        if ($validator->fails()) {
            $data = [
                'status'=>400,
                'message'=>$validator->messages()
            ];
            return response()->json($data,400);
        }
        else{
            $data = $request->all();
            $location = locations::where('org_id',$data['org_id'])->first();
            if($location){
                $location->delete();
                $data = [
                    'status'=>200,
                    'message'=>'Data has been deleted'
                ];
                return response()->json($data,200);
            }
            else{
                $data = [
                    'status'=>400,
                    'message'=>'Data not found'
                ];
                return response()->json($data,400);
            }
        }
    }

    

}
