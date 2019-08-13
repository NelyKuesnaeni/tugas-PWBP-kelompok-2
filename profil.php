<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- my css -->
<style>

  /*navbar*/
  
.nav-link {
text-transform: uppercase;
margin-right: 15px;
}
.nav-link:hover{
  border-bottom: 1px solid #000;
}

/*jumbotron*/

.jumbotron {
  background-image: url(img/bg.jpg);
  background-size: cover;
  height: 300px; 
  margin-top: -75px;
}  
h3 {
text-align: center;
}
.profil{
  text-align: center;
   margin-top: 70px;
   font-family: Lucida Calligraphy;
   font-size: 40px;
}
.info-fanel{
  background-color: white;
  box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
  border-radius: 12px;
  margin-top: -100px;
  padding: 30px;
}
img{
  padding: 10px;
  border-radius: 5px;
}
.rata{

  background-color: white;
  box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
  border-radius: 12px;
  margin-top: 30px;
  padding: 30px;
}
.footer {
  text-align: center;
  margin-top: 25px;
  height: 50px;
  background-color: #eaeaea;
  padding-top: 20px;
}
</style>

    <title>PWPB</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container"> 
          <a class="navbar-brand"><b>SOFTWARE ENGINEERING</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TUGAS1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TUGAS2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TUGAS3</a>
        </li>
      </ul>
    </div>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </div>
</nav>
     <!-- AKHIR NAVBAR -->
<!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="profil">Profil Us
    </div>
  </div>
<!-- profil kami -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-10 info-fanel">
      <div class="row">
        <div class="col-lg"> 
        <img src="img/nk.jpg" width="110px" height="110px" class="float-left" >
        <?php 
      $namaku="Nely Kuesnaeni";
      $umurku= 16;
      $tinggiku= 167;


      echo "Nama : $namaku<br>";
      echo "Usia : $umurku tahun<br>";
      echo "Tinggi : $tinggiku cm<br>";
        ?>
        <a href="#" class="btn btn-primary">Selengkapnya>></a>
        </div>

        <div class="col-lg"> 
        <img src="img/irma.jpg" width="110px" height="110px" class="float-left" >
        <?php 
      $namamu="Irma Octaviani";
      $umurmu= 15;
      $tinggimu= 155;

      echo "Nama : $namamu<br>";
      echo "Usia : $umurmu tahun<br>";
      echo "Tinggi : $tinggimu cm<br>";
        ?>
        <a href="#" class="btn btn-primary">Selengkapnya>></a>
        </div>

        <div class="col-lg"> 
        <img src="img/julian.jpg" width="110px" height="110px" class="float-left" >
        <?php 
      $namaSaya="Abdan julian kusumah";
      $umurSaya= 17;
      $tinggiSaya= 170;

      echo "Nama : $namaSaya<br>";
      echo "Usia : $umurSaya tahun<br>";
      echo "Tinggi : $tinggiSaya cm<br>";
        ?>
        <a href="#" class="btn btn-primary">Selengkapnya>></a>
        </div>
      </div>
    </div>
  </div>
  
<!-- rata rata -->
 <div class="row justify-content-center">
    <div class="col-10 rata">
      <div class="row">
        <div class="col-lg">
          <?php
     $tinggiku= 167;
     $tinggimu= 155;
     $tinggiSaya= 170;
     $rata_rata= ($tinggiku + $tinggimu + $tinggiSaya) / 3;

     echo "Rata-rata Tinggi : $rata_rata cm";
          ?>

          </div>
      </div>
    </div>
  </div>
<!-- akhir rata rata -->
</div>
<!-- akhir profil kami -->
<!-- akhir jumbotron -->
<footer>
  <div class="footer">&copy 2019 | the power of "Laaula walaquwaata illa billah"</div>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
</html>