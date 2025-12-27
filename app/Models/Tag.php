<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    use HasUuids;

    protected $primaryKey = 'id';

    protected $keyType = 'string'; // UUID - universal unique identifier

    public  $incrementing = false;

    protected $table = 'tag';

    protected $fillable = ['title']; // fields can be updated

    protected $guarded = ['id']; // cannot be updated/assigned (readonly)

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
