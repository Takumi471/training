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
        <!--コースの一覧表示-->
        <div class='courses'>
            <p>マイトレーニングコース一覧</p>
            @foreach ($courses as $course)
            <div class='course'>
                <a href="/courses/{{ $course->id }}"><h2 class ='title'>{{$course->course_name}}</h2></a>
            </div>
            @endforeach
        </div>
        <!--ページ遷移のボタン作成-->
        
        <div class='statistics'>
            @foreach ($users as $user)
            <div class='statistic'>
                <a href="/statistic/{{ $user->id }}"><h2 class ='title'>統計を見る</h2></a>
            </div>
            <div class='create_menu'>
                <a href="/posts/create_menu"><h2 class ='title'>メニューを作る</h2></a>
            </div>
            <div class='search_menu'>
                <a href="/posts/"><h2 class ='title'>メニューを探す</h2></a>
            </div>
            <div class='create_course'>
                <a href="/courses/create_course"><h2 class ='title'>コースを作る</h2></a>
            </div>
            @endforeach
        </div>
            
        
    </body>
    </x-app-layout>
</html>