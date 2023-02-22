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

class CommentController extends Controller
{
    public function store(Comment $comment, CommentRequest $request)
    {
        $input = $request['comment'];
        $comment->fill($input)->save();
        return redirect('/');
    }
    
    public function create_comment(Comment $comment,Menu $menu)
    {
        return redirect('/');
    }
    public function delete_comment(Comment $comment)
    {
        $comment->delete();
        return redirect('/');
    }
    
}