<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pesanan Diterima - Euphoria Collection</title>
  <!-- Google Font Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(to right, #fdf0ff, #f8e1ff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #4a0072;
    }

    .container {
      background: #ffffff;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 12px 30px rgba(106, 27, 154, 0.2);
      text-align: center;
      max-width: 420px;
      width: 90%;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 1s ease forwards;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .icon-check {
      width: 80px;
      height: 80px;
      margin-bottom: 20px;
    }

    h1 {
      font-size: 28px;
      color: #6a1b9a;
      margin-bottom: 20px;
      font-weight: 600;
    }

    p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 30px;
      color: #5e3364;
    }

    .button {
      display: inline-block;
      background-color: #6a1b9a;
      color: white;
      text-decoration: none;
      padding: 12px 28px;
      border-radius: 30px;
      transition: background-color 0.3s ease;
      font-weight: 600;
      box-shadow: 0 5px 12px rgba(106, 27, 154, 0.3);
    }

    .button:hover {
      background-color: #4a0072;
    }

    @media (max-width: 480px) {
      .container {
        padding: 30px 20px;
      }

      h1 {
        font-size: 24px;
      }

      p {
        font-size: 15px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Ikon Centang SVG -->
    <svg class="icon-check" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="32" cy="32" r="32" fill="#6a1b9a" opacity="0.1"/>
      <circle cx="32" cy="32" r="28" fill="#6a1b9a"/>
      <path d="M20 33L28 41L44 25" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>

    <h1>Pesanan Telah Diterima</h1>
    <p>Terima kasih telah berbelanja di <strong>Euphoria Collection</strong>!<br />Pesanan Anda sedang kami proses dengan penuh cinta.</p>
    <a href="index.php" class="button">Kembali ke Beranda</a>
  </div>
</body>
</html>
