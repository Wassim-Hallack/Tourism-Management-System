<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HotelUser extends Model
{
    use HasFactory;

    protected $table = 'hotel_usermobile';

    protected $fillable =
    [
        'hotel_reserve_price',
        'hotel_reserve_date',
        'hotel_person_num',
        'hotel_room_num',
        'hotel_id',
        'usermobile_id',
        'hotels_room_type_id',
    ];

    public function usermobile(): BelongsTo
    {
        return $this->belongsTo(Usermobile::class);
    }

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }
    public function hotels_room_type(): BelongsTo
    {
        return $this->belongsTo(HotelsRoomType::class);
    }
}
