<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\packageUser;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function get_packages()
    {

        $package = Package::with('hotel', 'tourism')->get();
        foreach ($package as $p) {

            $path = storage_path('app/public/' . $p->thumbnail);
            if ($p->thumbnail != null && file_exists($path)) {
                $content = file_get_contents($path);
                $base64 = base64_encode($content);
                $p->thumbnail = $base64;
            } else {
                $p->thumbnail = null;
            }
        }

        $transformedPackages = $package->map(function ($package) {
            return [
                // dd($package->tourismplace_name),
                'hotel_name' => $package->hotel_name,
                'airflight_id' => $package->airflight_id,
                'restaurant_name' => $package->restaurant_name,
                'tourism_name' => $package->tourismplace_name,
                'start_date' => $package->start_date,
                'end_date' => $package->end_date,
                'price' => $package->price,
                'active' => $package->active,
                'thumbnail' => $package->thumbnail,
                'published_at' => $package->published_at,
                'package_id' => $package->id,
            ];
        });

        return response()->json([
            'status' => 'success',
            'message' => 'all packages data',
            'data' => $transformedPackages,
        ], 200);
    }
    public function reserve_package(Request $request)
    {

        $user_data = auth()->user();

        $request->validate([
            'package_id' => 'required',

        ]);

        $car_reservation = packageUser::create([
            'usermobile_id' => $user_data->id,
            'package_id' => $request->package_id,

        ]);



        return response()->json([
            'status' => 'success',
            'message' => 'reservation done successfuly',
            'date' => $car_reservation

        ], 200);
    }
    public function delete_package_reservation(Request $request)
    {
        $user = auth()->user()->id;
        $request->validate([
            'package_id' => 'required|numeric'
        ]);

        packageUser::where('usermobile_id', $user)->where('package_id', $request->package_id)->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'reservation deleted',
        ], 200);
    }
}
