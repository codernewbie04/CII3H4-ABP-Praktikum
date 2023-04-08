<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Variant;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'stock',
        'price',
    ];
    public function variants() {
        return $this->hasMany(Variant::class, "product_id");
    }
}
