<?php
include "config.php";

if (isset($_POST['tambah'])) {
    $id = $_POST['id'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $kasur = $_POST['kasur'];
    $dapur = $_POST['dapur'];
    $wi_fi = $_POST['wi_fi'];
    $info = $_POST['info'];

    $sql = "INSERT INTO perhotelan (tipe_kamar,kasur,dapur,wi_fi,info) VALUES ('$tipe_kamar','$kasur','$dapur','$wi_fi','$info')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: admin_halaman_hotel.php');
    } else {
        die("Gagal Menyimpan Perubahan");
    }
}
