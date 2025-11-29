<DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rendangmu - Lazismu</title>
<link rel="icon" type="image/png" href="/logo-lazismu.png">
<style>
    html {
        box-sizing: border-box;
        width: 100vw;
        overflow-x: hidden;
    }
    *, *:before, *:after {
        box-sizing: inherit;
    }
    body {
        max-width: 100vw;
        overflow-x: hidden;
    }
</style>
</head>
<body style="margin: 0; padding: 0; background: #f9f9f9;">
<!-- Import Jakarta Sans font -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700&display=swap" rel="stylesheet">

<!-- Header Lazismu (Fixed & Logo Besar) -->
<header style="
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: #fff;
    border-bottom: 1px solid #eee;
    padding: 0;
    z-index: 9999;
    font-family: 'Plus Jakarta Sans', sans-serif;
">
    <div style="
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        height: 80px; /* Tinggi header lebih besar */
    ">
        
        <!-- LOGO LEBIH BESAR -->
        <div style="display: flex; align-items: center;">
            <img src="/logo-lazismu.png" 
                 alt="Lazismu" 
                 style="height: 100px;"> <!-- perbesar logo -->
        </div>

        <!-- NAVIGATION -->
        <nav style="display: flex; align-items: center; gap: 22px;">
            <a href="#" style="color: #ff9900; text-decoration: none; font-size: 15px; font-weight: 600;">HOME</a>
            <a href="#" style="color: #ff9900; text-decoration: none; font-size: 15px; font-weight: 600;">TENTANG KAMI</a>
            <a href="#" style="color: #ff9900; text-decoration: none; font-size: 15px; font-weight: 600;">PROGRAM</a>
            <a href="#" style="color: #ff9900; text-decoration: none; font-size: 15px; font-weight: 600;">LAYANAN</a>
            <a href="{{ url('/qurban') }}" style="color: #ff9900; text-decoration: none; font-size: 15px; font-weight: 600;">BERITA</a>
            <a href="#" style="color: #ff9900; text-decoration: none; font-size: 15px; font-weight: 600;">BLOG</a>

            <!-- Tombol Oranye -->
            <button style="
                background: #ff9900;
                border: none;
                width: 42px;
                height: 42px;
                border-radius: 2px;
                margin-left: 12px;
                cursor: pointer;
            "><img src="/search-icon.png-removebg-preview.png" alt="Search" style="width: 22px; height: 22px;">
            </div>
        </nav>
    </div>
</header>

<!-- Spacer agar konten tidak tertutup header -->
<div style="height: 90px;"></div>

<!-- BANNER QURBAN (Sesuai Desain) -->
<style>
    .banner-qurban-wrapper {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 10px; /* kecil seperti di desain */
    }

    .banner-qurban {
        width: 100%;
        max-width: 1000px;
        border-radius: 12px;
        overflow: hidden;  /* agar gambar mengikuti bentuk */
        box-shadow: 0 3px 12px rgba(0,0,0,0.12);
    }

    .banner-qurban img {
        width: 100%;
        display: block;
    }
</style>

<div class="banner-qurban-wrapper">
    <div class="banner-qurban">
        <img src="/Rendangmu_1.png" alt="Qurban Banner">
    </div>
</div>

<!-- judul -->
 <!-- IMPORT FONT PLUS JAKARTA SANS -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- SECTION PRODUK DI BAWAH BANNER -->
