<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productimages extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'imagedirectory', 'thumbnaildirectory'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
