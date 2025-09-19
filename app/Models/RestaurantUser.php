<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Passport\Bridge\UserRepository;

class RestaurantUser extends Model
{
    use HasFactory;
    protected $table = 'restaurant_usermobile';
    protected $fillable =
    [
        'restaurant_reserve_price',
        'restaurant_reserve_tablenum',
        'restaurant_reserve_date',
        'restaurant_reserve_personsnum',
        'restaurant_id',
        'usermobile_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(Usermobile::class);
    }

    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function user_reservation(): HasMany
    {
        return $this->hasMany(UserReservation::class);
    }
}
