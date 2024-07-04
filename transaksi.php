<?php
$file_transaksi = 'transaksi.txt';
$data_transaksi = [];

if (file_exists($file_transaksi)) {
    $bariss = file($file_transaksi, FILE_IGNORE_NEW_LINES);
    foreach ($bariss as $baris) {
        list($nama, $jumlah, $harga) = explode('|', $baris);
        $data_transaksi[] = [
            'nama' => $nama,
            'jumlah' => $jumlah,
            'harga' => $harga,
        ];
    }
}

header('Content-Type: application/json');
echo json_encode($data_transaksi);
?>
