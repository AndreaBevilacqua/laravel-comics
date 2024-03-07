<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} | Dc Comics</title>

    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <section class="container">
            <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo">
            <div id="navbar">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{url('/')}}">Characters</a></li>
                    <li><a href="{{route('comics')}}">Comics</a></li>
                    <li><a href="{{url('/')}}">TV</a></li>
                    <li><a href="{{url('/')}}">Movies</a></li>
                    <li><a href="{{url('/')}}">Games</a></li>
                    <li><a href="{{url('/')}}">Collectibles</a></li>
                    <li><a href="{{url('/')}}">Videos</a></li>
                    <li><a href="{{url('/')}}">Fans</a></li>
                    <li><a href="{{url('/')}}">News</a></li>
                    <li><a href="{{url('/')}}">Shop</a></li>
                </ul>
            </div>
        </section>
    </header>
</body>
</html>
