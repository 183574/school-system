<?php

namespace App\Http\Controllers;
use App\Models\ClassRoom;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;

use Illuminate\Http\Request;

class Teacherdashboard extends Controller
{
        public function index()
    {
        $teacher = auth()->user()->teacher;

        $classes = $teacher->classes()
            ->with('subjects')
            ->get();

        return view('dashboard.teacher', compact('teacher', 'classes'));
    }
}
