<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    protected $guarded = [];

     /**
     * Get the Company associated with the product.
     */
    public function Product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
