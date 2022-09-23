<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Tipe Kamar</title>
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: rgb(255, 255, 255);
      background-color: rgba(142, 160, 160, 0.685);
    }

    .konten_1 {
      display: flex;
      flex-direction: column;
      padding: 10px;
      margin: 0 auto;
      margin-top: 20px;
    }

    .konten_1 .konten_2 {
      margin-bottom: 30px;
      border-radius: 15px;
      overflow: hidden;
    }

    .konten_1 .konten_2:hover {
      border: 3px solid rgba(30, 177, 17, 0.918);
    }

    .konten_2 {
      display: flex;
      border: 3px solid rgba(0, 0, 0, 0.911);
      flex-wrap: wrap;
    }

    .konten_2 img {
      width: 500px;
      height: 294px;
      border-right: 3px solid rgba(0, 0, 0, 0.911);
      transition: 0.45s;
    }

    .konten_2:hover img {
      border-right: 3px solid rgba(30, 177, 17, 0.918);
      transform: scale(1.1);
    }

    .konten_2 .box_konten {
      padding: 20px;
      width: 700px;
      margin-left: 30px;
    }

    .konten_2 .tombol button {
      padding: 3px;
      border: 2px solid transparent;
      background-color: rgba(0, 0, 0, 0.63);
      color: whitesmoke;
      border-radius: 5px;
      margin-top: 40px;
      transition: 0.45s;
    }

    .konten_2 .tombol button:hover {
      background-color: rgba(17, 212, 17, 0.87);
      border: 2px solid rgba(17, 212, 17, 0.87);
    }

    .iklan {
      display: flex;
      width: 100%;
      box-shadow: 0px 5px 3px 5px rgba(0, 0, 0, 1);
    }

    .iklan img {
      height: 700px;
    }

    .iklan .carousel {
      width: 100%;
    }

    .baris {
      display: flex;
      flex-wrap: nowrap;
      flex-direction: row;
      width: 500px;
      margin: 50px auto;
    }

    .baris select {
      outline: none;
      border: 2px solid rgba(21, 201, 214, 0.945);
      border-radius: 5px;
      padding: 2px;
      transition: 0.45s;
    }

    .baris select:focus {
      border: 2px solid rgba(64, 233, 22, 0.945);
    }

    .baris button {
      width: 70px;
      outline: none;
      border: 2px solid rgba(219, 17, 17, 0.945);
      transition: 0.45s;
      border-radius: 5px;
      margin-left: 10px;
      background-color: transparent;
    }

    .baris button:hover {
      border: 2px solid rgba(64, 233, 22, 0.945);
      background-color: rgba(64, 233, 22, 0.945);
      transform: scale(1.2);
    }

    .fasilitas {
      padding: 10px 30px 20px 30px;
      background-color: rgba(70, 112, 167, 0.856);
      box-shadow: 0px -5px 1px 10px rgba(38, 102, 145, 0.459);
    }

    .pesanan {
      margin-top: 30px;
      margin-bottom: 30px;
    }

    .pesanan button {
      padding: 3px;
      border: 2px solid rgba(21, 201, 214, 0.945);
      border-radius: 5px;
      background-color: transparent;
      transition: 0.45s;
    }

    .pesanan button:hover {
      border: 2px solid rgba(64, 233, 22, 0.945);
      background-color: rgba(64, 233, 22, 0.945);
    }
    li {
      list-style: none;
    }

    @media screen and (max-width : 1255px) {
      .konten_2 .tombol button {
        margin-top: 0;
      }

      .konten_1 {
        padding: 0 30px 0 30px;
      }

      .konten_2 .gambar {
        width: 100%;
      }

      .konten_2 img {
        width: 100%;
        height: 300px;
        border: 0px;
        border-bottom: 3px solid rgba(0, 0, 0, 0.911);
      }

      .konten_2:hover img {
        border-right: 0px;
        border-bottom: 3px solid rgba(30, 177, 17, 0.918);
      }
    }

    @media screen and (max-width : 640px) {
      .iklan img {
        height: 400px;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-primary bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">HOTEL HB</a>
      <button class="navbar-toggler hidden-lg-up fas fa-bars fa-2x" style="color: rgb(11, 23, 196);" type="button"
        data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="tamu_halaman_awal.php">Home <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tamu_halaman_hotel.php">Tipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tamu_halaman_hasil.php">Pesanan Saya</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="iklan">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="img/area-luar.jpg" width="100%" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h3>Area Luar</h3>
            <p>Memiliki Halaman Luar Yang Luas</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/Lobi-1.jpg" width="100%" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="color: black;">Lobi</h3>
            <p style="color: black;">Lobi Yang Bersih Dan Nyaman</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/Lobi-2.jpg" width="100%" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h3>Lobi</h3>
            <p>Memiliki Area Yang Luas</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="baris">
    <form action="" method="post">
      <b>Urutkan Dengan</b>
      <select name="baris" id="">
        <option value="1">Nama</option>
        <option value="2">Kasur</option>
      </select>
      <button type="submit" name="kirim" value="1">UP</button>
      <button type="submit" name="kirim" value="2">DOWN</button>
    </form>
  </div>

  <div class="konten_1">
    <?php
$sql = "SELECT * FROM perhotelan";
if (isset($_POST['kirim'])) {
  $o = $_POST['kirim'];
  $baris = $_POST['baris'];
  if ($o == 1) {
    if ($baris == 1) {
      $sql = "SELECT * FROM perhotelan ORDER BY tipe_kamar ASC";
    } else if ($baris == 2) {
      $sql = "SELECT * FROM perhotelan ORDER BY kasur ASC";
    }
  } else if ($o == 2) {
    if ($baris == 1) {
      $sql = "SELECT * FROM perhotelan ORDER BY tipe_kamar DESC";
    } else if ($baris == 2) {
      $sql = "SELECT * FROM perhotelan ORDER BY kasur DESC";
    }
  }
}
$query = mysqli_query($db, $sql);

while ($hotel = mysqli_fetch_array($query)) {
    if ($hotel['tipe_kamar'] == "Single Room") {
      $link = "img/Single-Room.jpg";
    } else if ($hotel['tipe_kamar'] == "Twin Room") {
      $link = "img/Twin-Room.jpg";
    } else if ($hotel['tipe_kamar'] == "Family Room") {
      $link = "img/Family-Room.jpg";
    } else if ($hotel['tipe_kamar'] == "Deluxe Room") {
      $link = "img/Deluxe-Room.jpg";
    } else if ($hotel['tipe_kamar'] == "Quad Room") {
      $link = "img/Quad-Room.jpg";
    }
    ?>
    <div class="konten_2">
      <div class="gambar">
        <img src="<?php echo $link; ?>" alt="ERROR 404">
      </div>
      <div class="box_konten">
        <div class="tipe_kamar">
          <h4>
            <?php echo $hotel['tipe_kamar']; ?>
          </h4>
        </div>
        <div class="j_k">
          Jumlah Kasur :
          <?php echo $hotel['kasur']; ?>
        </div>
        <div class="dp">
          Dapur :
          <?php echo $hotel['dapur']; ?>
        </div>
        <div class="wf">
          Wi-Fi :
          <?php echo $hotel['wi_fi']; ?>
        </div>
        <div class="info">
          Info :
          <?php echo $hotel['info']; ?>
        </div>
        <div class="tombol">
          <form action="tamu_pesan.php" method="post">
            <input type="hidden" name="id" value="<?php echo $hotel['id']; ?>">
            <button type="submit" name="pesan">Pesan</button>
          </form>
        </div>
      </div>
    </div>
    <?php
}
?>
    <div class="pesanan">
      <form action="tamu_halaman_hasil.php" method="post">
        <button type="submit" name="lihat">Lihat Pesanan Saya</button>
      </form>
    </div>
  </div>

  <div class="fasilitas">
    <div class="judul">
      <h4>Fasilitas</h4>
    </div>
    <div class="list">
      <ul>
        <?php
    $sql = "SELECT * FROM list";
    $query = mysqli_query($db, $sql);
    while ($list = mysqli_fetch_array($query)) {
      echo "<li>".$list['fasilitas']."</li>";
    }
?>
      </ul>
    </div>
  </div>

  <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>