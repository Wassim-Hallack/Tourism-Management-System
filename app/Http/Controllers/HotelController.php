<?php

namespace App\Http\Controllers;

use Nnjeim\World\Models\Country;
use App\Models\Hotel;
use App\Models\HotelUser;
use Illuminate\Http\Request;
use Nnjeim\World\Models\State as ModelsState;

use function PHPUnit\Framework\fileExists;

class HotelController extends Controller
{
    public function get_hotels()
    {
        //query http

        $hotels = Hotel::all()->reject(function ($hotel) {
            return $hotel->active == 0;
        });
        return response()->json([
            'message' => 'success',
            'message' => 'hotels data',
            'data' => $hotels,
        ], 200);
    }

    public function get_hotel_by_index(Request $request)
    {
        $i = 0;
        $id = $request->query('id');
        $hotels = Hotel::with('photos')->where('id', $id)->where('active', 1)->get();
        foreach ($hotels as $hotel) {
            foreach ($hotel->photos as $photo) {
                $path = storage_path('app/public/' . $photo->thumbnail);
                if ($photo != null && file_exists($path)) {
                    $content = file_get_contents($path);
                    $base64 = base64_encode($content);
                    $hotel["thumbnail$i"] = $base64;
                    $i++;
                }
            }
            return response()->json([
                'status' => true,
                'message' => "the hotel with id = $id",
                'data' => $hotels,
            ]);
        }
    }


    public function get_hotel_bill(Request $request)
    {
        $persons = $request->query('persons');
        $id = $request->query('id');
        $hotel = Hotel::where('id', $id)->get();
        $bill = 0;

        if ($persons % 2 != 0) {
            $bill = ((int)($persons / 2) * $hotel[0]['room_price']) + $hotel[0]['room_price'];
        } else {
            $bill = (($persons / 2) * $hotel[0]['room_price']);
        }

        return response()->json([
            'message' => 'success',
            'message' => 'changed hotel bill',
            'bill' => $bill
        ], 200);
    }
    public function reserve_hotel(Request $request)
    {
        $user_data = auth()->user();

        $request->validate([
            'Hotel_id' => 'required',
            'hotels_room_type_id' => 'required|numeric',
            'bill' => 'required',
            'room_num' => 'required',
            'persons_num' => 'required',
            'date' => 'required',
        ]);


        $Hotel_reservation = HotelUser::create([
            'hotel_reserve_price' => $request->bill,
            'hotel_room_num' => $request->room_num,
            'hotel_reserve_date' => $request->date,
            'hotel_person_num' => $request->persons_num,
            'hotel_id' => $request->Hotel_id,
            'usermobile_id' => $user_data->id,
            'hotels_room_type_id' => $request->hotels_room_type_id,

        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'reservation done successfuly',
            'date' => $Hotel_reservation

        ], 200);
    }
    public function delete_hotel_reservation(Request $request)
    {
        $user = auth()->user()->id;
        $request->validate([
            'hotel_id' => 'required|numeric'
        ]);

        HotelUser::where('usermobile_id', $user)->where('hotel_id', $request->hotel_id)->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'reservation deleted',
        ], 200);
    }
}
