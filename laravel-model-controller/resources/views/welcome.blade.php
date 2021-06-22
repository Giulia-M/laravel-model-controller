<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    @foreach($movies as $movie)
    
    
        <div>
        
            <h1>Titolo: {{$movie->title}}</h1>
            <p>Titolo originale: {{$movie->original_title}}</p>
            <p>Nazionalità: {{$movie->nationality}}</p>
            <p>Data: {{$movie->date}}</p>
            <p>Voto: {{$movie->vote}}</p>
        </div>
   


    @endforeach
</div>
  
</body>
</html>