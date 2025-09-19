<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PackageUser extends Model
{
    use HasFactory;
    protected $fillable = ['package_id', 'usermobile_id'];
    protected $table = 'package_usermobile';


    public function user(): BelongsTo
    {
        return $this->belongsTo(Usermobile::class);
    }

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
}
