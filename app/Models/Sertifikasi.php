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
        return $this->belongsTo(SkemaSertifikasi::class,'skema_sertifikasi_id');
    }

    public function posisiLas(): BelongsTo
    {
        return $this->belongsTo(PosisiLas::class,'posisi_las_id');
    }

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function asesor(): BelongsTo
    {
        return $this->belongsTo(User::class,'asesor_id','id');
    }

    
}
