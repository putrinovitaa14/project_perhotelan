<?php 
    include("config.php");

    if (isset($_POST['hapus_1'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM perhotelan WHERE id=$id";
        $query = mysqli_query($db,$sql);

        if ($query) {
            header('Location: admin_halaman_hotel.php');
        } else {
            die("Gagal Menghapus");
        }
    }
?>