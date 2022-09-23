<?php
include "config.php";

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM pesan WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: tamu_halaman_hotel.php');
    } else {
        die("Gagal Menyimpan Perubahan");
    }
}
