<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    public function rules()
    {
        return [
            'course.course_name' => 'required|string|max:100',
            'course.sum_spent_time' => 'required|string|max:100',
        ];
    }
}