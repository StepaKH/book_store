<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Relations;

class Order extends Model
{
    use HasFactory,
        Relations\BelongsTo\OrderHasUser,
        Relations\BelongsTo\OrderHasProduct;

    protected $fillable = [
        'number',
        'date',
        'count',
        'product_id',
        'user_id'
    ];
}
