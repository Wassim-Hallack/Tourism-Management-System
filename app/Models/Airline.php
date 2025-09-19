<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Airline extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable =
    [
        'name',
        'active',
        'thumbnail',
        'published_at',
    ];

    public function airflight(): HasMany
    {
        return $this->hasMany(Airflight::class);
    }

}
