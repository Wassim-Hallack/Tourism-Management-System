<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Laravel\Scout\Searchable;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;

class Car extends Model
{
    use HasFactory, Searchable, Filterable;
    protected $fillable =
    [
        'car_name',
        'passenger_num',
        'door_num',
        'price_day',
        'type',
        'air_conditioning',
        'active',
        'thumbnail',
        'published_at',
    ];
    private static $whiteListFilter = [
        'passenger_num',
        'door_num',
        'price_day',
        'type',
        'air_conditioning',
    ];
    public function carcompany(): BelongsTo
    {
        return $this->belongsTo(CarCompany::class);
    }
    public function car_user(): BelongsToMany
    {
        return $this->belongsToMany(Usermobile::class);
    }
    public function favouritable(): MorphMany
    {
        return $this->morphMany(Favourite::class,'favouritable');
    }

    public function toSearchableArray()
    {
        return
            [
                'car_name' => $this->car_name,
            ];
    }
}
