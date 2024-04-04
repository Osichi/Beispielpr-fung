<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url("megjelenit.css")}}">
   
    <title>Kiírás</title>
</head>
<body>
<nav>
        <img src="https://github.com/Osichi/Beispielpruefung/blob/main/2024.04.03/logo.jpg?raw=true" class="logo" alt="">
        <a class="gomb" href="/">Főoldal</a>
        <a class="gomb" href="/jatekKiir">Játék infók</a>
        <a class="gomb" href="/jatekHozzad">Játék hozzáadása</a>
        <button class="listgomb" onclick="show()"><img src="{{url("list.svg")}}"  alt=""></button>
        <ul id="lista">
            <li><a  href="/">Főoldal</a></li>
            <li><a href="/jatekKiir">Játék infók</a></li>
            <li><a href="/jatekHozzad">Játék hozzáadása</a></li>
        </ul>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-12">
    <h1>Játék információ</h1>
    <form class="d-flex kereses" role="search">
        @csrf
        <input  class="form-control me-2" type="search" id="search" name="search" placeholder="Keresés név alapján">
      </form>
          <table class="table table-striped-columns">
        <tr>
            <th>Kategória</th>
            <th>Cím</th>
            <th>Ár</th>
            <th>Megjelenés</th>
        </tr>
        @foreach($vmi as $t)
        <tr>
            <td>{{$t -> kategoria}}</td>
            <td>{{$t -> cim}}</td>
            <td>{{$t -> ar}}</td>
            <td>{{$t -> megjelenes}}</td>
        </tr>
        @endforeach
    </table>
    </div>
        </div>
      </div>
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
<footer>
  <div class="container">
    <div class="row">
      <div class="col-5">

      </div>
      <div class="col-2">
      <p class="footer">Rácz Norbert</p>

      </div>
      <div class="col-5">

      </div>
    </div>
  </div>
</footer>
</body>
</html>