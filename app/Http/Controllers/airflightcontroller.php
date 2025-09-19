<?php

namespace App\Http\Controllers;

use App\Models\Airflight;
use App\Models\AirflightClass;
use App\Models\Car;
use App\Models\CarUser;
use App\Models\Flightclass;
use Carbon\Carbon;
use Nnjeim\World\Models\Country;
use Illuminate\Http\Request;

class airflightcontroller extends Controller
{
    public function get_state()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'countries',
            'data' => Country::get(),
        ]);
    }
    public function get_airflights(Request $request)
    {
        $statetake = $request->query('statetake');
        $stateland = $request->query('stateland');
        $dated = $request->query('dated');
        $datel = $request->query('datel');
        $flight_class = $request->query('flight_class');
        $passenger = $request->query('passengers');

        $state_take = Country::where('name', $statetake)->first();
        $state_land = Country::where('name', $stateland)->first();


        $air = AirflightClass::find($flight_class);
        if ($datel == 0) {
            if ($air->exists()) {
                $air->passengers_num += $passenger;
                if ($air->passengers_num > 50) {
                    return response()->json([
                        'status' => 'fail',
                        'message' => 'the flight class you choose is full',
                    ], 400);
                } else {
                    $Air = Airflight::where('id', $air->airflight_id)
                        ->where('statet_id', $state_take->id)
                        ->where('statel_id', $state_land->id)
                        ->where('active', 1)
                        ->where('departure_datetime', $dated)
                        ->get();
                    // dd();
                }
            } else {

                return response()->json([
                    'status' => 'fail',
                    'message' => 'there is no flights with the class you chose',
                ], 400);
            }
        } else {
            if ($air->exists()) {
                if (!$air->passengers_num <= 50) {
                    return response()->json([
                        'status' => 'fail',
                        'message' => 'the flight class you choose is full',
                    ], 400);
                } else {
                    $Air = Airflight::where('id', $air->airflight_id)
                        ->where('statet_id', $state_take->id)
                        ->where('statel_id', $state_land->id)
                        ->where('active', 1)
                        ->whereIn('departure_datetime', [$dated, $datel])
                        ->get();
                }
            } else {

                return response()->json([
                    'status' => 'fail',
                    'message' => 'there is no flights with the class you chose',
                ], 400);
            }
        }
        foreach ($Air as $a) {
            $a['airline_name'] = $a->airline->name;
            $a['IATA'] = $a->airflight_airport->first()->airport->IATA_code;
            unset($a['airflight_airport']);
            unset($a['airline']);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'all flight data',
            'data' => $Air,
        ], 200);
    }

    public function get_car_bill(Request $request)
    {
        $datep = $request->query('date_pick');
        $dater = $request->query('date_return');
        $id = $request->query('id');
        $hotel = Car::where('id', $id)->get();
        $bill = 0;

        $datep = Carbon::createFromFormat('Y-m-d', $datep);
        $dater = Carbon::createFromFormat('Y-m-d', $dater);

        $duration = $dater->diffInDays($datep);

        if ($duration % 2 != 0) {
            $bill = ((int)($duration / 2) * $hotel[0]['room_price']) + $hotel[0]['room_price'];
        } else {
            $bill = (($duration / 2) * $hotel[0]['room_price']);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'changed bill ',
            'bill' => $bill
        ], 200);
    }
    public function reserve_airflight(Request $request)
    {

        $user_data = auth()->user()->id;

        $request->validate([
            'airflight_id' => 'required|numeric',

        ]);
        $air = Airflight::find($request->airflight_Id);
        if ($air->airflight_flightclass()->where('airflight_id', $request->airflight_id)->exists()) {
            if ($air->airflight_flightclass()->passengers_num <= 50) {
                $air->airflight_flightclass()->passengers_num++;
                $user_data->user_air()->attach($request->airflight_id);
                return response()->json([
                    'statue' => 'success',
                    'message' => 'reservation done successfuly',
                ], 200);
            } else {
                return response()->json([
                    'statue' => 'fail',
                    'message' => 'the flight class you choose is full',
                ], 400);
            }
        } else {
            $air->airflight_flightclass()->attach($request->airflight_Id);
            $air->airflight_flightclass()->passengers_num++;
            $user_data->user_air()->attach($request->airflight_id);
            return response()->json([
                'statue' => 'success',
                'message' => 'reservation done successfuly',
            ], 200);
        }
    }
    public function delete_airflight_reservation(Request $request)
    {
        $user_data = auth()->user()->id;
        $request->validate([
            'airflight_id' => 'required|numeric',
            'flight_class' => 'required|numeric',

        ]);
        // $air = Airflight::where()
    }
}
