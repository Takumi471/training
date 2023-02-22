<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'comment.comment_name' => 'required|string|max:100',
            'comment.comment_body' => 'required|string|max:100',
        ];
    }
}