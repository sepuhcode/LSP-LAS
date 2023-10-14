<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataLama extends Model
{
    use HasFactory;

    protected $table = 'data-lama';
    protected $primaryKey = 'no';
    public $incrementing = false;

}
