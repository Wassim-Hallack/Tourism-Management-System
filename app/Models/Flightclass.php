<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Flightclass extends Model
{
    use HasFactory;
    protected $table = 'flightclasses';
    public $timestamps = false;

    protected $fillable = ['name'];

    public function airflight(): HasMany
    {
        return $this->hasMany(Airflight::class);
    }

}