<style>
    .section-wrapper {
        width: 100%;
        max-width: 1000px;
        margin: 24px auto 0;
        padding: 0 16px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .title-produk {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .subtitle-produk {
        font-size: 16px;
        color: #555;
        margin-bottom: 16px;
    }

    /* CARD 2 KOLOM */
    .info-card {
        width: 100%;
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        display: flex;
        overflow: hidden;
    }

    .info-item {
        width: 50%;
        padding: 18px;
        display: flex;
        gap: 12px;
        align-items: center;
        border-right: 1px solid #e0e0e0;
    }

    .info-item:last-child {
        border-right: none;
    }

    .info-text-title {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 4px;
    }

    .info-text-sub {
        font-size: 14px;
        color: #666;
        margin-top: -4px;
    }

    .info-icon {
        width: 32px;
        height: 32px;
    }

    /* RESPONSIVE MOBILE */
    @media (max-width: 600px) {
        .info-card {
            flex-direction: column;
        }
        .info-item {
            width: 100%;
            border-right: none;
            border-bottom: 1px solid #e0e0e0;
        }
        .info-item:last-child {
            border-bottom: none;
        }
    }
</style>


<div class="section-wrapper">
    
    <div class="title-produk">Rendangmu Sapi 1/7</div>
    <div class="subtitle-produk">Manfaat Qurban anda, Jadi semakin luas</div>

    <div class="info-card">
        
        <!-- KOLOM 1 -->
        <div class="info-item">
            <img src="/icon-harga.png" class="info-icon">
            <div>
                <div class="info-text-title">Rp3.000.000</div>
                <div class="info-text-sub">*Harga Dapat Berubah</div>
            </div>
        </div>

        <!-- KOLOM 2 -->
        <div class="info-item">
            <img src="/icon-makanan.png" class="info-icon">
            <div>
                <div class="info-text-title">Kornet, Rendang</div>
                <div class="info-text-sub">Varian Rasa Tersedia</div>
            </div>
        </div>

    </div>

</div>


<!-- Pembatas Section Tentang Program -->

<!-- IMPORT FONT -->
<link href="https://fonts.cdnfonts.com/css/jakarta-sans" rel="stylesheet">

<style>
    .section-divider {
        width: 100%;
        max-width: 1000px;
        margin: 32px auto 0;
        padding: 16px 0;
        border-top: 1px solid #e6e6e6;
        border-bottom: 1px solid #e6e6e6;
        text-align: center;
        font-family: 'Jakarta Sans', sans-serif;
    }

    .section-divider h2 {
        margin: 0;
        font-size: 20px;
        font-weight: 700;
        color: #ff7a00; /* Orange */
    }
</style>

<div class="section-divider">
    <h2>Tentang Program</h2>
</div>

<!--  Deskripsi Tentang Program  -->
<!-- IMPORT FONT -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    /* === DESKRIPSI PROGRAM === */
    .program-content {
        max-width: 1000px;
        margin: 24px auto 60px;
        padding: 0 16px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 17px;
        line-height: 1.75;
        color: #444;
    }

    .program-content h3 {
        font-size: 20px;
        font-weight: 700;
        margin-top: 26px;
        margin-bottom: 10px;
        color: #000;
    }

    .program-content .orange-title {
        color: #ff7a00;
        font-weight: 700;
        margin-top: 30px;
        font-size: 21px;
    }

    .program-content ul {
        padding-left: 22px;
        margin-top: 6px;
    }

    .program-content ul li {
        margin-bottom: 8px;
        font-size: 17px;
    }

    .program-content .note-title {
        margin-top: 30px;
        font-weight: 700;
        color: #000;
        font-size: 20px;
    }

    /* === REKOMENDASI PRODUK === */
    .recommend-section {
        width: 100%;
        max-width: 1000px;   /* DISAMAKAN DENGAN DESKRIPSI PROGRAM */
        margin: 40px auto;
        padding: 0 16px;     /* DISAMAKAN */
        font-family: 'Plus Jakarta Sans', sans-serif;
        box-sizing: border-box;
    }

    .recommend-title {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #000;
    }

    .recommend-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 22px;
    }

    .recommend-card {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #eee;
        transition: 0.25s ease;
    }

    .recommend-card:hover {
        box-shadow: 0 8px 22px rgba(0,0,0,0.08);
    }

    .recommend-thumb img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .recommend-body {
        padding: 18px;
    }

    .recommend-body h3 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 14px;
    }

    .info-row {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
        font-size: 15px;
        color: #444;
    }

    .info-row img {
        width: 20px;
        opacity: 0.85;
    }

    /* RESPONSIVE */
    @media(max-width: 780px) {
        .recommend-grid {
            grid-template-columns: 1fr;
        }
        .recommend-thumb img {
            height: 180px;
        }
    }
</style>


