<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
        public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'class_subject');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_class');
    }
}
