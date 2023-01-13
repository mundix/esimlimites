<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_email',
        'client_name',
        'client_contact',
        'client_order_number',
        'channel',
        'client_imei',
        'qr_image',
        'template',
    ];
}
