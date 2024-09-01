<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'address',
        'user_tuk_id'
    ];

    public function tukOwner(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_tuk_id');
    }
}
