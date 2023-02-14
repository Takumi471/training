<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>メニュー詳細</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
        </x-slot>
    <body>
        @foreach ($menus as $menu)
        <h1 class="title">
            {{ $menu->name }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>所要時間</h3>
                <p>{{ $menu->spent_time }}</p>    
            </div>
        </div>
        @endforeach
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
    </body>
        </x-app-layout>
</html>