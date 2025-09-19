<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'money',
        'usermobile_id'
    ];
    public function usermobile(): BelongsTo
    {
        return $this->belongsTo(Usermobile::class);
    }
}
