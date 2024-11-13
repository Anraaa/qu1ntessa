<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'date',
        'start_time',
        'end_time',
        'duration_time',
        'course_name',
        'meeting_number',
        'lecturer',
        'room'
    ];
}
