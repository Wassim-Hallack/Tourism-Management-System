<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AirflightClass extends Model
{
    use HasFactory;
    protected $table = 'airflight_flightclass';
    public $timestamps = false;
    protected $fillable =
    [
        'flightclass_id',
        'airflight_id',
        'passengers_num',
    ];
    public function flightclass(): BelongsTo
    {
        return $this->belongsTo(Flightclass::class);
    }
    public function Airflight(): BelongsTo
    {
        return $this->belongsTo(Airflight::class);
    }
}
