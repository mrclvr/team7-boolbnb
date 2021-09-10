<?php

namespace App\Http\Controllers\Api;

use App\House;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Builder;

class HouseController extends Controller
{    
    private function getCoordinates($address) {
        $addressQuery = urlencode($address);
        $addressQuery = $addressQuery . ".json";
        
        $coordinatesResponse = Http::get('https://api.tomtom.com/search/2/geocode/' . $addressQuery, [
            'key' => '9klnGNAqb9IZGTnJpPeD3XymW9LUsIDx'
        ]);
        
        $coordinatesResponse->json();        
        return $coordinatesResponse['results'][0]['position'];
    }

    private function getDistance ($lat1, $lon1, $lat2, $lon2) {
        $p = 0.017453292519943295;    // Math.PI / 180
        $a = 0.5 - cos(($lat2 - $lat1) * $p)/2 + 
                cos($lat1 * $p) * cos($lat2 * $p) * 
                (1 - cos(($lon2 - $lon1) * $p))/2;
      
        return 12742 * asin(sqrt($a)); // 2 * R; R = 6371 km
    }

    public function index() {

        $houses = House::all();

        return response()->json($houses);
    }

    public function show($id) {

        $house = House::findOrFail($id);

        return response()->json($house);
    }

    public function search(Request $request) {
        
        //get query parameters with defaults
        $address = $request->query('query', '');
        $km = $request->query('km', 20);
        $rooms = $request->query('rooms', '');
        $beds = $request->query('beds', '');
        $services = $request->query('services', '');

        $results = [];
        $filteredByServices = [];
        
        $coordinates = $this->getCoordinates($address);

        //filter by selected parameters
        $filteredByParameters = House::where([
                    ['rooms', '>=', $rooms],
                    ['beds', '>=', $beds],
                    ['visible', 1]
                ])->get();
        
        //filter by services
        if ($services) {
            foreach ($filteredByParameters as $house) {
                $valid = false;

                foreach ($services as $service_id) {
                    $valid = false;

                    foreach($house->services as $houseService) {

                        if ($service_id == $houseService->id) {
                            $valid = true;                            
                            // print_r($service_id);
                            // print_r('-');
                            // print_r($houseService->id);
                            // print_r(',');                            
                        }
                    }

                }
                if ($valid) {
                    $filteredByServices[] = $house;
                }
            }

        } else {
            $filteredByServices = $filteredByParameters;
        }

        //filter by distance
        foreach ($filteredByServices as $house) {
            $distance = $this->getDistance($house->latitude, $house->longitude, $coordinates['lat'], $coordinates['lon']);

            if ($distance <= $km) {
                $results[] = $house;
            }
        }

        return response()->json($results);
    }
}