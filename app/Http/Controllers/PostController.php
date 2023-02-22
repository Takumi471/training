<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest; 

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Course;
use App\Models\User;
use App\Models\Statistic;
use App\Models\Menu;
use App\Models\Tag;

class PostController extends Controller
{
    public function show(Post $post,Menu $menu)
    {
        return view('training/search_menu')->with([
            'menus' => $menu->get(),
            'posts' => $post->get()
            ]);
    }
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
    
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['course'];
        $post->fill($input)->save();
        return redirect('/posts/'.$post->get());
    }
    public function delete_menu(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    public function update_menu(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/');
    }
    public function create_menu(Course $course,Menu $menu,Tag $tag)
    {
        return view('training/create_menu')->with([
            'tags' => $tag->get(),
            ]);
    }
}
