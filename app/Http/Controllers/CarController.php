<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarUser;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function get_cars()
    {

        $Cars = Car::with('carcompany')->where('active', 1)->get();
        foreach ($Cars as $C) {

            $path = storage_path('app/public/' . $C->thumbnail);
            if ($C->thumbnail != null && file_exists($path)) {
                $content = file_get_contents($path);
                $base64 = base64_encode($content);
                $C->thumbnail = $base64;
            } else {
                $C->thumbnail = null;
            }

            $C['companyPhone'] = $C->carcompany->phone;
            $C['companyName'] = $C->carcompany->name;
            $C['companywebsite'] = $C->carcompany->website;
            unset($C['carcompany']);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'all cars data',
            'data' => $Cars,
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
    public function reserve_car(Request $request)
    {

        $user_data = auth()->user();
        $wallet = Wallet::get()->where('usermobile_id', $user_data->id);
        if ($wallet->money < $request->bill) {
            return response()->json([
                'status' => 'fail',
                'status' => 'not enough money',
            ], 422);
        }

        $request->validate([
            'car_id' => 'required',
            'bill' => 'required',
            'start' => 'required',
            'end' => 'required',

        ]);


        $car_reservation = CarUser::create([
            'rental_start_date' => $request->start,
            'rental_end_date' => $request->end,
            'price' => $request->bill,
            'car_id' => $request->car_id,
            'usermobile_id' => $user_data->id,

        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'reservation done successfuly',
            'date' => $car_reservation

        ], 200);
    }
    public function delete_car_reservation(Request $request)
    {
        $user = auth()->user()->id;
        $request->validate([
            'car_id' => 'required|numeric'
        ]);

          CarUser::where('usermobile_id',$user)->where('car_id',$request->car_id)->first()->delete();
        

        return response()->json([
            'status' => 'success',
            'message' => 'reservation deleted',
        ],200);

    }
}
