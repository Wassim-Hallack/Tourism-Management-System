<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'nationality',
    ];

    protected $hidden = [
        'passport_num',
        'expiration_date',

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(Usermobile::class);
    }

    public function nationality(): BelongsTo
    {
        return $this->belongsTo(Nationality::class);
    }
    public function airflight(): BelongsTo
    {
        return $this->belongsTo(Airflight::class);
    }
}
