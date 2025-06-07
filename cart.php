<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Keranjang Belanja</title>
  <link rel="stylesheet" href="keranjang.css" />
</head>
<body>
  <header>
    <a href="index.php" class="back-btn">← Kembali ke Beranda</a>
    <h1>Euphoria Collection (<span id="item-count">0</span> item)</h1>
  </header>
  <main>
    <div class="cart-container">
      <h2>Keranjang Belanja</h2>
      <table>
        <thead>
          <tr>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="cart-body"></tbody>
      </table>
      <div class="cart-summary">
        <p><strong>Total Belanja: <span id="total-price">Rp0</span></strong></p>
        <a href="checkout.php" class="checkout-btn">Lanjut ke Checkout</a>
      </div>
    </div>
  </main>
  <footer>
    <p>&copy; 2025 Toko Fashion Wanita</p>
  </footer>
  <script>
    function formatPrice(num) {
      return 'Rp' + num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }

    function showSnackbar(message) {
      const sb = document.getElementById("snackbar");
      sb.textContent = message;
      sb.className = "snackbar show";
      setTimeout(() => sb.className = sb.className.replace("show", ""), 3000);
    }

    function getCart() {
      try {
        const cart = JSON.parse(localStorage.getItem('cart'));
        return cart && typeof cart === 'object' ? cart : {};
      } catch {
        return {};
      }
    }

    function saveCart(cart) {
      localStorage.setItem('cart', JSON.stringify(cart));
    }

    function updateItemCount(cart) {
      const count = Object.values(cart).reduce((sum, item) => sum + item.quantity, 0);
      document.getElementById('item-count').textContent = count;
    }

    function renderCart() {
      const cart = getCart();
      const cartBody = document.getElementById('cart-body');
      const totalElem = document.getElementById('total-price');
      cartBody.innerHTML = '';
      let total = 0;

      const keys = Object.keys(cart);
      if (keys.length === 0) {
        cartBody.innerHTML = '<tr><td colspan="5" style="text-align:center;">Keranjang kosong</td></tr>';
        totalElem.textContent = 'Rp0';
        updateItemCount(cart);
        return;
      }

      keys.forEach(key => {
        const item = cart[key];
        const subtotal = item.price * item.quantity;
        total += subtotal;

        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${item.name}${item.note ? `<br><small><i>Catatan: ${item.note}</i></small>` : ''}</td>
          <td>
            <div class="quantity-controls">
              <button class="qty-btn" data-key="${key}" data-action="-">-</button>
              <span>${item.quantity}</span>
              <button class="qty-btn" data-key="${key}" data-action="+">+</button>
            </div>
          </td>
          <td>${formatPrice(item.price)}</td>
          <td>${formatPrice(subtotal)}</td>
          <td><a href="#" class="remove-btn" data-key="${key}">Hapus</a></td>
        `;
        cartBody.appendChild(tr);
      });

      totalElem.textContent = formatPrice(total);
      updateItemCount(cart);
      attachRemoveEvents();
      attachQtyEvents();
    }

    function attachRemoveEvents() {
      document.querySelectorAll('.remove-btn').forEach(btn => {
        btn.addEventListener('click', function (e) {
          e.preventDefault();
          if (!confirm('Yakin ingin menghapus produk ini?')) return;
          const key = this.dataset.key;
          const cart = getCart();
          if(cart.hasOwnProperty(key)) {
            delete cart[key];
            saveCart(cart);
            renderCart();
            showSnackbar("Produk dihapus dari keranjang");
          }
        });
      });
    }

    function attachQtyEvents() {
      document.querySelectorAll('.qty-btn').forEach(btn => {
        btn.addEventListener('click', function () {
          const key = this.dataset.key;
          const action = this.dataset.action;
          const cart = getCart();
          if (!cart[key]) return;

          if (action === '-' && cart[key].quantity > 1) {
            cart[key].quantity--;
          } else if (action === '+') {
            cart[key].quantity++;
          }

          saveCart(cart);
          renderCart();
        });
      });
    }

    document.addEventListener('DOMContentLoaded', renderCart);
  </script>
</body>
</html>
