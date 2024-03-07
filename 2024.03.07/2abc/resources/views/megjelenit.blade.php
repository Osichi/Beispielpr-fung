<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Cím</th>
            <th>Megjelenés</th>
            <th>Műfaj</th>
            <th>Szereplők</th>
            <th>Leírás</th>
        </tr>
        @foreach($sorozatok as $s)
        <tr>
            <td>{{$s -> cim}}</td>
            <td>{{$s -> megjelenes}}</td>
            <td>{{$s -> mufaj}}</td>
            <td>{{$s -> szereplok}}</td>
            <td>{{$s -> leiras}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>