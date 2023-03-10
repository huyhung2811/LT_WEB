<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'room_number',
        'area_id',
        'current_numbers',
        'max_numbers',
        'gender'
    ];
}
