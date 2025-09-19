<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens; // Add this line
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticateContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Usermobile extends Model implements AuthenticateContract
{
    use HasApiTokens, Notifiable, Authenticatable;
    protected $table = 'usermobiles';

    protected $fillable = [
        'name',
        'last_name',
        'password',
        'email',
        'gender'
    ];


    protected $hidden = [
        'password',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function passengers(): HasMany
    {
        return $this->hasMany(Passenger::class);
    }
    public function hotel_reservation(): BelongsToMany
    {
        return $this->belongsToMany(Hotel::class);
    }
    public function restaurant_reservation(): BelongsToMany
    {
        return $this->belongsToMany(Restaurant::class);
    }
    public function car_user(): BelongsToMany
    {
        return $this->belongsToMany(Car::class);
    }
    public function package_user(): BelongsToMany
    {
        return $this->belongsToMany(Package::class);
    }

    public function accessTokens()
    {
        return $this->hasMany('App\OauthAccessToken');
    }
    public function user_car(): HasMany
    {
        return $this->hasMany(CarUser::class);
    }
    public function user_res(): HasMany
    {
        return $this->hasMany(RestaurantUser::class);
    }
    public function user_hotel(): HasMany
    {
        return $this->hasMany(HotelUser::class);
    }
    public function user_air(): HasMany
    {
        return $this->hasMany(AirflightClass::class);
    }
    public function user_pack(): HasMany
    {
        return $this->hasMany(PackageUser::class);
    }
    public function feedback(): HasMany
    {
        return $this->hasMany(FeedBack::class);
    }
    public function wallet(): HasOne
    {
        return $this->hasOne(Wallet::class);
    }
    public function favouritable(): HasMany
    {
        return $this->hasMany(Favourite::class);
    }
}
