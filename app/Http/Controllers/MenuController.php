<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest; 
use App\Http\Requests\CommentRequest; 

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Course;
use App\Models\User;
use App\Models\Statistic;
use App\Models\Menu;
use App\Models\Tag;
use App\Models\Comment;

class MenuController extends Controller
{
    public function menu_detail(User $user,Menu $menu,Post $post,Tag $tag,Comment $comment)
    {
        return view('training/menu_detail')->with([
            'users' => $user->get(),
            'menus' => $menu->get(),
            'posts' => $post->get(),
            'tags' => $tag->get(),
            'comments' => $comment->get()
            ]);
    }
    
}
