<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
{
    public function rules()
    {
        return [
            'menu.name' => 'required|string|max:100',
            'menu.title' => 'required|string|max:100',
            'menu.spent_time' => 'required|string|max:100',
        ];
    }
}