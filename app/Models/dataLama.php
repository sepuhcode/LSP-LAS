<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataLama extends Model
{
    use HasFactory;

    protected $table = 'data_lama_v2';
    protected $primaryKey = 'no';
    public $incrementing = false;

}
