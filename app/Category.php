<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];


    public function photos()
    {
        return $this->hasMany(Photo::class, 'collection_id', 'id');
    }
}