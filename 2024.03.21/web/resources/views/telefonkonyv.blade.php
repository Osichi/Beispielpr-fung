<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefonkönyv</title>
</head>
<body>
<nav>
        <a href="/">Főoldal</a>
        <a href="/hozzaad">Hozzáadás</a>
        <a href="/telefonkonyv">Telefonkönyv</a>
    </nav>
    <table>
        <tr>
<th>Név</th>
<th>Telefonszám</th>
<th>Lakcím</th>
<th>Személyigazolványszám</th>
        </tr>
        @foreach($tel as $t)
        <tr>
<td>{{$t -> nev}}</td>
<td>{{$t -> telszam}}</td>
<td>{{$t -> lakcim}}</td>
<td>{{$t -> szemigszam}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>