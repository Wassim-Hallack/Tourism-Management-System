<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AirflightPort extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'airflight_airport';
    protected $fillable =
    [
        'airport_id',
        'airflight_id',
    ];
    public function Airflight(): BelongsTo
    {
        return $this->belongsTo(Airflight::class);
    }
    public function Airport(): BelongsTo
    {
        return $this->belongsTo(Airport::class);
    }
}
