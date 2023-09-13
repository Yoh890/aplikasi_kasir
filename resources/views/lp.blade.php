<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Aplikasi Kasir</title>
    <link rel="icon" href="img/kasir.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        /* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
}

header {
    background-color: #007bff;
    color: white;
    text-align: center;
    padding: 20px;
}

header h1 {
    font-size: 36px;
}

header p {
    font-size: 18px;
}

.app-screenshots {
    /* Tambahkan gaya untuk tampilan gambar screenshot aplikasi di sini */
}

.carousel-inner {
    width: 80%; /* Ubah sesuai kebutuhan */
    max-width: 600px; /* Ukuran maksimum carousel */
    margin: 0 auto; /* Membuat carousel berada di tengah halaman */
}


.carousel-inner img {
    max-width: 100%;
    height: auto;
}


.benefits {
    padding: 20px;
}

.benefits ul {
    list-style-type: disc;
    margin-left: 20px;
}

.customer-reviews {
    padding: 20px;
}

.call-to-action {
    text-align: center;
    background-color: #007bff;
    padding: 40px;
}

.call-to-action h2 {
    color: white;
    font-size: 28px;
}

.cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff9900;
    color: white;
    font-size: 18px;
    text-decoration: none;
    border-radius: 5px;
}

footer {
    background-color: #333;
    color: white;
    padding: 20px;
    text-align: center;
}

footer ul {
    list-style-type: none;
    padding: 0;
}

.benefits ul {
    list-style-type: disc;
    margin-left: 20px;
    padding: 0;
    margin-top: 10px; /* Tambahkan margin di atas ul */
    margin-bottom: 10px; /* Tambahkan margin di bawah ul */
}

.benefits li {
    font-size: 18px;
    margin-bottom: 10px;
}


footer li {
    display: inline;
    margin-right: 20px;
}

/* Tambahkan gaya untuk tautan media sosial di sini */

    </style>
</head>
<body>
    <header>
        <img src="img/kasir.png" class="img-fluid" alt="Logo Aplikasi Kasir">
        <h1>Solusi Kasir Cerdas untuk Bisnis Anda</h1>
    </header>

    <section class="app-screenshots">
        <!-- Tambahkan gambar screenshot aplikasi di sini -->
    </section>

    <section class="benefits">
        <h2>Manfaat Utama</h2>
        <ul class="list-group">
            <li class="list-group-item">Penghematan Waktu</li>
            <li class="list-group-item">Mobilitas</li>
            <li class="list-group-item">Analisis Data</li>
            <li class="list-group-item">Pelayanan Pelanggan yang Lebih Cepat</li>
            <li class="list-group-item">Pelacakan Penjualan dan Laporan Keuangan</li>
          </ul>
    </section>

    <section class="customer-reviews">
        <h2>Testimoni Pelanggan</h2>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/testi1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/testi2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/testi3.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

    <section class="call-to-action">
        <h2>Mulai Gunakan Aplikasi Kasir Kami Hari Ini!</h2>
        <a href="{{ route('dashboard') }}" class="cta-button">Coba Gratis</a>
    </section>

    <footer>
        <nav>
            <ul>
                <li><a href="about.html">Tentang Kami</a></li>
                <li><a href="pricing.html">Harga</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="privacy-policy.html">Kebijakan Privasi</a></li>
            </ul>
        </nav>
        <!-- Tambahkan tautan media sosial di sini -->
    </footer>
    <script>// script.js

        // Fungsi untuk menampilkan pesan ketika tombol CTA diklik
        document.querySelector('.cta-button').addEventListener('click', function() {
            alert('Terima kasih telah mencoba aplikasi kami!');
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
