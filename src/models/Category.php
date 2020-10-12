<?php

namespace MeinderA\LaravelForum\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'color'];

    public function threads(): HasMany
    {
        return $this->hasMany(Thread::class, 'category_id', 'id');
    }
}