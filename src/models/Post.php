<?php

namespace MeinderA\LaravelForum\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['subject', 'content'];

    public function thread(): BelongsTo
    {
        return $this->belongsTo(Thread::class, 'thread_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(config('forum.user_class_namespace'), config('forum.user_class_local_key'), 'posted_by');
    }
}