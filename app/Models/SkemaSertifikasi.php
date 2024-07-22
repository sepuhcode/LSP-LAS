<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class SkemaSertifikasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function posisis(): HasMany
    {
        return $this->hasMany(PosisiLas::class,'skema_sertifikasi_id','id');
    }

    public function sertifikasis(): HasMany
    {
        return $this->hasMany(Sertifikasi::class);
    }
}
