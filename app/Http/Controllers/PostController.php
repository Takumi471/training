<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Course;
use App\Models\User;
use App\Models\Statistics;
use App\Models\Menu;

class PostController extends Controller
{
    public function index(Course $course,User $user)
    {
    return view('training/index')->with([
        'courses' => $course->get(),
        'users' => $user->get()]);
    }
    
    public function show(Course $course,Menu $menu)
    {
        return view('training/show')->with([
        'courses' => $course->get(),
        'menus' => $menu->get()]);
    }
    public function menu_detail(Menu $menu)
    {
        return view('training/menu_detail')->with(['menus' => $menu->get()]);
    }
    public function statistic(Statistics $statistic)
    {
        return view('training/statistic')->with(['statistics' => $statistic->get()]);
    }
}
