<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.menu_name' => 'required|string|max:100',
            'post.menu_title' => 'required|string|max:100',
            'post.menu_time_spent' => 'required|string|max:100',
        ];
    }
}