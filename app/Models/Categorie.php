<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['categorie'];
    protected $table = 'categories';

    public function tourism_places(): HasMany
    {
        return $this->hasMany(TourismPlace::class);
    }
}
