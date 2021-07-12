<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   
    </head>

    <body>
        <header>
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                  <span class="navbar-brand mb-0 h1">Navbar</span>
                </div>
            </nav>
        </header>

        <main>
            <div class="p-5 d-flex flex-wrap justify-content-center">
                @foreach ($movies as $movie)
                <div class="card col-3 m-2">
                    <div class="card-body">
                        <h3 class="card-text">{{$movie->title}}</h3>
                        <h3 class="card-text">{{$movie->original_title}}</h3>
                        <h3 class="card-text">{{$movie->nationality}}</h3>
                        <h3 class="card-text">{{$movie->date}}</h3>
                        <h3 class="card-text">{{$movie->vote}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </main>
        
        
        
    </body>
</html>
