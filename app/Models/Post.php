<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Post extends Model
{
    use HasFactory;

    use HasUuids;

    protected $primaryKey = 'id';

    protected $keyType = 'string'; // UUID - universal unique identifier

    public  $incrementing = false;

    protected $table = 'post';

    protected $fillable = ['title', 'body', 'author', 'published']; // fields can be updated

    protected $guarded = ['id']; // cannot be updated/assigned (readonly)

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
