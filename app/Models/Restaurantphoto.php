<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Restaurantphoto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = 
    [
        'thumbnail',
        'restaurant_id'
    ];
    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }
}
