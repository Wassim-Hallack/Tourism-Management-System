<?php

namespace App\Http\Controllers;

use App\Models\CarUser;
use App\Models\HotelUser;
use App\Models\PackageUser;
use App\Models\RestaurantUser;
use App\Models\Usermobile;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function hotel_reservations()
    {
        $user =  auth()->user()->id;
        $userdata = HotelUser::where('usermobile_id', $user)->get();
        foreach ($userdata as $u) {
            $u['name'] = $u->hotel->name;
            unset($u['hotel']);
        }


        return response()->json([
            'status' => 'success',
            'message' => 'hotel reservations',
            'data' => $userdata

        ], 200);
    }
    public function car_reservations()
    {
        $user =  auth()->user()->id;
        $userdata = CarUser::where('usermobile_id', $user)->get();
        foreach ($userdata as $u) {
            $u['name'] = $u->car->car_name;
            unset($u['car']);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'car reservations',
            'data' => $userdata

        ], 200);
    }
    public function restaurant_reservations()
    {
        $user =  auth()->user()->id;
        $userdata = RestaurantUser::where('usermobile_id', $user)->get();
        foreach ($userdata as $u) {
            $u['name'] = $u->restaurant->name;
            unset($u['restaurant']);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'restaurant reservations',
            'data' => $userdata

        ], 200);
    }
    public function package_reservations()
    {
        $user =  auth()->user()->id;
        $userdata = PackageUser::where('usermobile_id', $user)->get();
        // foreach ($userdata as $u) {
        //     // $u['name'] = $u->package->;
        //     unset($u['restaurant']);
        // }

        return response()->json([
            'status' => 'success',
            'message' => 'package reservations',
            'data' => $userdata

        ], 200);
    }
    public function airflight_reservations()
    {
        $array = [];
        $user =  auth()->user()->id;
        $userdata = Usermobile::find($user);
        foreach ($userdata->user_air as $air) {
            $array['price'] = $air->price;
            $array['id'] = $air->id;
            $array['arrival_datetime'] = $air->arrival_datetime;
            $array['departure_datetime'] = $air->departure_datetime;
        }

        return response()->json([
            'status' => 'success',
            'message' => 'airflight reservations',
            'data' => $array

        ], 200);
    }
}
