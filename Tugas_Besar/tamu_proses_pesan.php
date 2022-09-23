<?php
include "config.php";
if (isset($_POST['pesan_1'])) {
    $no = $_POST['no'];
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no_t = $_POST['no_t'];
    $alamat = $_POST['alamat'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $kasur = $_POST['kasur'];
    $dapur = $_POST['dapur'];
    $wi_fi = $_POST['wi_fi'];
    $info = $_POST['info'];

    $sql = "INSERT INTO pesan (nomor,nama,no_t,alamat,tipe_kamar,kasur,dapur,wi_fi,info) VALUES ($no,'$nama',$no_t,'$alamat','$tipe_kamar','$kasur','$dapur','$wi_fi','$info')";
    $query = mysqli_query($db, $sql);

    if ($query) {

        header('Location: tamu_halaman_hotel.php');
    } else {
        die("Gagal Menyimpan Pesanan");
    }
}
