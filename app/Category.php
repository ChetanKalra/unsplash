<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];


    public function photos()
    {
        return $this->hasMany(Photo::class, 'collection_id', 'id');
    }
}


// college
// classes
// students
// teachers

// Model - College, Migration create_colleges_table

// One to Many between College & Class

// College
// public function classes()
// {
//     return $this->hasMany(Class::class);
// }

// // Class
// public function college()
// {
//     return $this->belongsTo(College::class);
// }

// public function students()
// {
//     return $this->hasMany(Student::class);
// }

// // Student
// public function class()
// {
//     return $this->belongsTo(Class::class);
// }


// One to One
// hasOne,   Inverse - belongsTo

// One to Many
// hasMany,    Inverse - belongsTo

// Many to Many
// belongsToMany


// classes

// class_id

// user_id -> created_by


// classes
// teachers

// One Class - Many Teachers
// One Teacher - Many Class


// tags & photos

// tag_photo

// classes & teachers

// class_teacher
