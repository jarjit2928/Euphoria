<?php
session_start();
require 'kasa.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ambil data dari form
    $nama = $conn->real_escape_string($_POST['nama']);
    $alamat = $conn->real_escape_string($_POST['alamat']);
    $telp = $conn->real_escape_string($_POST['telp']);
    $metode = $conn->real_escape_string($_POST['metode']);

    // validasi sederhana
    if (!$nama || !$alamat || !$telp || !$metode) {
        echo "Harap isi semua data dengan lengkap.";
        exit;
    }

    // simpan ke tabel orders
    $sql_order = "INSERT INTO orders (nama, alamat, telp, metode) VALUES ('$nama', '$alamat', '$telp', '$metode')";

    if ($conn->query($sql_order) === TRUE) {
        $order_id = $conn->insert_id;

        // Contoh data barang yang dipesan (seharusnya dari keranjang sesungguhnya)
        // Format: product_id => quantity
        $cart = [
            1 => 2, // misal produk id 1 dibeli 2 pcs
            3 => 1  // produk id 3 dibeli 1 pcs
        ];
        header('location:pesanan.php');
        echo "Pesanan berhasil disimpan! Terima kasih telah berbelanja.";
        // Bisa redirect ke halaman sukses atau invoice
        // header("Location: success.php?order_id=$order_id");
        exit;

    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Checkout - Euphoria Collection</title>
    <link rel="stylesheet" href="checkout.css" />
  </head>
  <body>
    <header>
      <a href="index.php" class="back-btn">← Kembali ke Beranda</a>
      <h1>Checkout</h1>
    </header>
    <main>
      <div class="checkout-container">
        <h2>Checkout</h2>
        <form action="#" method="post">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required />
          </div>
          <div class="form-group">
            <label for="alamat">Alamat Pengiriman</label>
            <textarea id="alamat" name="alamat" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <label for="telp">Nomor Telepon</label>
            <input type="tel" id="telp" name="telp" required />
          </div>
          <div class="form-group">
            <label for="metode">Metode Pembayaran</label>
            <select id="metode" name="metode" required>
              <option value="">-- Pilih Metode --</option>
              <option value="transfer">Transfer Bank</option>
              <option value="cod">Bayar di Tempat (COD)</option>
              <option value="ewallet">E-Wallet</option>
            </select>
          </div>
          <button type="submit" class="checkout-btn">Konfirmasi Pesanan</button>
        </form>
      </div>
    </main>
    <footer>
      <p>&copy; 2025 Toko Fashion Wanita</p>
    </footer>
  </body>
</html>