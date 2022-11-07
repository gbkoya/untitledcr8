<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShapeCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'shape'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
