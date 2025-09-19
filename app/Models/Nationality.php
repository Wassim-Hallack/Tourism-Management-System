<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nationality extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nationality_name'
    ];

    public function passenger(): HasMany
    {
        return $this->hasMany(Passenger::class);
    }
}
    
    


