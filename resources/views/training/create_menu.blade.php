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
        <h1>トレーニングメニューを投稿する</h1>
        
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>投稿タイトル</h2>
                <input type="text" name="post[menu_title]" placeholder="投稿タイトルを記入してください。" value="{{ old('post.menu_title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.menu_title') }}</p>
            </div>
            <div class="title">
                <h2>メニュー名</h2>
                <input type="text" name="post[menu_name]" placeholder="メニュー名を記入してください。" value="{{ old('post.menu_title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.menu_name') }}</p>
            </div>
            <div class="body">
                <h2>トレーニング内容</h2>
                <textarea name="post[menu_body]" placeholder="トレーニング内容を記入してください。">{{ old('post.menu_body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.menu_body') }}</p>
            </div>
            <div class="time">
                <h2>所要時間</h2>
                <textarea name="post[menu_time_spent]" placeholder="所要時間を記入してください。">{{ old('post.menu_time_spent') }}</textarea>
                <p class="time__error" style="color:red">{{ $errors->first('post.menu_time_spent') }}</p>
            </div>
            <div class="tag">
                <h2>タグを選択</h2>
                <select name="post[tag_id]">
                  @foreach($tags as $tag)
                     <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                  @endforeach
                </select>
            </div>
            <input type="submit" value="メニューを投稿"/>
        </form>
            
        
        <div class="back">[<a href="/">back</a>]</div>
    </body>
    </x-app-layout>
</html>