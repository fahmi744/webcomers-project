<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Layout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">

        <!-- Header -->
        <div class="header">
            <div class="menu-icon">☰</div>
            <div class="brand">coupang</div>
            <div class="search-container">
                <input type="text" placeholder="Cari produk...">
            </div>
            <div class="account-cart">
                <a href="admin/login.php">👤 Akun</a>
                <a href="#">🛒 Keranjang</a>
            </div>
        </div>
        
        <div class="banner">DOWNLOAD APLIKASI KAMI SEKARANG!!</div>

        <!-- Produk Rekomendasi -->
        <div class="product-container">
            <?php 
            $produk = [
                ["nama" => "Produk 1", "harga" => "Rp 10.000"],
                ["nama" => "Produk 2", "harga" => "Rp 15.000"],
                ["nama" => "Produk 3", "harga" => "Rp 20.000"],
                ["nama" => "Produk 4", "harga" => "Rp 25.000"]
            ];

            foreach ($produk as $item) {
                echo '<div class="product">
                        <div class="product-box"></div>
                        <p>' . $item["nama"] . '</p>
                        <p class="price">' . $item["harga"] . '</p>
                        <button>Beli</button>
                      </div>';
            }
            ?>
        </div>

        <!-- Footer -->
        <div class="footer"> 
            <div class="footer-content">
                <div class="brand">
                    <h2>Windah Topup</h2>
                    <p>Selamat datang di WINDATOPUPSTORE! Topup Game murah dan terpercaya</p>
                    <div class="socials">
                        <a href="#">Instagram</a>
                        <a href="#">WhatsApp</a>
                    </div>
                </div>

                <div class="links">
                    <h3>Kemitraan</h3>
                    <a href="#">Dashboard</a>
                    <a href="#">Deposit</a>
                    <a href="#">Daftar Harga</a>
                </div>

                <div class="links">
                    <h3>Peta Situs</h3>
                    <a href="#">Beranda</a>
                    <a href="#">Masuk</a>
                    <a href="#">Daftar</a>
                    <a href="#">Cek Transaksi</a>
                    <a href="#">Hubungi Kami</a>
                    <a href="#">Ulasan</a>
                </div>

                <div class="links">
                    <h3>Legalitas</h3>
                    <a href="#">Kebijakan Privasi</a>
                    <a href="#">Syarat & Ketentuan</a>
                </div>
            </div>
            <p class="copyright">© 2025 Nama Toko</p>
        </div>

    </div> <!-- end of wrapper -->

    <script src="script.js"></script>
</body>
</html>
