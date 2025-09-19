<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeedBack extends Model
{
    use HasFactory;
    protected $fillable  = [
        'message',
        'rating',
        'response',
        'usermobile_id',
    ];
    public function usermobile(): BelongsTo
    {
        return $this->belongsTo(Usermobile::class);
    }   
}
