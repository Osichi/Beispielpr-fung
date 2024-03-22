<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hozzáadás</title>
</head>
<body>
<nav>
        <a href="/">Főoldal</a>
        <a href="/hozzaad">Hozzáadás</a>
        <a href="/telefonkonyv">Telefonkönyv</a>
    </nav>

    <form action="feltolt" method="post">
        @csrf
        <input type="text" placeholder="Név" name="nev" id="nev">
        <input type="text" placeholder="Telefonszám" name="telszam" id="telszam">
        <input type="text" placeholder="Lakcím" name="lakcim" id="lakcim">
        <input type="text" placeholder="Személyigazolványszám" name="szemigszam" id="szemigszam">
        <button>Feltölt</button>
    </form>
</body>
</html>