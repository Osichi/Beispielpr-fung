<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/home.css')}}">
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
    <div class="container">
      <div class="row">
        <div class="col-5">

        </div>
        <div class="col-2">
        <div class="szoveg">
        
        <h1>Sorozatok egy helyen!</h1>
        <p>Nézzen körül, hatalmas kínálatunkban</p>
</div>
        </div>
        <div class="col-5">

        </div>
      </div>
    </div>
    
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