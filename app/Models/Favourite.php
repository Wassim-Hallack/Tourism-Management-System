<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Favourite extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'usermobile_id',
        'favouritable_id',
        'favouritable_type'
    ];
    public function favouritable(): MorphTo
    {
        return $this->morphTo();
    }
}
