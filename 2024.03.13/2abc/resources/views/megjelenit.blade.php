<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/megjelenit.css')}}">
    <title>Document</title>
</head>
<body>
<nav>
        <img src="https://github.com/Reni98/VizsgaGyakorl-s/blob/main/Forr%C3%A1sf%C3%A1jlok/Feladat2/Reszponz%C3%ADv%20oldal/logo.jpeg?raw=true" class="logo" alt="">
        <a class="gomb" href="/">Főoldal</a>
        <a class="gomb" href="/hozzaad">Sorozat Hozzáad</a>
        <a class="gomb" href="/megjelenit">Sorozatok</a>
        <button class="listgomb" onclick="show()"><img src="{{url("list.svg")}}"  alt=""></button>
        <ul id="lista">
            <li><a  href="/">Főoldal</a></li>
            <li><a  href="/hozzaad">Sorozat Hozzáad</a></li>
            <li><a  href="/megjelenit">Sorozatok</a></li>
        </ul>
    </nav>
    <h1>Adatbázis tartalom</h1>
    <form class="d-flex" role="search">
        @csrf
        <input  class="form-control me-2" type="search" id="search" name="search" placeholder="Keresés név alapján">
      </form>
      <div class="container">
        <div class="row">
          <div class="col-12">
          <table class="table table-striped-columns">
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
          </div>
        </div>
      </div>
    
    <footer>
<p>Rácz Norbert</p>
</footer>
<script>
    function show() {
  var x = document.getElementById("lista");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</body>
</html>