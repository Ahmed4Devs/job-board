<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    use HasUuids;

    protected $primaryKey = 'id';

    protected $keyType = 'string'; // UUID - universal unique identifier

    public  $incrementing = false;

    protected $table = 'comment';

    protected $fillable = ['author', 'content', 'post_id'];

    protected $guarded = ['id'];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
