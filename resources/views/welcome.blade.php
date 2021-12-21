<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="resources/views/stilus.css"> -->

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: black;
            color: white;
            min-height: 100vh;
        }

        .tarolo {
            display: flex;
            width: 60%;
            height: 50%;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }

        #mentes {
            width: 60px;
        }

        #list {
            background-color: lightgray;
        }
        .tevekenyseg-tarolo{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            width: 30%;
        }
        .kesz{
            width: 50px;
            height: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body class="antialiased">
    <div class="tarolo">
        <h1>Tevékenység lista</h1><br>
        <p>Tevékenységek:</p>
        @foreach($ListItem as $listItem)
        <div class="tevekenyseg-tarolo">
            <p>{{$listItem->leiras}}</p>
            <form method="post" action="{{route('tevekenysegKesz',$listItem->id)}}">{{csrf_field()}}
                <input type="submit" value="Kész" class="kesz">
            </form>
        </div>
        @endforeach
        <form method="post" action="{{route('saveItem')}}" accept-charset="UTF-8">{{csrf_field()}}
            <label for="list">Új tevékenység</label><br>
            <input type="text" name="list" id="list"><br>
            <input type="submit" value="Mentés" id="mentes">
        </form>
    </div>
</body>

</html>