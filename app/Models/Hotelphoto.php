<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hotelphoto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = 
    [
        'thumbnail',
        'hotel_id'
    ];
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }
}
