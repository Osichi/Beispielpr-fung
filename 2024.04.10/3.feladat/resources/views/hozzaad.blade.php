<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('hozzaad.css')}}">
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
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="form-div">
        <h1>Adja hozzá a fesztivál jegy vásárlásához adatait</h1>
    <form action="feltolt" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Név</label>
        <input type="text" class="form-control" placeholder="Adja meg a nevét" name="nev" id="nev">
    </div>
    <div class="mb-3">
        <label for="">Születési dátum</label>
        <input type="date" class="form-control" name="szuletes" id="szuletes">
    </div>
    <div class="mb-3">
        <label for="">Telefonszám</label>
        <input type="text" class="form-control" placeholder="Adja meg a telefonszámát"  name="telefonszam" id="telefonszam">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input type="email" class="form-control" placeholder="Adja meg az emailjét" name="email" id="email">
    </div>
    <div class="mb-3">
        <label for="">Foglalt napok száma</label>
        <input type="number" class="form-control" placeholder="Adja meg a foglalt napok számát" name="napok" id="napok">
    </div>
    <div class="mb-3">
        <label for="">Összeg</label>
        <input type="number" class="form-control" placeholder="Adja meg az összeget" name="osszeg" id="osszeg">
    </div>
        <button class="gomb">Feltölt</button>
    </form>
</div>
            </div>
        </div>
    </div>
    <footer>
        <p>Készítette: Rácz Norbert &copy; 2024</p>
    </footer>
</body>
</html>