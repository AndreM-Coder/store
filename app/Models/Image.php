<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use Timestamp;

    protected $table='image';

    protected $fillable = [
        'user_id',
        'name',
        'path',
        'type',
        'status'
    ];
}
