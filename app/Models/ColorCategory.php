<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'color'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
