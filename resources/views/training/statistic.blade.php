<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Statistics</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
        </x-slot>
    <body>
        <h1>統計</h1>
        
        <div class='statistics'>
            @foreach ($statistics as $statistic)
            <div class='statistic'>
                <p>運動時間{{$statistic->time_spent}}</p>
            </div>
            @endforeach
        </div>
        {{ Auth::user()->name }}
        
    </body>
    </x-app-layout>
</html>