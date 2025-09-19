<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class CarCompany extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'name',
        'website',
        'phone',
        'active',
        'thumbnail',
        'published_at',
    ];
    public function car(): HasMany
    {
        return $this->hasMany(Car::class);
    }

}
