<?php

namespace MeinderA\LaravelForum\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Thread extends Model
{
    protected $fillable = ['subject', 'slug', 'content', 'posted_by', 'category_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'thread_id', 'id');
    }
}