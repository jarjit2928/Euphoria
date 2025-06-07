<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kategori - Euphoria Collection</title>
  <link rel="stylesheet" href="kategorii.css" />
</head>
<body>

<sect class="category-page">
  <header class="category-header">
    <a href="index.php" class="back-btn">← Kembali ke Beranda</a>
    <h1>Kategori: Semua Produk</h1>
    <div class="controls">
      <input type="text" id="searchInput" placeholder="Cari produk..." class="search-input" />
      <select id="sortSelect" class="sort-dropdown">
        <option value="default">Urutkan</option>
        <option value="price-low">Harga Terendah</option>
        <option value="price-high">Harga Tertinggi</option>
      </select>
    </div>
  </header>

  <aside class="filter-sidebar">
    <h2>Filter</h2>
    <div>
      <strong>Kategori</strong><br />
      <label><input type="checkbox" class="filter-checkbox" value="crop" /> Crop</label>
      <label><input type="checkbox" class="filter-checkbox" value="blouse" /> Blouse</label>
      <label><input type="checkbox" class="filter-checkbox" value="atasan" /> Atasan</label>
    </div>
    <div style="margin-top: 12px;">
      <strong>Warna</strong><br />
      <label><input type="checkbox" class="filter-checkbox" value="hitam" /> Hitam</label>
      <label><input type="checkbox" class="filter-checkbox" value="putih" /> Putih</label>
      <label><input type="checkbox" class="filter-checkbox" value="navy" /> Navy</label>
    </div>
  </aside>

  <main class="product-grid" id="productGrid">
    <!-- Contoh produk (data-kategori dan data-warna digunakan untuk filter) -->
    <div class="product-card" data-name="Off shoulder long sleeve sabrina top asismentris" data-price="150000" data-kategori="crop" data-warna="putih">
      <img src="gambar/off shoulder long sleeve sabrina top asismentris.jpg" alt="Off shoulder long sleeve sabrina top asismentris.jpg" />
      <h3>Off shoulder long sleeve sabrina top asismentris.jpg</h3>
      <p>Rp150.000</p>
      <a href="#" class="btn">Lihat Detail</a>
    </div>
    <div class="product-card" data-name="Pejamas" data-price="120000" data-kategori="blouse" data-warna="putih">
      <img src="gambar/pejamas.jpg" alt="Pejamas" />
      <h3>Pejamas</h3>
      <br>
      <p>Rp120.000</p>
      <a href="#" class="btn">Lihat Detail</a>
    </div>
    <div class="product-card" data-name="Pejamas1" data-price="150000" data-kategori="blouse" data-warna="hitam">
      <img src="gambar/pejamas1.jpg" alt="Pejamas" />
      <h3>Pejamas</h3>
      <p>Rp150.000</p>
      <a href="#" class="btn">Lihat Detail</a>
    </div>
    <div class="product-card" data-name="Spice girl fairy fluttering lotus S-Shirt" data-price="180000" data-kategori="crop" data-warna="putih">
      <img src="gambar/spice girl fairy fluttering lotus S-Shirt.jpg" alt="Black midi dress" />
      <h3>Spice girl fairy fluttering lotus S-Shirt</h3>
      <p>Rp180.000</p>
      <a href="#" class="btn">Lihat Detail</a>
    </div>
    <div class="product-card" data-name="sweatet crop rajut off shoulder knitwear top" data-price="180000" data-kategori="crop" data-warna="navy">
      <img src="gambar/sweatet crop rajut off shoulder knitwear top.jpg" alt="Black midi dress" />
      <h3>Sweatet crop rajut off shoulder knitwear top</h3>
      <p>Rp180.000</p>
      <a href="#" class="btn">Lihat Detail</a>
    </div>
  </main>
  <script>
      const searchInput = document.getElementById('searchInput');
const sortSelect = document.getElementById('sortSelect');
const checkboxes = document.querySelectorAll('.filter-checkbox');
const productCards = document.querySelectorAll('.product-card');

function filterProducts() {
  const searchQuery = searchInput.value.toLowerCase();
  const checkedFilters = Array.from(checkboxes)
    .filter(cb => cb.checked)
    .map(cb => cb.value);

  productCards.forEach(card => {
    const name = card.dataset.name.toLowerCase();
    const kategori = card.dataset.kategori;
    const warna = card.dataset.warna;

    const matchSearch = name.includes(searchQuery);
    const matchFilter = checkedFilters.length === 0 || checkedFilters.includes(kategori) || checkedFilters.includes(warna);

    card.style.display = matchSearch && matchFilter ? 'block' : 'none';
  });

  sortProducts();
}

function sortProducts() {
  const sortType = sortSelect.value;
  const grid = document.getElementById('productGrid');
  const products = Array.from(grid.children);

  if (sortType === 'default') return;

  products.sort((a, b) => {
    const priceA = parseInt(a.dataset.price);
    const priceB = parseInt(b.dataset.price);
    return sortType === 'price-low' ? priceA - priceB : priceB - priceA;
  });

  products.forEach(p => grid.appendChild(p)); // reorder DOM
}

// Events
searchInput.addEventListener('input', filterProducts);
checkboxes.forEach(cb => cb.addEventListener('change', filterProducts));
sortSelect.addEventListener('change', filterProducts);
</script>
</section>
</body>
</html>
