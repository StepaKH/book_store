<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Relations;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'parent_id'
    ];

    public function getParentName() {
        $parent = Category::where('id', $this->attributes['parent_id'])
            ->get()
            ->first();
        return $parent === null ? "нет" : $parent->name;
    }
}
