<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productfeatures extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'features'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
