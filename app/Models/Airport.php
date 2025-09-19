<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Airport extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['IATA_code', 
    'active',
    'published_at',];

    public function airflight_airport(): HasMany
    {
        return $this->hasMany(AirflightPort::class);
    }

}
