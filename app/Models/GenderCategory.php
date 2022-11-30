<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenderCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
