<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HotelsRoomType extends Model
{
    use HasFactory;
    protected $table = 'hotels_room_types';
    public $timestamps = false;

    protected $fillable = ['type'];

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class);
    }
}
