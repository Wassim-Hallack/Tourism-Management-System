<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Nnjeim\World\Models\Country;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;


class Airflight extends Model
{
    use HasFactory, Filterable;
    public $timestamps = false;

    protected $fillable = [
        'departure_datetime',
        'arrival_datetime',
        'price',
        'thumpnail',
        'active',
        'published_at',
        'statet_id',
        'statel_id',
    ];
    private static $whiteListFilter = [
        'departure_datetime',
        'arrival_datetime',
        'price',
    ];
    public function passenger(): HasMany
    {
        return $this->hasMany(Passenger::class);
    }

    public function airline(): BelongsTo
    {
        return $this->belongsTo(Airline::class);
    }
    public function airbort(): BelongsTo
    {
        return $this->belongsTo(Airport::class);
    }

    public function airflight_flightclass(): HasMany
    {
        return $this->hasMany(AirflightClass::class);
    }
    public function flightclass(): BelongsTo
    {
        return $this->belongsTo(Flightclass::class);
    }

    public function airflight_airport(): HasMany
    {
        return $this->hasMany(AirflightPort::class);
    }

    public function package(): HasMany
    {
        return $this->hasMany(Package::class);
    }
    public function user(): HasMany
    {
        return $this->hasMany(AirflightUser::class);
    }

    public function state_takeoff(): BelongsTo
    {
        return $this->BelongsTo(Country::class, 'statet_id');
    }
    public function state_land(): BelongsTo
    {
        return $this->BelongsTo(Country::class, 'statel_id');
    }
}
