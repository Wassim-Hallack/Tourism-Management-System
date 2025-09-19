<?php

namespace App\Http\Controllers;

use App\Models\Airflight;
use App\Models\Car;
use App\Models\Hotel;
use App\Models\Restaurant;
use App\Models\TourismPlace;


class FilterController extends Controller
{
    public function FilterCars()
    {
        return Car::filter()->get();
    }

    public function FilterHotel()
    {
        return Hotel::filter()->get();
    }

    public function FilterRestaurant()
    {
        $res  = Restaurant::filter()->get();
        return response()->json([
            'status' => 'success',
            'message' => 'filters',
            'data' => $res
        ], 200);
    }

    public function FilterPlaces()
    {
        return TourismPlace::filter()->get();
    }
    public function FilterAirflight()
    {
        return Airflight::filter()->get();
    }
}
