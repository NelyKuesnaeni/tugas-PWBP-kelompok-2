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
  width: 50%  margin: auto;
  padding-bottom:5px;
  margin-bottom: -8px; 
}

/*jumbotron*/

.jumbotron {
  background-image: url(img/bg.jpg);
  background-size: cover;
  height: 300px; 
  margin-top: -75px;
} 
.judul{
	text-align: center;
   margin-top: 50px;
   font-family: Lucida Calligraphy;
}
.info-fanel{
  background-color: white;
  box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
  border-radius: 12px;
  margin-top: -80px;
  padding: 30px;
}
.card-header .my-0{
  font-family: 
}
.card-body img{
  width: 150px;
}
.card-body.btn{
  margin-top: 100px;
}

.btn{
  margin-top: 20px;
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
          <a class="nav-link" href="profil.php">TUGAS1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tugas2.php">TUGAS2</a>
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
  	<div class="judul">
  	<center><h2>TUGAS KE-2</h2>
  	<p>Kumpulan Rumus Bangun Ruang</p>
  		<h4>AYO BELAJAR BERSAMA</h4>
 	 </center>
 	 </div>
    </div> 
       <?php
       $gambar1= "img/kubus.gif";
       $LKubus= "6 x s²";
       $VKubus= "s x s x s ";

       $gambar2="img/balok.gif";
       $LBalok= "2 × (p.l + p.t +l.t)";
       $VBalok= "p × l × t";
       

       $gambar3= "img/tabung.gif";
       $LTabung= "PHI x r2";
       $VTabung= "PHI x r2 x t";

       $gambar4= "img/prisma.gif";
       $LPrisma= "(2 x alas ) + (K alas x tinggi)";
       $VPrisma= "alas x tinggi";

       $gambar5= "img/bola.gif";
       $LBola= "4/3 x PHI x r3";
       $VBola= "4 x PHI x r2";

       $gambar6= "img/kerucut.gif";
       $LKerucut= "PHI x r x (r + s)";
       $VKerucut= "PHI x r2 + PHI x r x s";
       ?>
       <div class="container">
        <div class="row justify-content-center">
        <div class="col-10 info-fanel">
        <div class="row">
        <div class="col-lg"> 
            <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">1. Kubus</h4>
      </div>
      <div class="card-body" >
        <?php
        echo "<img src= $gambar1><br><br><br>";
        echo "Rumus :<br>";
        echo "Luas Permukaan : $LKubus<br>";
        echo "Volume : $VKubus <br><br>";
        ?>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
      </div>
    </div>
     <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">2. Balok</h4>
      </div>
      <div class="card-body">
       <?php
        echo "<img src= $gambar2><br>";
        echo "Rumus :<br>";
        echo "Luas Permukaan : $LBalok<br>";
        echo "Volume : $VBalok <br>";
        ?>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
      </div>
    </div>
     <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">3. Tabung </h4>
      </div>
      <div class="card-body">
        <?php
        echo "<img src= $gambar3><br><br>";
        echo "Rumus :<br>";
        echo "Luas Permukaan : $LTabung <br>";
        echo "Volume : $VTabung <br><br>";
        ?>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
      </div>
    </div>
    <div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">4. Prisma</h4>
      </div>
      <div class="card-body">
         <?php
        echo "<img src= $gambar4><br><br><br>";
        echo "Rumus :<br>";
        echo "Luas Permukaan : $LPrisma<br>";
        echo "Volume : $VPrisma<br>";
        ?>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
      </div>
    </div>
     <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">5. Bola</h4>
      </div>
      <div class="card-body">
         <?php
        echo "<img src= $gambar5><br>";
        echo "Rumus :<br>";
        echo "Luas Permukaan : $LBola<br>";
        echo "Volume : $VBola <br>";
        ?>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
      </div>
    </div>
     <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">6. Kerucut</h4>
      </div>
      <div class="card-body">
         <?php
        echo "<img src= $gambar6><br><br><br><br>";
        echo "Rumus :<br>";
        echo "Luas Permukaan : $LKerucut<br>";
        echo "Volume : $VKerucut <br>";
        ?>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
      </div>
    </div>
         </div>
         </div>
         </div>
         </div>
        </div>
</div>
</div>
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2019 | the power of "Laaula walaquwaata illa billah"</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">CSS</a></li>
          <li><a class="text-muted" href="#">PHP</a></li>
          <li><a class="text-muted" href="#">HTML</a></li>
          <li><a class="text-muted" href="#">Gitbub</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>