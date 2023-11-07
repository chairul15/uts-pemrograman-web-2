<?php 
// Data produk dalam bentuk array
$produk = array(
    array("Minyak Telon", 20, 30000),
    array("Diapers", 15, 51000),
    array("Baby Oil", 10, 16000),
    array("Shampoo Baby", 18, 20000),
    array("Bedak", 15, 15000),
    array("Baju Bayi", 20, 35000),
    array("Jumper", 25, 50000)
);

// Membuat tabel untuk menampilkan data
echo "<table border='1'>
      <tr>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Total Harga</th>
      </tr>";

$totalSemuaProduk = 0;

// Loop melalui data produk
foreach ($produk as $data) {
    $namaProduk = $data[0];
    $stok = $data[1];
    $harga = $data[2];
    $totalHarga = $stok * $harga;

    // Menampilkan data dalam tabel
    echo "<tr>
            <td>$namaProduk</td>
            <td>$stok</td>
            <td>$harga</td>
            <td>$totalHarga</td>
          </tr>";

    // Mengakumulasi total harga semua produk
    $totalSemuaProduk += $totalHarga;
}

echo "</table>";

// Menampilkan total harga semua produk
echo "Total Harga Semua Produk: " . $totalSemuaProduk;
?>