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

    // public function productcategory() {
    //     return $this->belongsTo(Productcategory::class);
    // }

    // New product categories below
    public function gendercategory() {
        return $this->belongsTo(GenderCategory::class, 'gender_categories_id');
    }
    public function shapecategory() {
        return $this->belongsTo(ShapeCategory::class, 'shape_categories_id');
    }
    public function colorcategory() {
        return $this->belongsTo(ColorCategory::class, 'color_categories_id');
    }
    public function sizecategory() {
        return $this->belongsTo(SizeCategory::class, 'size_categories_id');
    }
    public function glasscategory() {
        return $this->belongsTo(GlassCategory::class, 'glass_categories_id');
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
