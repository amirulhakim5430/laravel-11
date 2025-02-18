<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Merchant extends Model
{
    protected $guarded = [];

    /**
     * Get the Product associated with the company.
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
