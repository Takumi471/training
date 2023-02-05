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
        <h1>Blog Name</h1>
        
        <div class='posts'>
            @foreach ($posts as $post)
            <div class='post'>
                <h2 class ='title'>{{$post->title}}</h2>
                <p class='body'>{{$post->body}}</p>
            </div>
            @endforeach
        </div>
        {{ Auth::user()->name }}
        
    </body>
    </x-app-layout>
</html>