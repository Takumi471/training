<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
        </x-slot>
    <body>
        <h1>とれとも</h1>
        
        <div class='courses'>
            @foreach ($courses as $course)
            <div class='course'>
                <a href="/training/{{ $course->id }}"><h2 class ='title'>{{$course->course_name}}</h2></a>
                <p class='spent_time'>{{$course->sum_spent_time}}</p>
            </div>
            @endforeach
        </div>
        {{ Auth::user()->name }}
        
        <div class='statistics'>
            @foreach ($users as $user)
            <div class='statistic'>
                <a href="/training/{{ $user->id }}/statistic"><h2 class ='title'>{{$user->name}}の統計</h2></a>
            </div>
            @endforeach
        </div>
            
        
    </body>
    </x-app-layout>
</html>