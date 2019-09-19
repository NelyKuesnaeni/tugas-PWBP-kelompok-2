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
   	margin-top: 100px;
   	text-align: 
}
.info-fanel{
  background-color: white;
  box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
  border-radius: 12px;
  margin-top: -80px;
  padding: 30px;
}
.form{
text-align: left;
color:black;
}
.info-fanell{
margin-top: 10px;
background-color: white;
box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
border-radius: 12px;
padding: 30px;
}

</style>
<title>FORM</title>
</head>
<!-- NAVBAR -->
<body>
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
          <a class="nav-link" href="tugas3.php">TUGAS3</a>
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
  	<center><h3>DATA IDENTITAS PESERTA DIDIK BARU TAHUN AJARAN 2019/2020</h3></center>
    </div>
  </div> 
  <form action="" method="post" >
  <div class="row justify-content-center">
  <div class="col-9 info-fanel">
  <div class="row">
  <div class="col-lg"> 
  <div class="card-deck mb-1 text-left">
  <div class="card mb-1 shadow-sm">
	<div class="form"><b>1. Nama Lengkap :</b> <input type="text" class="form-control" name="nama">
	</div>
	<br>

	<div class="form"><b>2. Nama Panggilan :</b> <input type="text" class="form-control"  name="Panggilan">
	</div>
	<br>

	<div class="form"><b>3. Jenis Kelamin :</b> <br>
	<input type="radio" name="jk" value="Laki-laki">Laki-laki 
	<input type="radio" name="jk" value="Perempuan">Perempuan
	</div>
	<br>

	<div class="form"><b>4. NISN :</b>
	<input type="number" class="form-control" size="50px" name="nisn">
	</div>
	<br>	

	<div class="form"><b>5. NIS :</b>
	<input type="number" class="form-control" name="nis">
	</div>
	<br>

	<div class="form"><b>6. Tempat :</b> <input type="text" class="form-control" name="tgltmpt">
		<div class="form"><b>Tanggal Lahir :</b> <input type="date" class="form-control" name="tgl">
	</div>
	</div>
	<br>

	<div class="form"><b>7. Asal Sekolah :</b>
	<input type="text" class="form-control" name="aslsekolah">
	</div>
	<br>

	<div class="form"><b>8. Nomor SKHUN :</b>
	<input type="number" class="form-control" name="skhun">
	</div>
	<br>

	<div class="form"><b>9. Tanggal diterima disekolah ini :</b>
	<input type="date" class="form-control" name="tglditerima">
	</div>
	<br>

	<div class="form"><b>10. Jika pindahan sebutkan alasan pindahan ke sekolah ini :</b> <br>
	<textarea class="form-control" placeholder="Alasan"></textarea>
	</div>
	<br>

	<div class="form"><b>11. Agama :</b><br>
	<input type="radio" name="agama"> Islam 
	<input type="radio" name="agama"> Kristen 
	<input type="radio" name="agama"> Budha 
	<input type="radio" name="agama"> Hindu <br>
	<input type="radio" name="agama"> Katolik
	<input type="radio" name="agama"> Konghucu
	<input type="radio" name="agama"> Protestan
	</div>
	<br>

	<div class="form"><b>12. Alamat :</b>
	<input type="text" class="form-control" name="alamat">
	</div>
	<br>

	<div class="form"><b>13. Tinggal Bersama :</b> <br>
	<input type="radio" name="tinggalbersama">Orang Tua
	<input type="radio" name="tinggalbersama"> Wali
	</div>
	<br>

	<div class="form"><b>14. Trasnpotasi ke sekolah :</b> <br>
	<input type="radio" name="trasnpotasi">Mobil
	<input type="radio" name="trasnpotasi">Motor
	<input type="radio" name="trasnpotasi">Angkutan Umum <br>  
	<input type="radio" name="trasnpotasi">Sepeda
	<input type="radio" name="trasnpotasi">lainnya
	</div>
	<br>

	<div class="form"><b>15. Nomor Telepon :</b>
	<input type="number" class="form-control" name="notlpn">
	</div>
	<br>

	<div class="form"><b>16. NO HP :</b>
	<input type="number" class="form-control" name="nohp">
	</div>
	<br>

	<div class="form"><b>17. Nomor KPS (Kartu Perlindungan Sosial) bagi yang memiliki :</b>
	<input type="number" class="form-control" name="kps">
	</div>
	<br>

	<div class="form"><b>18. Data Ayah kandung :</b>
	</div>
	<br>
	<br>
		<div class="form"><b>>Nama Ayah:</b> <input type="text" class="form-control" name="nmayah">
		</div>
		<br>

		<div class="form"><b>>Tempat :</b> <input type="text" class="form-control" name="lahirayah"> 
		<div class="form"><b>>Tanggal Lahir :</b> <input type="date" class="form-control" name="tglayah">
		</div>
		</div>
		<br>

		<div class="form"><b>>Pendidikan :</b> <input type="text" class="form-control" name="pendayah">
		</div>
		<br>

		<div class="form"><b>>Pekerjaan :</b> <input type="text"class="form-control"  name="pekerayah">
		</div>
		<br>

		<div class="form"><b>>penghasialan Perbulan :</b>
		<select>
			<option value="value" name="gajiayah" selected="pilih disini">Pilih Disini</option>
			<option>Rp 100.000 - <=Rp 1.000.000 </option>
			<option>Rp 1.000.000 - <=Rp 3.000.000 </option>
			<option>Rp 3.000.000 - <=Rp 5.000.000 </option>
			<option>Rp 5.000.000 - <=Rp 1.000.000 </option>
			<option>Rp 100.000 - <=Rp 10.000.000 </option>
			<option>>Rp 10.000.000 </option>
		</select>
		</div>
		<br>

	<div class="form"><b>19. Data Ibu Kandung :</b>
	<br>
	<br>
		<div class="form"><b>>Nama Ibu :</b> <input type="text" class="form-control" name="nmibu">
		</div>
		<br>
		<div class="form"><b>>Tempat :</b> <input type="text" class="form-control" name="tempibu">
		<div class="form"><b>>Tanggal Lahir :</b> <input type="date"class="form-control" name="tglibu">
		</div>
		</div>
		<br>

		<div class="form"><b>>Pendidikan :</b>
		<input type="text" class="form-control" name="pendibu">
		</div>
		<br>

		<div class="form"><b>>Pekerjaan :</b>
		<input type="text" class="form-control" name="pekeribu">
		</div>
		<br>

		<div class="form"><b>>Penghasialan perbulan:</b> 
		<select>
			<option value="value" name="gajiibu" selected="pilih disini">Pilih Disini</option>
			<option>Rp 100.000 - <=Rp 1.000.000 </option>
			<option>Rp 1.000.000 - <=Rp 3.000.000 </option>
			<option>Rp 3.000.000 - <=Rp 5.000.000 </option>
			<option>Rp 5.000.000 - <=Rp 1.000.000 </option>
			<option>Rp 100.000 - <=Rp 10.000.000 </option>
			<option>>Rp 10.000.000 </option>
		</select>
		</div>
		<br>
		<center>
		<input type="submit" name="submit" value="Daftar" class="btn btn-primary">
		<input type="reset" name="reset" value="Reset data" class="btn btn-primary">
		<br>
	</center>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</form>
