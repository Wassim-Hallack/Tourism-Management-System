<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Hotel;
use App\Models\Restaurant;
use App\Models\TourismPlace;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function FullSearch(Request $request)
    {


        $full = collect();

        $objects =
            [
                Car::search($request->query('name'))->get(),
                Hotel::search($request->query('name'))->get(),
                Restaurant::search($request->query('name'))->get(),
                TourismPlace::search($request->query('name'))->get(),
            ];

        foreach ($objects as $object) {
            foreach ($object as $item) {
                $full->push($item);
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'full search data',
            'data' => $full,
        ], 200);
    }
}
