<?php
include "config.php";
if (isset($_POST['tambah'])) {
    $fasilitas = $_POST['fasilitas'];

    $sql = "INSERT INTO list (fasilitas) VALUES ('$fasilitas')";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: admin_halaman_hotel.php');
    } else {
        die("Gagal Menyimpan Perubahan");
    }
}
