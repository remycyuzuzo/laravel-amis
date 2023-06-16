<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time',
        'end_time',
        'customer_service_id',
        'description',
        'status',
        'user_id',
        'user_id',
    ];
}
