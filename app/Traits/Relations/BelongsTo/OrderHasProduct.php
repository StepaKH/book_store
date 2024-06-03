<?php

namespace App\Traits\Relations\BelongsTo;

use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait OrderHasProduct
{
    public function product() : BelongsTo {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
