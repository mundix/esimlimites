<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'location',
        'plan_type',
        'iccid',
        'provider',
        'validity',
        'status',
        'payment',
        'qty',
    ];
}
