<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Laravel\Scout\Searchable;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;

class Hotel extends Model
{
    use HasFactory, Searchable, Filterable;

    protected $fillable =
    [
        'name',
        'location',
        'description',
        'average_rate',
        'phone',
        'website',
        'average_price',
        'room_price',
        'active',
        'published_at'
    ];
    private static $whiteListFilter = [
        'average_rate',
        'average_price',
        'room_price',
    ];
    public function hotel_reservation(): BelongsToMany
    {
        return $this->belongsToMany(Usermobile::class);
    }
    public function package(): HasMany
    {
        return $this->hasMany(Package::class);
    }
    public function photos(): HasMany
    {
        return $this->hasMany(Hotelphoto::class);
    }

    public function toSearchableArray()
    {
        return
            [
                'name' => $this->name,
                'location' => $this->location,
                'description' => $this->description,
            ];
    }
    public function favouritable(): MorphMany
    {
        return $this->morphMany(Favourite::class,'favouritable');
    }
}
