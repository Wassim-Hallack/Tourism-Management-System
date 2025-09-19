<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\RestaurantUser;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    public function get_restaurants()
    {
        //query http
        $Res = Restaurant::all()->reject(function ($r) {
            return $r->active == 0;
        });

        return response()->json([
            'status' => 'success',
            'message' => 'restaurant data',
            'data' => $Res,
        ], 200);
    }
    public function get_restaurant_by_index(Request $request)
    {
        $i = 0;
        $id = $request->query('id');
        $Res = Restaurant::with('photos')->where('id', $id)->where('active', 1)->get();
        foreach ($Res as $r) {
            foreach ($r->photos as $photo) {
                $path = storage_path('app/public/' . $photo->thumbnail);
                if ($photo != null && file_exists($path)) {
                    $content = file_get_contents($path);
                    $base64 = base64_encode($content);
                    $r["thumbnail$i"] = $base64;
                    $i++;
                }
            }
            unset($r['photos']);
        }
        return response()->json([
            'status' => true,
            'message' => "the hotel with id = $id",
            'data' => $Res,
        ]);
    }

    public function getRestaurantBill(Request $request)
    {
        $persons = $request->query('persons');
        $id = $request->query('id');
        $restaurant = Restaurant::where('id', $id)->get();
        $bill = 0;

        if ($persons % 2 != 0) {
            $bill = ((int)($persons / 2) * $restaurant[0]['table_price']) + $restaurant[0]['table_price'];
        } else {
            $bill = (($persons / 2) * $restaurant[0]['table_price']);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'the changed bill',
            'bill' => $bill
        ], 200);
    }

    public function reserve_restaurant(Request $request)
    {

        $user_data = auth()->user();

        $request->validate([
            'restaurant_id' => 'required',
            'bill' => 'required',
            'table_num' => 'required|max:10|numeric',
            'persons_num' => 'required|max:20|numeric',
            'date' => 'required',
        ]);



        $restaurant_reservation = RestaurantUser::create([
            'restaurant_reserve_price' => $request->bill,
            'restaurant_reserve_tablenum' => $request->table_num,
            'restaurant_reserve_date' => $request->date,
            'restaurant_reserve_personsnum' => $request->persons_num,
            'restaurant_id' => $request->restaurant_id,
            'usermobile_id' => $user_data->id,

        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'reservation done successfuly',
            'date' => $restaurant_reservation

        ], 200);
    }
    public function delete_restaurant_reservation(Request $request)
    {
        $user = auth()->user()->id;
        $request->validate([
            'restaurant_id' => 'required|numeric'
        ]);

        RestaurantUser::where('usermobile_id', $user)->where('restaurant_id', $request->restaurant_id)->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'reservation deleted',
        ], 200);
    }
}
