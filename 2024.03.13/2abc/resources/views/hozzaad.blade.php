<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/hozzaad.css')}}">
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
    <div class="form-div">
    <p id="datetime"></p>
        <h1>Sorozat hozzáadása az adatbázishoz</h1>
        <form action="{{route('hozzaadas')}}" method="post">
            @csrf
            <div class="mb-3">
    
                <input type="text" class="form-control" name="cim" id="cim">
            </div>
            <div class="mb-3">
    
                <input type="date" class="form-control" name="megjelenes" id="megjelens">
            </div>
            <div class="mb-3">
    
                <input type="text" class="form-control" id="mufaj" name="mufaj">
            </div>
            <div class="mb-3">
    
                <input type="text" class="form-control" id="szereplok" name="szereplok">
            </div>
            <div class="mb-3">
    
                <textarea name="leiras" class="form-control" id="leiras" cols="30" rows="10"></textarea>
            </div>
            <button class="btn btn-danger">Feltölt</button>
        </form>
    </div>
    <script>
  // Get current date and time
  var now = new Date();
  var datetime = now.toLocaleString();

  // Insert date and time into HTML
  document.getElementById("datetime").innerHTML = datetime;
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
<p>Rácz Norbert</p>
</footer>
</body>
</html>