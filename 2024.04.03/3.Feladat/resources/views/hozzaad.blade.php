<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url("hozzaad.css")}}">
   
    <title>Hozzáadás</title>
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
            <div class="form-div">
    <p id="datetime"></p>
        <h1>Sorozat hozzáadása az adatbázishoz</h1>
    <form action="hozzad" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Kategória</label>
        <input type="text" class="form-control" placeholder="Kategória" name="kategoria" id="kategoria">
    </div>
    <div class="mb-3">
        <label for="">Cím</label>
        <input type="text" class="form-control" placeholder="Cim" name="cim" id="cim">
    </div>
    <div class="mb-3">
        <label for="">Ár</label>
        <input type="number" class="form-control"  name="ar" id="ar">
    </div>
    <div class="mb-3">
        <label for="">Megjelenés</label>
        <input type="date" class="form-control" name="megjelenes" id="megjelenes">
    </div>
        
        
        
        
        <button class="btn btn-primary">Feltölt</button>
    </form>
</div>
            </div>
        </div>
    </div>
    
    <script>
        var now = new Date();
  var datetime = now.toLocaleString();
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