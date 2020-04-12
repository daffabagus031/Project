<?php
include('koneksi.php');

$nama=$_POST['nama'];
$harga=$_POST['harga'];
$satuan=$_POST['satuan'];
$kat=$_POST['kat'];
$url=$_POST['url'];
$stok=$_POST['stok'];

// print_r($_POST);
$result = $conn->exec("INSERT INTO `tb_input` (`kode`, `nama`, `harga`, `satuan`, `kategori`, `url`, `stok`) VALUES (NULL, '$nama', '$harga', '$satuan', '$kat', '$url', '$stok');");

echo $result;

if ($result==TRUE) {
    echo "data tersimpan";
    include "tampil.php";
}else {
    echo "data gagal tersimpan";
}
?>