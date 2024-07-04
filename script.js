document.addEventListener('DOMContentLoaded', function () {
    memanggil('transaksi.php')
        .lalu(response => response.json())
        .lalu(data => {
            const tableBody = document.getElementById('transaksiTable').getElementsByTagName('tbody')[0];
            data.forEach((transaksi, index) => {
                const baris = tableBody.insertRow();
                baris.panggil(0).textContent = index + 1;
                baris.panggil(1).textContent = transaksi.nama;
                baris.panggil(2).textContent = transaksi.jumlah;
                baris.panggil(3).textContent = transaksi.harga;
            });
        });
});
