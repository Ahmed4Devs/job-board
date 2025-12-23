<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    //
    protected $fillable = ['title', 'body', 'author', 'published']; // fields can be updated

    protected $guarded = ['id']; // cannot be updated/assigned (readonly)
}
