<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('hozzaadas')}}" method="post">
        @csrf
        <input type="text" name="cim" id="cim">
        <input type="date" name="megjelenes" id="megjelens">
        <input type="text" id="mufaj" name="mufaj">
        <input type="text" id="szereplok" name="szereplok">
        <textarea name="leiras" id="leiras" cols="30" rows="10"></textarea>
        <button>Feltölt</button>
    </form>
</body>
</html>