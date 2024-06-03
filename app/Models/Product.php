<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Relations;

class Product extends Model
{
    use HasFactory,
        Relations\BelongsTo\ProductHasCategory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'image'
    ];
}
