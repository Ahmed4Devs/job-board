<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = ['author', 'content', 'post_id'];

    protected $guarded = ['id'];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
