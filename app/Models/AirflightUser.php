<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AirflightUser extends Model
{
    use HasFactory;
    protected $table = 'airflight_usermobile';
    protected $fillable =
    [
        'airflight_id',
        'usermobile_id',
    ];
    public function Airflight(): BelongsTo
    {
        return $this->belongsTo(Airflight::class);
    }
    public function usermobile(): BelongsTo
    {
        return $this->belongsTo(Usermobile::class);
    }
}
