<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;

class Package extends Model
{
    use HasFactory, Filterable;

    protected $fillable =
    [
        'start_date',
        'end_date',
        'price',
        'active',
        'thumbnail',
        'published_at',
        'hotel_id',
        'restaurant_id',
        'airflight_id',
        'tourism_id',
    ];
    private static $whiteListFilter = [
        'start_date',
        'end_date',
        'price',

    ];

    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    public function tourism(): BelongsTo
    {
        return $this->belongsTo(TourismPlace::class);
    }

    public function airflight(): BelongsTo
    {
        return $this->belongsTo(Airflight::class);
    }
    public function package_user(): BelongsToMany
    {
        return $this->belongsToMany(Usermobile::class);
    }
    public function getHotelNameAttribute()
    {
        return $this->hotel->name;
    }

    public function getRestaurantNameAttribute()
    {
        return $this->restaurant->name;
    }

    public function getTourismPlaceNameAttribute()
    {
        return $this->tourism->name;
    }
    public function favouritable(): MorphMany
    {
        return $this->morphMany(Favourite::class,'favouritable');
    }
}