<div class="row justify-content-center">
  <div class="col-9 info-fanell">
  <div class="row">
  <div class="col-lg"> 
  <div class="card-deck mb-1 text-left">
  <div class="card mb-1 shadow-sm">
  	<?php 
   if (isset($_POST['submit'])) {
    echo "<br><h5><b>Hasil Input identistas anda</h5></b> ";
    echo "<br><br>1. Nama Lengkap:".$_POST['nama']; 
    echo "<br><br>2. Nama Panggilan :".$_POST['panggilan'];
    echo "<br><br>3. Jenis Kelamin :".$_POST['JK'];
    echo "<br><br>4. NISN :".$_POST['nisn'];
    echo "<br><br>5. NIS :".$_POST['nis'];
    echo "<br><br>6. TTL :".$_POST['tgltmpt'].$_POST['tgl'];
    echo "<br><br>7. Asal Sekolah :".$_POST['aslsekolah'];
    echo "<br><br>8. Nomor SKHUN :".$_POST['skhun'];
    echo "<br><br>9. Tanggal Terima disekolah :".$_POST['tglditerima'];
    echo "<br><br>10. Alasan Pindah Kesekolah Ini :".$_POST['Alasan'];
    echo "<br><br>11. Agama :".$_POST['agama'];
    echo "<br><br>12. Alamat Rumah :".$_POST['alamat'];
    echo "<br><br>13. Tinggal Bersama :".$_POST['tinggalbersama'];
    echo "<br><br>14. Trasnpotasi Kesekolah :".$_POST['trasnpotasi'];
    echo "<br><br>15. No Telepon :".$_POST['notlpn'];
    echo "<br><br>16. No HP :".$_POST['nohp'];
    echo "<br><br>17. No KPS :".$_POST['kps'];
    echo "<br><br> 18. Data Ayah Kandung ";
    echo "<br>> Nama Ayah :".$_POS ['nmayah'];
    echo "<br>> TTL Ayah :".$_POST['tgl'];
    echo "<br>> Pendidikan :".$_POST['lahirayah'].$_POST['tglayah'];
    echo "<br>> Pekerjaan :".$_POST['pekerayah'];
    echo "<br>> Penghasialan perbulan".$_POST['gajiayah'];
    echo "<br><br>19. Data Ibu Kandung :";
    echo "<br>> Nama Ibu :".$_POST['nmibu'];
    echo "<br>> TTL Ibu :".$_POST['tempibu'].$_POST['tglibu'];
    echo "<br>> Pendidikan :".$_POST['pendibu'];;
    echo "<br>> Pekerjaan :".$_POST['pekeribu'];;
    echo "<br>> penghasialan perbulan :".$_POST['gajiibu'];;
    } ?>
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
        <ul>
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