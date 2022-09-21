<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productcategory_id', 'name', 'quantityinstock', 'status'
    ];

    public function productcategory() {
        return $this->belongsTo(Productcategory::class);
    }

    public function productimages() {
        return $this->hasMany(Productimages::class);
    }
    public function productprices() {
        return $this->hasMany(Productprices::class);
    }
    public function productfeatures() {
        return $this->hasMany(Productfeatures::class);
    }

}
