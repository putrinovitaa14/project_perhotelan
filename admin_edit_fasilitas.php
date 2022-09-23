<?php
include "config.php";

$sql = "SELECT * FROM list"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Fasilitas</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            padding-top: 180px;
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(255, 255, 255);
            background-color: rgba(142, 160, 160, 0.685);

        }
        .konten {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            margin: 0 auto;
            padding: 0px 50px 0px 50px;
        }
        .box {
            margin: 0 auto;
            display: flex;
        }
        .box table tr td {
            padding-right: 20px;
            padding-bottom: 15px;
        }
        .box table tr td input {
            border-radius: 5px;
            padding: 2px;
            border: 2px solid rgba(21, 202, 226, 0.952);
            outline: none;
            transition: 0.45s;
        }
        .box table tr td input:focus {
            border: 2px solid rgba(25, 223, 19, 0.952);
        }
        .box table tr td button {
            width: 70px;
            padding: 2px;
            outline: none;
            border-radius: 5px;
            border: 2px solid rgba(16, 195, 207, 0.952);
            background-color: transparent;
            transition: 0.45s;
        }
        .box table tr td button:hover {
            transform: scale(1.2);
            background-color: rgba(25, 223, 19, 0.952);
            border: 2px solid rgba(25, 223, 19, 0.952);
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
        <div class="box">
            <form action="admin_edit_proses_fasilitas.php" method="post" style="text-align: center;">
            <table>
                <tr>
                    <th><h4>Fasilitas</h4></th>
                </tr>
<?php
$query = mysqli_query($db, $sql);
$a = 0;
while ($daftar = mysqli_fetch_array($query)) {
    $a++;
    ?>
                <tr>
                    <td><label for="<?php echo $a; ?>">Fasilitas <?php echo $a; ?>: </label></td>
                    <td><input type="text" name="<?php echo $a; ?>" id="<?php echo $a; ?>" value="<?php echo $daftar['fasilitas']; ?>" required></td>
                </tr>
<?php
}
?>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="p" value="<?php echo $a; ?>">
                        <button name="edit" type="submit">Edit</button>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>


    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
