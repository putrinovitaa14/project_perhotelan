<?php
include "config.php";

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $kasur = $_POST['kasur'];
    $dapur = $_POST['dapur'];
    $wi_fi = $_POST['wi_fi'];
    $info = $_POST['info'];

    $sql = "UPDATE perhotelan SET tipe_kamar='$tipe_kamar',kasur=$kasur,dapur='$dapur',wi_fi='$wi_fi',info='$info' WHERE id=$id";
    $query = mysqli_query($db,$sql);

    if ($query) {
        header('Location: admin_halaman_hotel.php');
    } else {
        die("Gagal Menyimpan Perubahan");
    }
}
