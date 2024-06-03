<?php

namespace App\Traits\Relations\BelongsTo;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait ProductHasCategory
{
    public function category() : BelongsTo {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
