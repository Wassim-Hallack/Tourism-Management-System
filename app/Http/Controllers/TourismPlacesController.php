<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\TourismPlace;
use Illuminate\Http\Request;

class TourismPlacesController extends Controller
{
    public function tourism(Request $request)
    {
        //query http
        $categorie = $request->query('categorie_id');
        $places = TourismPlace::where('categorie_id', $categorie)->get();
        foreach ($places as $place) {

            $path = storage_path('app/public/' . $place->thumbnail);
            if ($place->thumbnail != null && file_exists($path)) {
                $content = file_get_contents($path);
                $base64 = base64_encode($content);
                $place->thumbnail = $base64;
            } else {
                $place->thumbnail = null;
            }
        }
        return response()->json([
            'message' => 'success',
            'data' => $places,
        ], 200);
    }
}
