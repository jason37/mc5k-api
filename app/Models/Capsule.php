<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capsule extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
				'open_time',
				'is_opened',
				'user_id'
    ];
}
