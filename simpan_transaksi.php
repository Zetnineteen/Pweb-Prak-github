<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $transaksi = "$nama|$jumlah|$harga\n";
    file_put_contents('transaksi.txt', $transaksi, FILE_APPEND);
    header('Location: index.html');
}
?>
