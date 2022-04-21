<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Controller/Model</title>
    <link rel="stylesheet" href="{{'css/app.css'}}">
</head>
<body>
    <section class="container">
        <div class="card-wrapper">
            @foreach ($movies as $movie)

            <div class="card">
                
                <h4>{{$movie['title']}}</h4>
                <p>{{$movie['original_title']}}</p>
                <p>{{$movie['date']}}</p>
                <p>{{$movie['vote']}}</p>
            </div>
        
    @endforeach
        </div>
    </section>
    
</body>
</html>