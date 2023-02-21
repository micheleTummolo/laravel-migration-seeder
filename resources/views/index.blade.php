<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-3">
            <!-- @foreach($trains as $train)
            <div class="col">
                <h1>{{$train['orario_di_partenza']}}</h1>
            </div>
            @endforeach -->
            <div class="col-12">
                <table class="table table-striped">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="text-center">Azienda</th>
                            <th scope="col" class="text-center">Stazione di partenza</th>
                            <th scope="col" class="text-center">Stazione di arrivo</th>
                            <th scope="col" class="text-center">Orario di partenza</th>
                            <th scope="col" class="text-center">Orario di arrivo</th>
                            <th scope="col" class="text-center">Codice treno</th>
                            <th scope="col" class="text-center">Numero carrozze</th>
                            <th scope="col" class="text-center">Stato</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($trains as $train)
                        <tr>
                            <td scope="row" class="text-center text-light">{{$train['azienda']}}</td>
                            <td class="text-center text-light">{{$train['stazione_di_partenza']}}</td>
                            <td class="text-center text-light">{{$train['stazione_di_arrivo']}}</td>
                            <td class="text-center text-light">{{$train['orario_di_partenza']}}</td>
                            <td class="text-center text-light">{{$train['orario_di_arrivo']}}</td>
                            <td class="text-center text-light">{{$train['codice_treno']}}</td>
                            <td class="text-center text-light">{{$train['numero_carrozze']}}</td>
                            <td class="text-center text-light">{{$train['stato']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>