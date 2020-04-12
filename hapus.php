<?php
include('koneksi.php');

$kode= $_GET['kode'];

$hasil=$conn->query("DELETE FROM `tb_input` WHERE `kode` = $kode");
if ($hasil==TRUE) {
    header("location:tampil.php?info=hapus");
}else {
    echo "data gagal dihapus";
}
?>