<?php

namespace App\Http\Controllers;
use App\Http\Requests\CourseRequest; 

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Course;
use App\Models\User;
use App\Models\Statistic;
use App\Models\Menu;
use App\Models\Tag;

class CourseController extends Controller
{
    public function index(Course $course,User $user,Menu $menu,Post $post)
    {
        return view('training/index')->with([
            'courses' => $course->get(),
            'users' => $user->get(),
            'menus' => $menu->get(),
            'posts' => $post->get(),
        ]);
    }
    public function course_detail(Course $course,Menu $menu)
    {
        return view('training/course_detail')->with([
            'courses' => $course->get(),
            'menus' => $menu->get()
            ]);
    }
    
    public function store(Course $course, CourseRequest $request)
    {
        $input = $request['course'];
        $post->fill($input)->save();
        return redirect('/');
    }
    public function delete_course(Course $course)
    {
        $course->delete();
        return redirect('/');
    }
    public function create_course(Course $course,Menu $menu)
    {
        return view('training/create_course')->with([
            'menus' => $menu->get()
            ]);
    }
    
}
