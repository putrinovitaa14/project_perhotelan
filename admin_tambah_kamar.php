<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            padding: 0px 30px 30px 30px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            margin: 100px auto;
        }

        .konten .box {
            margin: 0 auto;
            padding: 30px 15px 10px 15px;
            width: max-content;
            border: 3px solid black;
            display: flex;
        }

        .konten .box table tr th {
            padding-right: 30px;
            padding-bottom: 20px;
        }
        input {
            padding: 2px;
            border-radius: 5px;
        }
        textarea {
            padding: 3px;
            border-radius: 5px;
        }
        button {
            border: 2px solid rgba(21, 212, 212, 0.973);
            border-radius: 5px;
            background-color: transparent;
            width: 70px;
            padding: 2px;
            outline: none;
            transition: 0.45s;
        }
        button:hover {
            transform: scale(1.2);
            border: 2px solid rgba(27, 206, 21, 0.932);
            background-color: rgba(27, 206, 21, 0.932);
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
            <form action="admin_proses_tambah.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <table>
                    <tr>
                        <th><label for="tipe">Tipe Kamar</label></th>
                        <th>
                            <select name="tipe_kamar" id="tipe">
                                <option value="Single Room">Single Room</option>
                                <option value="Twin Room">Twin Room</option>
                                <option value="Family Room">Family Room</option>
                                <option value="Deluxe Room">Deluxe Room</option>
                                <option value="Quad Room">Quad Room</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th><label for="kasur">Kasur</label></th>
                        <th><input type="number" min="1" name="kasur" required>
                        </th>
                    </tr>
                    <tr>
                        <th>Dapur</th>
                        <th>
                            <input type="radio" name="dapur" value="Ada" required id="1"><label for="1">Ada</label>
                            <input type="radio" name="dapur" value="Tidak Ada" required id="2"><label for="2">Tidak Ada</label>
                        </th>
                    </tr>
                    <tr>
                        <th>Wi-Fi</th>
                        <th>
                            <input type="radio" name="wi_fi" value="Ada" required id="1_a"><label for="1_a">Ada</label>
                            <input type="radio" name="wi_fi" value="Tidak Ada" required id="2_a"><label for="2_a">Tidak Ada</label>
                        </th>
                    </tr>
                    <tr>
                        <th><label for="info">Info</label></th>
                        <th>
                            <textarea name="info" id="info" cols="20" rows="5"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><button type="submit" name="tambah">Tambah</button></th>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
