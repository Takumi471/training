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
            <p>マイトレーニングコース</p>
            @foreach ($posts as $post)
            <div class='post'>
                <a href="/posts/{{ $post->id }}"><h2 class ='title'>{{$post->menu_name}}</h2></a>
            </div>
            @endforeach
        </div>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
    </x-app-layout>
</html>