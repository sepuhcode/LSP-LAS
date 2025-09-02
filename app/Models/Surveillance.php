<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Surveillance extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function skemaSertifikasi(): BelongsTo
    {
        return $this->belongsTo(SkemaSertifikasi::class, 'skema_kompetensi_id');
    }

    public function sumberDanaSertifikasi(): BelongsTo
    {
        return $this->belongsTo(SumberDanaSertifikasi::class, 'sumber_dana_sertifikasi_id');
    }
}
