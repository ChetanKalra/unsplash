<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function photos()
    {
        return $this->belongsToMany(Photo::class, 'tag_photo')->withTimestamps();
    }
}
