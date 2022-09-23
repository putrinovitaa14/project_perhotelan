<?php
include "config.php";

$sql = "SELECT * FROM pesan";
$query = mysqli_query($db, $sql);
$a = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti</title>
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

        .konten {
            padding: 30px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            margin: 100px auto;
        }

        .konten .box {
            border: 3px solid black;
            width: fit-content;
            margin: 30px auto;
            padding: 30px;
            display: flex;
        }

        .box table tr th {
            text-align: left;
            padding-right: 20px;
            padding-bottom: 20px;
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
                        <a class="nav-link" href="admin_halaman_awal.php">Home <span
                                class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_halaman_hotel.php">Tipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_data_reservasi.php">Data Reservasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="konten">
        <?php
while ($pesan = mysqli_fetch_array($query)) {
    $a++;
    ?>
        <div class="box">
            <table>
                <tr>
                    <th>Pesanan No
                        <?php echo $a; ?>
                    </th>
                </tr>
                <tr>
                    <th>No Pemesanan</th>
                    <th>:</th>
                    <th>
                        <?php echo $pesan['nomor']; ?>
                    </th>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <th>
                        <?php echo $pesan['nama']; ?>
                    </th>
                </tr>
                <tr>
                    <th>No Telepon</th>
                    <th>:</th>
                    <th>
                        <?php echo $pesan['no_t']; ?>
                    </th>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <th>
                        <?php echo $pesan['alamat']; ?>
                    </th>
                </tr>
                <tr>
                    <th>Tipe Kamar</th>
                    <th>:</th>
                    <th>
                        <?php echo $pesan['tipe_kamar']; ?>
                    </th>
                </tr>
                <tr>
                    <th>Kasur</th>
                    <th>:</th>
                    <th>
                        <?php echo $pesan['kasur']; ?>
                    </th>
                </tr>
                <tr>
                    <th>Dapur</th>
                    <th>:</th>
                    <th>
                        <?php echo $pesan['dapur']; ?>
                    </th>
                </tr>
                <tr>
                    <th>Wi Fi</th>
                    <th>:</th>
                    <th>
                        <?php echo $pesan['wi_fi']; ?>
                    </th>
                </tr>
                <tr>
                    <th>Info</th>
                    <th>:</th>
                    <th>
                        <?php echo $pesan['info']; ?>
                    </th>
                </tr>
            </table>
        </div>
        <?php
}
?>
    </div>

    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>