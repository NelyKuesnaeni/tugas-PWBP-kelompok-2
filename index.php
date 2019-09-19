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
.nav-link:hover::after{
  content: '';
  display: block;
  border-bottom: 3px solid #000;
  width: 50%;
  margin: auto;
  padding-bottom:5px;
  margin-bottom: -8px; 
}

/*jumbotron*/

.carousel-inner {
  background-image: url(img/bg.jpg);
  background-size: cover;
  height: 700px; 
  margin-top: -75px;
}
.navbar{
	color: black;
	padding-bottom: 20px;
}
.display-4 {
  text-align: center;
  margin-top: 150px;
  }
/*akhir jumnotron*/

/*slider*/
.carousel-item{
  height: 680px;
  margin-top: -10px;
}
.carousel-item .display-4{
  margin-top: -380px;
  color: black;
}
h3{
  color: black;
}
p{
  color: black;
}
.footer{
  text-align: center;
  margin-top: 100px;
  height: 50px;
  background-color: #eaeaea;
  padding-top: 10px;

}
</style>

    <title>PWPB</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-ligt bg-transparent">
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
          <a class="nav-link" href="profil.php">TUGAS1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tugas2.php">TUGAS2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tugas3.php">TUGAS3</a>
        </li>
      </ul>`
    </div>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </div>
</nav>
     <!-- AKHIR NAVBAR -->
<!-- jumbotron -->
<!-- <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">TUGAS PWPB</h1>
        <centser>
          <h3>Selamat Datang Di Website Kelompok 2</h3>
          <p>X RPL 2 | SMK Adi Sanggoro</p>
        </center>
</div> -->
<!-- akhir jumbotron -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

    	 <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-ligt bg-transparent">
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
          <a class="nav-link" href="profil.php">TUGAS1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tugas2.php">TUGAS2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TUGAS3</a>
        </li>
      </ul>`
    </div>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </div>
</nav>
      <div class="carousel-item active">
        <img src="img/bg.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
             <h1 class="display-4">TUGAS PWPB</h1>
          <center>
            <h3>Selamat Datang Di Website Kelompok 2</h3>
            <p>X RPL 2 | SMK Adi Sanggoro</p>
          </center>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide3.jpg" class="d-block w-100" alt="..." height="710">
      </div>
      <div class="carousel-item">
        <img src="img/bb.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-6 col-md">
        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2019 | the power of "Laaula walaquwaata illa billah"</small>
      </div>
      <div class="col-3 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">CSS</a></li>
          <li><a class="text-muted" href="#">PHP</a></li>
          <li><a class="text-muted" href="#">HTML</a></li>
          <li><a class="text-muted" href="#">Gitbub</a></li>
        </ul>
      </div>
      <div class="col-3 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team Work</a></li>
          <li><a class="text-muted" href="#">Contact Us</a></li>
          <li><a class="text-muted" href="#">Profil Us</a></li>
          <li><a class="text-muted" href="#">Social Media Us</a></li>
        </ul>
      </div>
    </div>
  </footer>
<!-- akhir jumbotron -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>