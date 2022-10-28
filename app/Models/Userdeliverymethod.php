<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdeliverymethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'deliverymethod_id', 'transaction_id', 'user_id',
    ];
}