<!-- ==== DESKRIPSI PROGRAM ==== -->
<div class="program-content">

    <h3>SOLDOUT</h3>

    <h3>Semoga Penyesalan Tahun Lalu Tidak Terulang Di Tahun Ini</h3>

    <p>Tak sempat tunaikan ibadah qurban di tahun sebelumnya, dengan alasan salah satunya mungkin karena keterbatasan atau tabungan kita yang belum mencapai target. Tapi semoga tahun ini cita-cita kamu terwujud!</p>

    <p>Menunaikan ibadah qurban sebagai ikhtiar mendekatkan diri dan bentuk penghambaan pada Allah dengan menjadikan ibadah yang paling di cinta-Nya. Juga menjadi bentuk kepedulian sosial terhadap sesama.</p>

    <p>Berbagi dengan mereka yang hidup dalam keterbatasan, untuk kembali merasakan dampak baik ibadah dan nikmat Allah di bulan Dzulhijjah.</p>

    <h3>Pastikan Qurban Kamu Punya Kelebihan Ini</h3>

    <p>Rumah Zakat bersama program Superqurban, sepenuh hati memfasilitasi ibadah qurban sahabat tahun ini dengan mudah cukup pesan hewan via online dari rumah. Kami uruskan mulai dari penyembelihan hingga pendistribusian qurban hingga daerah pelosok, daerah minim pequrban, dan daerah terdampak bencana.</p>

    <p>Dengan inovasi pengolahan hewan qurban dalam bentuk daging olah, yang tahan hingga 2 tahun.</p>

    <h3 class="orange-title">Mengapa Harus Memilih Rendangmu</h3>

    <p>Sebab, Rendangmu Memiliki Keunggulan :</p>

    <ul>
        <li>Hewan Qurban berkualitas, sehat dan bebas PMK</li>
        <li>Donatur bisa memilih untuk mendapatkan hak pekurban berupa kornet atau rendangnya yang akan dikirimkan H+90 setelah hari tasyrik ketiga. Atau bisa memilih untuk seluruhnya disedekahkan.</li>
        <li>Sesuai Syariah</li>
        <li>Jangkauan lebih luas, tahan lama dan praktis.</li>
        <li>Aksi distribusi dilakukan sepanjang tahun, menjangkau pelosok, daerah terpencil, pedesaan dan wilayah yang terkena bencana.</li>
        <li>Memberdayakan Peternak Lokal</li>
    </ul>

    <h3 class="note-title">Note :</h3>

    <ul>
        <li>Donatur yang meminta sebagai hak qurbannya dan sudah melengkapi formulir pequrban, maka produk Superqurban akan dikirim oleh Rumah Zakat melalui jasa pengiriman pada H+90 setelah hari tasyrik ketiga.</li>
        <li>Dengan menentukan jumlah Superqurban Sapi 1/7 untuk varian Kornet/rendang sebanyak 10 kaleng.</li>
        <li>Laporan Qurban akan dikirimkan maksimal H+14 dari hari terakhir pemotongan hewan qurban melalui SMS/WA/Email.</li>
        <li>Setelah pequrban menerima informasi melalui WA/Email, maka laporan sudah siap diunduh melalui aplikasi: https://rumahzakat.org/care/login dengan klik menu My Report qurban, kemudian pilih periode laporan.</li>
        <li>Klik "Tunaikan Sekarang" untuk pesan dan amankan hewan qurban kamu</li>
    </ul>

</div>


<!-- ==== REKOMENDASI PRODUK ==== -->
<div class="recommend-section">
    
    <div class="recommend-title">Rekomendasi Program Terbaik</div>

    <div class="recommend-grid">

        <!-- CARD 1 -->
        <div class="recommend-card">
            <div class="recommend-thumb">
                <img src="/Rendangmu.png" alt="Rendangmu Sapi">
            </div>
            <div class="recommend-body">
                <h3>Rendangmu Sapi</h3>

                <div class="info-row">
                    <img src="/icon-price.png">
                    Rp 21.000.000
                </div>

                <div class="info-row">
                    <img src="/icon-food.png">
                    Kornet, Rendang
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="recommend-card">
            <div class="recommend-thumb">
                <img src="/Rendangmu_1.png" alt="Rendangmu Kambing">
            </div>
            <div class="recommend-body">
                <h3>Rendangmu Sapi 1/7</h3>

                <div class="info-row">
                    <img src="/icon-price.png">
                    Rp 3.000.000
                </div>

                <div class="info-row">
                    <img src="/icon-food.png">
                    Kornet, Rendang
                </div>
            </div>
        </div>

    </div>

</div>

<!--  Tombol Tunaikan Sekarang  -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    .btn-wrapper {
        width: 100%;
        max-width: 900px;
        margin: 40px auto;
        padding: 0 20px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .btn-tunaikan {
        display: block;       /* <<< WAJIB agar tidak mengecil */
        width: 100%;          /* full width */
        padding: 14px 0;
        border: 2px solid #f38b11;
        border-radius: 6px;
        background: white;
        color: #f38b11;
        font-size: 18px;
        font-weight: 600;
        text-align: center;
        cursor: pointer;
        text-decoration: none; /* hilangkan underline */
        transition: 0.25s ease;
    }

    .btn-tunaikan:hover {
        background: #f38b11;
        color: white;
    }
</style>

<div class="btn-wrapper">
    <a href="{{ url('/pembayaranqurban') }}" class="btn-tunaikan">
        Tunaikan Sekarang
    </a>
</div>
