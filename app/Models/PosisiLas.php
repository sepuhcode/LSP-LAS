<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PosisiLas extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];


    public function skema(): BelongsTo
    {
        return $this->belongsTo(SkemaSertifikasi::class,'skema_sertifikasi_id','id');
    }
}
