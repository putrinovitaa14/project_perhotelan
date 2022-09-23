<?php
include "config.php";
if (isset($_POST['edit'])) {
    $p = $_POST['p'];
    $a = 1;
    while ($a <= $p) {
        $li[$a] = $_POST[$a];
        $a++;
    }
    $a = 1;
    while ($a <= $p) {
        $sql = "UPDATE list SET fasilitas='$li[$a]' WHERE id=$a";
        $query = mysqli_query($db, $sql);
        $a++;
    }
    if ($query) {
        header('Location: admin_halaman_hotel.php');
    } else {
        die("Gagal Menyimpan Perubahan");
    }
}
