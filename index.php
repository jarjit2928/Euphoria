<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Euphoria Collection - Beranda</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
</head>
<body>
    <header>
        <h1>Euphoria Collection</h1>
        <p class="tagline">"Elevate Your Wardrobe, Experience Euphoria"</p>
        <div class="profile-dropdown">
        <button class="profile-btn" onclick="toggleDropdown()">
            <img src="gambar/Screenshot 2025-02-24 201019.png" alt="Profil" />
        </button>
        <div class="dropdown-menu" id="dropdownMenu">
            <a href="profil/profil.php">Profil Saya</a>
            <a href="profil/editprofil.php">Edit Profil</a>
            <a href="profil/riwayat.php">Riwayat Pesanan</a>
            <a href="login/login.php">Logout</a>
        </div>
        </div>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="kategori.php">Kategori</a>
            <a href="cart.php">Keranjang</a>
        </nav>
    </header>
    <main>
        <h2 data-aos="fade-right">Produk Terbaru</h2>
        <div class="product-container">
            <div class="product" data-aos="zoom-in">
                <img src="gambar/atasan  V neck polos.jpg" alt="Atasan V neck polos" />
                <h3>Atasan V neck polos</h3>
                <br>
                <p>Rp300.000</p>
                <a class="btn" href="product/product.php">Lihat Detail</a>
            </div>
            <div class="product" data-aos="zoom-in" data-aos-delay="100">
                <img src="gambar/black midi dress V neck evening dress backless dres.jpg" alt="Black midi dress" />
                <h3>Black midi dress V neck evening dress backless</h3>
                <p>Rp450.000</p>
                <a class="btn" href="product/product1.php">Lihat Detail</a>
            </div>
            <div class="product" data-aos="zoom-in" data-aos-delay="200">
                <img src="gambar/Blouse blezer crop top.jpg" alt="Blouse blezer crop top" />
                <h3>Blouse blezer crop top</h3>
                <br>
                <p>Rp350.000</p>
                <a class="btn" href="product/product2.php">Lihat Detail</a>
            </div>
            <div class="product" data-aos="zoom-in" data-aos-delay="300">
                <img src="gambar/dress  summer beach off shoulder.jpg" alt="Dress  summer beach off shoulder" />
                <h3>Dress  summer beach off shoulder</h3>
                <p>Rp2.500.000</p>
                <a class="btn" href="product/product3.php">Lihat Detail</a>
            </div>
        </div>

        <h2 data-aos="fade-right">Rekomendasi</h2>
        <div class="product-container">
            <div class="product" data-aos="fade-up">
                <img src="gambar/dress midi brukat gaun.jpg" alt="Dress midi brukat gaun" />
                <h3>Dress mini brukat gaun</h3>
                <br><br>
                <p>Rp150.000</p>
                <a class="btn" href="product/product4.php">Lihat Detail</a>
            </div>
            <div class="product" data-aos="fade-up" data-aos-delay="100">
                <img src="gambar/dress yuanita scuba.jpg" alt="Dress yuanita scuba" />
                <h3>Dress yuanita scuba</h3>
                <br><br>
                <p>Rp120.000</p>
                <a class="btn" href="product/product5.php">Lihat Detail</a>
            </div>
            <div class="product" data-aos="fade-up" data-aos-delay="200">
                <img src="gambar/euphoria coquette girl crop top.jpg" alt="Euphoria coquette girl crop top" />
                <h3>Euphoria coquette girl crop top</h3>
                <p>Rp150.000</p>
                <a class="btn" href="product/product6.php">Lihat Detail</a>
            </div>
            <div class="product" data-aos="fade-up" data-aos-delay="300">
                <img src="gambar/euphoria dress sabrinw ribbed knit long sleeve off shoulder.jpg" alt="euphoria dress sabrinw ribbed knit long sleeve off shoulder" />
                <h3>Euphoria dress sabrinw ribbed knit long sleeve off shoulder</h3>
                <p>Rp120.000</p>
                <a class="btn" href="product/product7.php">Lihat Detail</a>
            </div>
        </div>

        <h2 data-aos="fade-right">Terlaris</h2>
        <div class="product-container">
            <div class="product" data-aos="flip-left">
                <img src="gambar/euphoria top blouse.jpg" alt="Euphoria top blouse" />
                <h3>Euphoria top blouse</h3>
                <br><br>
                <p>Rp150.000</p>
                <a class="btn" href="product/product8.php">Lihat Detail</a>
            </div>
            <div class="product" data-aos="flip-left" data-aos-delay="100">
                <img src="gambar/fairy luxurious dress french.jpg" alt="Fairy luxurious dress french" />
                <h3>Fairy luxurious dress french</h3>
                <br><br>
                <p>Rp120.000</p>
                <a class="btn" href="product/product9.php">Lihat Detail</a>
            </div>
            <div class="product" data-aos="flip-left" data-aos-delay="200">
                <img src="gambar/kemeja casual fit kancing.jpg" alt="Kemeja casual fit kancing" />
                <h3>Kemeja casual fit kancing</h3>
                <p>Rp150.000</p>
                <a class="btn" href="product/product10.php">Lihat Detail</a>
            </div>
            <div class="product" data-aos="flip-left" data-aos-delay="300">
                <img src="gambar/Lachel clover bustier ribbon top.jpg" alt="Lachel clover bustier ribbon top" />
                <h3>Lachel clover bustier ribbon top</h3>
                <p>Rp120.000</p>
                <a class="btn" href="product/product11.php">Lihat Detail</a>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 Toko Fashion Wanita. All rights reserved.</p>
    </footer>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });

        function toggleDropdown() {
            const menu = document.getElementById("dropdownMenu");
            menu.style.display = menu.style.display === "block" ? "none" : "block";
        }

        window.addEventListener("click", function (e) {
            const dropdown = document.getElementById("dropdownMenu");
            const button = document.querySelector(".profile-btn");
            if (!button.contains(e.target)) {
                dropdown.style.display = "none";
            }
        });
    </script>
</body>
</html>
