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
        <h1>トレーニングコースを作成する</h1>
        <form action="/courses" method="POST">
            @csrf
            <div class="title">
                <h2>コース名</h2>
                <input type="text" name="course[course_name]" placeholder="コース名を記入してください。" value="{{ old('course.course_name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('course.course_name') }}</p>
            </div>
            <h2>追加するメニューを選択</h2>
        <div class='menus'>
            @foreach ($menus as $menu)
            <div class='menu'>
                <a href="/menus/{{ $menu->id }}"><h2 class ='title'>{{$menu->name}}</h2></a>
            </div>
            @endforeach
        </div
            <input type="submit" value="保存"/>
        </form>
        
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
    </x-app-layout>
</html>