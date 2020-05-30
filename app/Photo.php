<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'collection_id', 'id')->withTrashed();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_photo')->withTimestamps();
    }
}
