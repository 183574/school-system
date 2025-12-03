<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function classes()
    {
        return $this->belongsToMany(ClassRoom::class, 'teacher_class');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'teacher_class_subject');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}