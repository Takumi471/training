<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Course;

class PostController extends Controller
{
    public function index(Course $course)
    {
    return view('training/index')->with(['courses' => $course->get()]);
    }
    
    public function show(Course $course)
    {
        return view('training/show')->with(['courses' => $course->get()]);
    }
    
}
