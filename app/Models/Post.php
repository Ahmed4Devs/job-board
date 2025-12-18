<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'body', 'published']; // fields can be updated

    protected $guarded = ['id']; // cannot be updated/assigned (readonly)
}
