<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>メニュー作成</title>
    </head>
        </x-slot>
    <body>
        <h1>トレーニングメニュー一覧</h1>
        <!--コースの一覧表示-->
        <div class='posts'>
            @foreach ($posts as $post)
            <div class='post'>
                <a href="/menus/{{ $post->id }}"><h2 class ='title'>{{$post->menu_name}}投稿日:{{$post->created_at}}</h2></a>
            </div>
            @endforeach
        </div>
        <div class='create_course'>
                <a href="/posts/create_menu"><h2 class ='title'>わたしもコースを投稿する</h2></a>
            </div>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
    </x-app-layout>
</html>