<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productprices extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'image_directory', 'product_price'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
