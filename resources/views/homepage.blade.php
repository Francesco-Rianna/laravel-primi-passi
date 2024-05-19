<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello laravel</title>
</head>
<body>
    <h1>
        Hello word
    </h1>

    <h3>Ecco alcune squadre più forti della storia</h3>

    <div>
        <ul>
            @foreach ($bestTeams as $team)
            <li> {{$team}}</li>
                
            @endforeach
            
        </ul>
    </div>
</body>
</html>