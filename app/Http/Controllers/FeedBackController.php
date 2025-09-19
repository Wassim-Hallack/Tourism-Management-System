<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Favourite;
use App\Models\FeedBack;
use App\Models\Hotel;
use App\Models\Package;
use App\Models\Restaurant;
use App\Models\TourismPlace;
use App\Models\Usermobile;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function get_feedback(Request $request)
    {
        $user = auth()->user()->id;
        $request->validate([
            'message' => 'required',
            'rating' => 'required|numeric',
        ]);
        $feed = FeedBack::create([
            'message' => $request->message,
            'rating' => $request->rating,
            'response' => null,
            'usermobile_id' => $user,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'feedback sent successfuly',
        ], 200);
    }
    public function send_email()
    {
        echo 'hello';
    }

    public function add_favourite(Request $request)
    {
        $user = auth()->user()->id;
        $request->validate([
            'id' => 'required|numeric',
            'type' => 'required'
        ]);
        if ($request->type == 1) {
            $c = Car::find($request->id);
            $c->favouritable()->create([
                'usermobile_id' => $user,
            ]);
        } else if ($request->type == 2) {
            $c = Hotel::find($request->id);
            $c->favouritable()->create([
                'usermobile_id' => $user,
            ]);
        } else if ($request->type == 3) {
            $c = Package::find($request->id);
            $c->favouritable()->create([
                'usermobile_id' => $user,
            ]);
        } else if ($request->type == 4) {
            $c = Restaurant::find($request->id);
            $c->favouritable()->create([
                'usermobile_id' => $user,
            ]);
        } else {
            $c = TourismPlace::find($request->id);
            $c->favouritable()->create([
                'usermobile_id' => $user,
            ]);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'added to favourite successfully',

        ], 200);
    }
    public function get_favourite()
    {
        $user = auth()->user()->id;
        $f = Favourite::where('usermobile_id', $user)->get();
        foreach ($f as $ff) {
            $ff['name'] =  $ff->favouritable->name;
            unset($ff['favouritable']);
        }
        return response()->json([
            'status' => 'success',
            'messgae' => 'user favourites list',
            'data' => $f,

        ], 200);
    }

    public function delete_favourite(Request $request)
    {
        $user = auth()->user()->id;
        $request->validate([
            'id' => 'required|numeric'
        ]);
        Favourite::where('usermobile_id', $user)->where('favouritable_id', $request->id)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'favourite deleted',
        ], 200);
    }
}
