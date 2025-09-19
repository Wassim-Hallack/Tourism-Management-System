<?php

use App\Http\Controllers\airflightcontroller;
use App\Http\Controllers\TourismPlacesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PackageChatController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WalletController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('register', [AuthController::class, "register"]);

Route::post('login', [AuthController::class, "login"]);


Route::group(["middleware" => ["auth:api"]], function () {

    Route::get("profile", [AuthController::class, "profile"]);

    Route::post("logout", [AuthController::class, "logout"]);

    Route::post('reserve_restaurant', [RestaurantsController::class, 'reserve_restaurant']);

    Route::post('delete_restaurant_reservation', [RestaurantsController::class, 'delete_restaurant_reservation']);

    Route::post('reserve_hotel', [HotelController::class, 'reserve_hotel']);

    Route::post('delete_hotel_reservation', [HotelController::class, 'delete_hotel_reservation']);

    Route::post('reserve_package', [PackageController::class, 'reserve_package']);

    Route::post('delete_package_reservation', [PackageController::class, 'delete_package_reservation']);

    Route::post('reserve_car', [CarController::class, 'reserve_car']);

    Route::post('delete_car_reservation', [CarController::class, 'delete_car_reservation']);

    Route::get('reservations', [ReservationController::class, 'reservations']);

    Route::post('get_feedback', [FeedBackController::class, 'get_feedback']);

    Route::get('hotel_reservations', [ReservationController::class, 'hotel_reservations']);

    Route::get('car_reservations', [ReservationController::class, 'car_reservations']);

    Route::get('restaurant_reservations', [ReservationController::class, 'restaurant_reservations']);

    Route::get('package_reservations', [ReservationController::class, 'package_reservations']);

    Route::get('airflight_reservations', [ReservationController::class, 'airflight_reservations']);

    Route::post('send', [PackageChatController::class, 'messagesend']);

    Route::post('add_favourite', [FeedBackController::class, 'add_favourite']);

    Route::get('get_favourite', [FeedBackController::class, 'get_favourite']);

    Route::post('delete_favourite', [FeedBackController::class, 'delete_favourite']);

    Route::post('add_money', [WalletController::class, 'add_money']);
});

Route::get('getmessages', [PackageChatController::class, 'getmessages']);
//tourism
Route::get('tourism', [TourismPlacesController::class, 'tourism']);


//hotels
Route::get('get_hotels', [HotelController::class, 'get_hotels']);

Route::get('get_hotel_bill', [HotelController::class, 'get_hotel_bill']);

Route::get('get_hotel_by_index', [HotelController::class, 'get_hotel_by_index']);


//restaurants
Route::get('getRestaurantBill', [RestaurantsController::class, 'getRestaurantBill']);

Route::get('get_restaurants', [RestaurantsController::class, 'get_restaurants']);

Route::get('get_restaurant_by_index', [RestaurantsController::class, 'get_restaurant_by_index']);


//packages
Route::get('get_packages', [PackageController::class, 'get_packages']);


//cars
Route::get('get_cars', [CarController::class, 'get_cars']);

Route::get('get_car_bill', [CarController::class, 'get_car_bill']);

Route::get('FullSearch', [SearchController::class, 'FullSearch']);


//Filters
Route::get('FilterCars', [FilterController::class, 'FilterCars']);

Route::get('FilterHotel', [FilterController::class, 'FilterHotel']);

Route::get('FilterRestaurant', [FilterController::class, 'FilterRestaurant']);

Route::get('FilterPlaces', [FilterController::class, 'FilterPlaces']);

Route::get('FilterAirflight', [FilterController::class, 'FilterAirflight']);

//Airflight


Route::get('get_state', [airflightcontroller::class, 'get_state']);

Route::get('get_airflights', [airflightcontroller::class, 'get_airflights']);
