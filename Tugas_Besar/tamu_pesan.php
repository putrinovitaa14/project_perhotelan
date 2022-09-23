<?php
include "config.php";

if (!isset($_POST['id'])) {
    header('Location: tamu_halaman_hotel.php');
}

$id = $_POST['id'];
$sql = "SELECT * FROM perhotelan WHERE id=$id";
$query = mysqli_query($db, $sql);
$pesan = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}

$no = random_int(9999999999, 99999999999);

$sql_1 = "SELECT * FROM pesan";
$query_1 = mysqli_query($db, $sql_1);

$pemilihan = 0;

while ($pesan_1 = mysqli_fetch_array($query_1)) {
    if ($pesan_1['tipe_kamar'] != $pesan['tipe_kamar']) {
        $pemilihan = 1;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
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

        .box {
            padding: 30px 50px 30px 50px;
        }

        .pesanan {
            margin: 0 auto;
            margin-top: 100px;
            border: 3px solid black;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            padding: 10px;
            border-radius: 15px;
        }

        .pesanan div {
            margin-bottom: 15px;
        }

        .pesanan .no {
            margin-bottom: 30px;
        }

        .pesanan .tombol {
            justify-content: center;
            display: flex;
            flex-direction: row;
        }

        .pesanan form {
            margin: 0 20px 0 20px;
        }

        .pesanan form button {
            padding: 3px;
            width: 80px;
            border-radius: 5px;
            border: 2px solid rgba(15, 217, 224, 0.959);
            background-color: transparent;
            transition: 0.45s;
        }

        .pesanan form .t_1:hover {
            background-color: rgba(24, 202, 24, 0.952);
            border: 2px solid rgba(24, 202, 24, 0.952);
        }

        .pesanan form .t_2:hover {
            background-color: rgba(216, 16, 16, 0.952);
            border: 2px solid rgba(216, 16, 16, 0.952);
        }

        .pesanan form input {
            padding: 2px;
            border-radius: 5px;
        }
        .pesanan form textarea {
            padding: 2px;
            border-radius: 5px;
        }

        .pesananan .tombol .input {
            display: flex;

        }
        .pesanan table tr td {
            padding-right: 20px;
            padding-bottom: 20px;
        }
        .box_1 {
            width: 100%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
        .box_1 .pemesanan_1 {
            margin: 0 auto;
            margin-top: 100px;
            text-align: center;
            border: 3px solid black;
            padding: 40px 50px 10px 50px;
        }
        .box_1 .pemesanan_1 div {
            margin-bottom: 30px;
        }
        .box_1 .pemesanan_1 .tombol button {
            padding: 2px;
            border: 2px solid rgba(15, 217, 224, 0.959);
            border-radius: 5px;
            background-color: transparent;
            width: 70px;
            transition: 0.45s;
        }
        .box_1 .pemesanan_1 .tombol button:hover {
            transform: scale(1.2);
            border: 2px solid rgba(216, 16, 16, 0.952);
            background-color: rgba(216, 16, 16, 0.952);
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
                        <a class="nav-link" href="tamu_halaman_awal.php">Home <span
                                class="visually-hidden">(current)</span></a>
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
<?php
if ($pemilihan == 1) {
    ?>
    <div class="box_1">
        <div class="pemesanan_1">
            <div class="judul">
                <h4>Anda Tidak Bisa Memesan Tipe Kamar Yang Berbeda</h4>
            </div>
            <div class="tombol">
                <form action="tamu_halaman_hotel.php">
                    <button name="kembali" type="submit">Kembali</button>
                </form>
            </div>
        </div>
    </div>
<?php
} else {
    ?>
    <div class="box">
        <div class="pesanan">
            <div class="tombol" style="justify-content: left;">
                <form action="tamu_halaman_hotel.php">
                    <button type="submit" class="t_2">Batal</button>
                </form>
            </div>
            <div class="no">
                <h3 style="text-align: center;">No Pemesanan :
                    <?php echo $no; ?>
                    </h4>
            </div>
            <div class="tipe">
                <h4>
                    <?php echo $pesan['tipe_kamar']; ?>
                </h4>
            </div>
            <div class="kasur">
                Kasur :
                <?php echo $pesan['kasur']; ?>
            </div>
            <div class="dapur">
                Dapur :
                <?php echo $pesan['dapur']; ?>
            </div>
            <div class="wi_fi">
                Wi-Fi :
                <?php echo $pesan['wi_fi']; ?>
            </div>
            <div class="info">
                Info Kamar :
                <?php echo $pesan['info'] ?>
            </div>

            <div class="input">
                <form action="tamu_proses_pesan.php" method="post">
                    <table>
                        <tr>
                            <th colspan="2" style="padding-bottom: 30px; padding-top: 10px;">Isi Formulir Berikut</th>
                        </tr>
                        <tr>
                            <td><label for="nama">Nama</label></td>
                            <td><input type="text" name="nama" id="nama" required></td>
                        </tr>
                        <tr>
                            <td><label for="no_t">No. Telepon</label></td>
                            <td><input type="number" name="no_t" id="no_t" required></td>
                        </tr>
                        <tr>
                            <td><label for="alamat">Alamat</label></td>
                            <td><textarea name="alamat" id="alamat" cols="20" rows="3" required></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="hidden" name="no" value="<?php echo $no; ?>">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="hidden" name="tipe_kamar" value="<?php echo $pesan['tipe_kamar']; ?>">
                                <input type="hidden" name="kasur" value="<?php echo $pesan['kasur']; ?>">
                                <input type="hidden" name="dapur" value="<?php echo $pesan['dapur']; ?>">
                                <input type="hidden" name="wi_fi" value="<?php echo $pesan['wi_fi']; ?>">
                                <input type="hidden" name="info" value="<?php echo $pesan['info']; ?>">
                                <button type="submit" name="pesan_1" class="t_1">Pesan</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>

    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>