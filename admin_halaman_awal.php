<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif ;
        }

        body {
            padding: 30px;
            background-image: url(img/area-luar.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .konten_1 {
            /* border: 3px solid black; */
            width: fit-content;
            margin: 60px auto;
            margin-top: 200px;
            padding: 20px;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            text-align: center;
            background-color: rgba(202, 207, 201, 0.671);
            box-shadow: 0px 5px 5px 5px rgba(0, 0, 0, 0.637);
        }
        .konten_1 .judul {
            margin: 20px auto 25px auto;
            
        }
        .konten_1 .masuk {
            margin: 45px auto 30px auto;
        }
        .konten_1 .masuk button {
            border-radius: 5px;
            border: 3px solid rgba(43, 162, 167, 0.856);
            padding: 5px;
            background: transparent;
            width: 80px;
            transition: 0.45s;
        }
        .konten_1 .masuk button:hover {
            transform: scale(1.2);
            background-color: rgba(42, 221, 18, 0.884);
            border: 3px solid rgba(42, 221, 18, 0.884);
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

    <div class="konten_1">
        <div class="judul">
            <h2>Selamat Datang Di Hotel Hebat Berencana</h2>
        </div>
        <div class="masuk">
            <form action="admin_halaman_hotel.php" method="post">
                <input type="hidden" name="aksi" value="1">
                <button type="submit" name="masuk">Masuk</button>
            </form>
        </div>
    </div>

    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>