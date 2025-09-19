<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarUser extends Model
{
    protected $table = 'car_usermobile';
    protected $fillable =
    [
        'rental_start_date',
        'rental_end_date',
        'price',
        'car_id',
        'usermobile_id',
    ];
    use HasFactory;
    public function usermobile(): BelongsTo
    {
        return $this->belongsTo(Usermobile::class);
    }

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
