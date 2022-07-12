<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoolTrains</title>
</head>
<body>
    <div>
        <h1>Treni in partenza oggi:</h1>
        <ul>
            @foreach ($trains_valid as $train)
                <li>
                    <h3>Treno CODE N: {{$train['codice_treno']}}</h3>
                    <p>Partenza: {{$train['stazione_partenza']}} <strong>alle ore:</strong> {{$train['orario_partenza']}}</p>
                    <p>Arrivo: {{$train['stazione_arrivo']}} <strong>alle ore:</strong> {{$train['orario_arrivo']}}</p>
                </li>
            @endforeach
        </ul>
    </div>
    <hr>
    <div>
        <h1>Tutte le tratte di questi giorni:</h1>
        <ul>
            @foreach ($trains as $train)
                <li>
                    <h3>Treno CODE N: {{$train['codice_treno']}}</h3>
                    <p>Partenza: {{$train['stazione_partenza']}} <strong>alle ore:</strong> {{$train['orario_partenza']}}</p>
                    <p>Arrivo: {{$train['stazione_arrivo']}} <strong>alle ore:</strong> {{$train['orario_arrivo']}}</p>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>