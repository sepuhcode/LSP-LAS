<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sertifikasi extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function skemaSertifikasi(): BelongsTo
    {
        return $this->belongsTo(SkemaSertifikasi::class,'skema_sertifikasi_id')->withTrashed();
    }

    public function posisiLas(): BelongsTo
    {
        return $this->belongsTo(PosisiLas::class,'posisi_las_id')->withTrashed();
    }

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function asesor(): BelongsTo
    {
        return $this->belongsTo(User::class,'asesor_id');
    }
    public function asesor2(): BelongsTo
    {
        return $this->belongsTo(User::class,'asesor2_id');
    }
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class,'owner_id');
    }

    
}
