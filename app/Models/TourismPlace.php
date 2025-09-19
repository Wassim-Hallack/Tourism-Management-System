<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Laravel\Scout\Searchable;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;

class TourismPlace extends Model
{

    use HasFactory, Searchable, Filterable;
    protected $table = 'tourism_places';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'location',
        'yearly_visitors',
        'description',
        'active',
        'thumbnail',
        'published_at',
        'categorie_id'

    ];
    private static $whiteListFilter = [
        'yearly_visitors',
        'categorie_id'

    ];
    public function package(): HasMany
    {
        return $this->hasMany(Package::class);
    }
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    public function toSearchableArray()
    {
        return
            [
                'name' => $this->name,
                'location' => $this->location,
                'description' => $this->description,
            ];
    }
    public function favouritable(): MorphMany
    {
        return $this->morphMany(Favourite::class,'favouritable');
    }
}
