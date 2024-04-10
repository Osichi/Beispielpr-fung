<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('kiir.css')}}">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg " style="background-color: #74B0FF;">
  <div class="container-fluid">
  <p class="navbar-brand"><img src="{{url('star.svg')}}" alt="">Festivals</p>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="/">Főoldal</a>
        <a class="nav-link" href="/fesztivalhozzaad">Fesztivál hozzáadása</a>
        <a class="nav-link" href="/fesztivalkiir">Fesztivál adatok</a>
      </div>
    </div>
  </div>
</nav>
<h1>Adatbázis tartalom</h1>
    <table class="table table-striped">
<tr>
    <th>Név</th>
    <th>Születési dátum</th>
    <th>Telefonszám</th>
    <th>Email</th>
    <th>Foglalt napok száma</th>
    <th>Összeg</th>
    <th> </th>
</tr>
@foreach($vmi as $v)
<tr>
    <td>{{$v->nev}}</td>
    <td>{{$v->szuletesi_datum}}</td>
    <td>{{$v->telefonszam}}</td>
    <td>{{$v->email}}</td>
    <td>{{$v->foglalt_napok_szama}}</td>
    <td>{{$v->osszeg}}</td>
    <td><a href="{{url('/fesztivaltorol/'.$v->id) }}" class="btn btn-primary">Törlés</a></td>
</tr>
@endforeach
    </table>
    <footer>
        <p>Készítette: Rácz Norbert &copy; 2024</p>
    </footer>
</body>
</html>