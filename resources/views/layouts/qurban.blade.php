<DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rendangmu - Lazismu</title>
<link rel="icon" type="image/png" href="/logo-lazismu.png">
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

<!-- Banner Zakat -->
<div style="width: 100%; display: flex; justify-content: center; margin-top: 24px;">
	<img src="/Rectangle_36.png" alt="Zakat Banner" style="max-width: 1000px; width: 100%; border-radius: 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.08);">
</div>

<!-- Konten Utama -->
 <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        margin: 0;
        padding: 0;
        background: #fff;
    }

    /* WRAPPER SECTION */
    .section-wrapper {
        padding: 50px 60px;
    }

    .section-title {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 40px;
        color: #222;
    }

    /* GRID */
    .news-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 35px 40px;
    }

    /* CARD */
    .news-card img {
        width: 100%;
        height: 160px;
        background: #dcdcdc;
        border-radius: 6px;
        margin-bottom: 15px;
    }

    .news-card h3 {
        font-size: 16px;
        font-weight: 700;
        color: #222;
        margin: 0 0 8px 0;
        line-height: 1.4;
    }

    .news-meta {
        font-size: 13px;
        color: #777;
        margin-bottom: 8px;
    }

    .news-card p {
        font-size: 14px;
        line-height: 1.4;
        color: #444;
        margin: 0;
    }

    /* RESPONSIVE */
    @media (max-width: 992px) {
        .news-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 576px) {
        .news-grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }
</style>


<!-- SECTION -->
<div class="section-wrapper">

    <h2 class="section-title">Raih Kepedulian Anak Yatim</h2>

    <div class="news-grid">

        <!-- CARD 1 -->
        <div class="news-card">
            <img src="" alt="">
            <h3>Apa Pentingnya Pendidikan Setara untuk Anak Yatim? Yuk Cek!</h3>
            <div class="news-meta">25 Juli 2024 / 7 kali dibaca</div>
            <p>Setiap anak berhak mendapatkan pendidikan yang layak, termasuk anak yatim.</p>
        </div>

        <!-- CARD 2 -->
        <div class="news-card">
            <img src="" alt="">
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="news-meta">14 Februari 2025 / 17 kali dibaca</div>
            <p>Fidyah untuk anak yatim tidak diperbolehkan jika...</p>
        </div>

        <!-- CARD 3 -->
        <div class="news-card">
            <img src="" alt="">
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="news-meta">14 Februari 2025 / 17 kali dibaca</div>
            <p>Fidyah untuk anak yatim tidak diperbolehkan jika...</p>
        </div>

        <!-- CARD 4 -->
        <div class="news-card">
            <img src="" alt="">
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="news-meta">14 Februari 2025 / 17 kali dibaca</div>
            <p>Fidyah untuk anak yatim tidak diperbolehkan jika...</p>
        </div>


        <!-- CARD 5 -->
        <div class="news-card">
            <img src="" alt="">
            <h3>Apa Pentingnya Pendidikan Setara untuk Anak Yatim? Yuk Cek!</h3>
            <div class="news-meta">25 Juli 2024 / 7 kali dibaca</div>
            <p>Setiap anak berhak mendapatkan pendidikan yang layak, termasuk anak yatim.</p>
        </div>

        <!-- CARD 6 -->
        <div class="news-card">
            <img src="" alt="">
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="news-meta">14 Februari 2025 / 17 kali dibaca</div>
            <p>Fidyah untuk anak yatim tidak diperbolehkan jika...</p>
        </div>

        <!-- CARD 7 -->
        <div class="news-card">
            <img src="" alt="">
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="news-meta">14 Februari 2025 / 17 kali dibaca</div>
            <p>Fidyah untuk anak yatim tidak diperbolehkan jika...</p>
        </div>

        <!-- CARD 8 -->
        <div class="news-card">
            <img src="" alt="">
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="news-meta">14 Februari 2025 / 17 kali dibaca</div>
            <p>Fidyah untuk anak yatim tidak diperbolehkan jika...</p>
        </div>

    </div>
</div>

<!-- dapatkan Pahala berlipat untuk berbagi kepada anak yatim -->
 <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background: #fff;
    }

    /* CONTAINER WRAPPER */
    .cta-wrapper {
        max-width: 1100px;
        margin: 40px auto;
        padding: 0 20px;
    }

    /* CTA BOX */
    .cta-box {
        background: #f5860a;
        padding: 50px 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0px 6px 14px rgba(0,0,0,0.15);
    }

    .cta-box h2 {
        font-size: 28px;
        font-weight: 700;
        color: white;
        margin: 0;
        line-height: 1.3;
        max-width: 60%;
    }

    /* BUTTON */
    .cta-btn {
        background: #2947ff;
        color: #fff;
        padding: 14px 26px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 6px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.15);
        white-space: nowrap;
    }

    .cta-btn:hover {
        background: #1f35cc;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .cta-box {
            flex-direction: column;
            text-align: center;
            gap: 20px;
        }

        .cta-box h2 {
            max-width: 100%;
        }
    }
</style>

<div class="cta-wrapper">
    <div class="cta-box">
        <h2>Dapatkan Pahala Berlipat dengan Berbagi untuk Anak Yatim</h2>

        <a href="#" class="cta-btn">
            Donasi Sekarang →
        </a>
    </div>
</div>

<!-- Berita -->
 <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background: #fff;
        margin: 0;
        padding: 0;
    }

    .content-wrapper {
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 20px;
        display: grid;
        grid-template-columns: 1.5fr 1fr;
        gap: 30px;
    }

    /* LEFT BIG CARD */
    .big-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .big-card img {
        width: 100%;
        height: 260px;
        object-fit: cover;
        background: #dcdcdc;
    }

    .big-card-body {
        padding: 15px 20px 20px 20px;
    }

    .big-card-body h3 {
        font-size: 18px;
        font-weight: 700;
        color: #222;
        margin: 0 0 10px 0;
    }

    .big-meta {
        font-size: 13px;
        color: #777;
    }

    /* RIGHT SMALL CARDS */
    .right-list {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .small-card {
        display: grid;
        grid-template-columns: 130px auto;
        gap: 20px;
        align-items: start;
    }

    .small-img {
        width: 130px;
        height: 90px;
        background: #dcdcdc;
        border-radius: 6px;
    }

    .small-card h4 {
        font-size: 16px;
        font-weight: 700;
        color: #222;
        margin: 0 0 6px 0;
        line-height: 1.3;
    }

    .small-meta {
        font-size: 13px;
        color: #777;
        margin-bottom: 6px;
    }

    .small-card p {
        font-size: 14px;
        color: #444;
        margin: 0;
        line-height: 1.4;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
        .content-wrapper {
            grid-template-columns: 1fr;
        }

        .small-card {
            grid-template-columns: 110px auto;
        }
    }
</style>

<div class="content-wrapper">

    <!-- LEFT BIG CARD -->
    <div class="big-card">
        <img src="" alt="">
        <div class="big-card-body">
            <h3>Bolehkah Menyalurkan Zakat untuk Anak Yatim? Ini Penjelasannya</h3>
            <div class="big-meta">14 Februari 2025 // Santoso</div>
        </div>
    </div>

    <!-- RIGHT SIDE SMALL CARDS -->
    <div class="right-list">

        <!-- SMALL CARD 1 -->
        <div class="small-card">
            <div class="small-img"></div>
            <div>
                <h4>Bolehkah Menyalurkan Zakat untuk Anak Yatim? Ini Penjelasannya</h4>
                <div class="small-meta">14 Februari 2025 // Santoso</div>
                <p>Zakat untuk anak yatim, apakah boleh? Zakat merupakan bagian dari rukun Islam.</p>
            </div>
        </div>

        <!-- SMALL CARD 2 -->
        <div class="small-card">
            <div class="small-img"></div>
            <div>
                <h4>Tata Cara Sholat Tahajud Lengkap dengan Keutamaannya</h4>
                <div class="small-meta">14 Februari 2025 // Abdul Roqib</div>
                <p>Ada satu sholat sunnah yang sangat dianjurkan untuk dikerjakan, bahkan kalau bisa...</p>
            </div>
        </div>

    </div>
</div>

<!-- Section Sedang Trending -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
    /* Reset font (tidak mengubah section lain) */
    .trending-section, 
    .trending-section * {
        font-family: 'Plus Jakarta Sans', sans-serif !important;
        box-sizing: border-box;
    }

    /* SECTION BACKGROUND — HANYA INI YANG PAKAI BG */
    .trending-section {
        width: 100%;
        background: linear-gradient(to right, #f6e7dd, #f0edcf);
        padding: 60px 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0;           /* tidak mengganggu section lain */
    }

    .trending-title {
        font-size: 32px;
        font-weight: 700;
        width: 100%;
        max-width: 1100px;
        text-align: left;
        margin-bottom: 40px;
        color: #222;
    }

    /* WRAPPER */
    .trending-content {
        width: 100%;
        max-width: 1100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 40px;
    }

    /* CARDS */
    .trending-cards {
        display: flex;
        gap: 25px;
    }

    .card {
        width: 290px;
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 6px 16px rgba(0,0,0,0.18);
        overflow: hidden;
    }

    .card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        background: #e8e8e8;
    }

    .card-body {
        padding: 15px 18px 20px;
    }

    .card-body h3 {
        font-size: 16px;
        font-weight: 700;
        margin: 0 0 8px 0;
        line-height: 1.4;
    }

    .meta {
        font-size: 13px;
        color: #777;
    }

    /* BUTTON */
    .btn-more {
        padding: 14px 30px;
        background: #2947ff;
        color: white;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        border-radius: 8px;
        white-space: nowrap;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        margin-right: 20px;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
        .trending-content {
            flex-direction: column;
            align-items: flex-start;
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .trending-cards {
            flex-direction: column;
        }
    }
</style>


<!-- SECTION TRENDING (HANYA INI YANG PUNYA BACKGROUND) -->
<div class="trending-section">

    <h2 class="trending-title">Sedang Trending</h2>

    <div class="trending-content">

        <!-- LEFT CARDS -->
        <div class="trending-cards">

            <div class="card">
                <img src="" alt="">
                <div class="card-body">
                    <h3>Bolehkah Menyalurkan Zakat untuk Anak Yatim? Ini Penjelasannya</h3>
                    <div class="meta">14 Februari 2025 /// Santoso</div>
                </div>
            </div>

            <div class="card">
                <img src="" alt="">
                <div class="card-body">
                    <h3>Bolehkah Menyalurkan Zakat untuk Anak Yatim? Ini Penjelasannya</h3>
                    <div class="meta">14 Februari 2025 /// Santoso</div>
                </div>
            </div>

        </div>

        <!-- BUTTON -->
        <a href="#" class="btn-more">Baca Selengkapnya →</a>

    </div>

</div>

<!-- Ziswaf Section -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        margin: 0;
        padding: 0;
    }

    /* SECTION */
    .ziswaf-section {
        padding: 60px 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* JUDUL RATA KIRI */
    .ziswaf-title {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 40px;
        text-align: left;            /* RATA KIRI */
        width: 100%;
        max-width: 1300px;           /* Agar sejajar dengan grid */
    }

    /* GRID WRAPPER */
    .ziswaf-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        max-width: 1300px;
        width: 100%;
        justify-items: center;
    }

    /* CARD */
    .ziswaf-card {
        width: 100%;
        max-width: 260px;
        text-align: left;
    }

    .ziswaf-img {
        width: 100%;
        height: 160px;
        background: #d9d9d9;
        border-radius: 6px;
        margin-bottom: 12px;
    }

    .ziswaf-card h3 {
        font-size: 16px;
        margin-bottom: 5px;
        font-weight: 700;
        text-decoration: underline;
        cursor: pointer;
    }

    .ziswaf-meta {
        font-size: 13px;
        color: #666;
        margin-bottom: 10px;
    }

    .ziswaf-desc {
        font-size: 14px;
        color: #444;
        line-height: 1.5;
    }

    /* RESPONSIVE */
    @media (max-width: 1100px) {
        .ziswaf-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 850px) {
        .ziswaf-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 580px) {
        .ziswaf-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<body>

<div class="ziswaf-section">

    <h2 class="ziswaf-title">Tentang Ziswaf</h2>

    <div class="ziswaf-grid">

        <!-- CARD 1 -->
        <div class="ziswaf-card">
            <div class="ziswaf-img"></div>
            <h3>Apa Pentingnya Pendidikan Setara untuk Anak Yatim? Yuk Cek!</h3>
            <div class="ziswaf-meta">25 Juli 2024 /// Tidak ada komentar</div>
            <div class="ziswaf-desc">
                Setiap anak berhak mendapatkan pendidikan yang layak, termasuk...
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="ziswaf-card">
            <div class="ziswaf-img"></div>
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="ziswaf-meta">14 Februari 2025 /// Tidak ada komentar</div>
            <div class="ziswaf-desc">
                Fidyah untuk anak yatim tidak diperbolehkan jika ia...
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="ziswaf-card">
            <div class="ziswaf-img"></div>
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="ziswaf-meta">14 Februari 2025 /// Tidak ada komentar</div>
            <div class="ziswaf-desc">
                Fidyah untuk anak yatim tidak diperbolehkan jika ia...
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="ziswaf-card">
            <div class="ziswaf-img"></div>
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="ziswaf-meta">14 Februari 2025 /// Tidak ada komentar</div>
            <div class="ziswaf-desc">
                Fidyah untuk anak yatim tidak diperbolehkan jika ia...
            </div>
        </div>

    </div>

</div>

<!-- Perdalam Ilmu Agama Section -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        margin: 0;
        padding: 0;
    }

    /* SECTION */
    .ziswaf-section {
        padding: 60px 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* JUDUL RATA KIRI */
    .ziswaf-title {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 40px;
        text-align: left;            /* RATA KIRI */
        width: 100%;
        max-width: 1300px;           /* Agar sejajar dengan grid */
    }

    /* GRID WRAPPER */
    .ziswaf-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        max-width: 1300px;
        width: 100%;
        justify-items: center;
    }

    /* CARD */
    .ziswaf-card {
        width: 100%;
        max-width: 260px;
        text-align: left;
    }

    .ziswaf-img {
        width: 100%;
        height: 160px;
        background: #d9d9d9;
        border-radius: 6px;
        margin-bottom: 12px;
    }

    .ziswaf-card h3 {
        font-size: 16px;
        margin-bottom: 5px;
        font-weight: 700;
        text-decoration: underline;
        cursor: pointer;
    }

    .ziswaf-meta {
        font-size: 13px;
        color: #666;
        margin-bottom: 10px;
    }

    .ziswaf-desc {
        font-size: 14px;
        color: #444;
        line-height: 1.5;
    }

    /* RESPONSIVE */
    @media (max-width: 1100px) {
        .ziswaf-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 850px) {
        .ziswaf-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 580px) {
        .ziswaf-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<body>

<div class="ziswaf-section">

    <h2 class="ziswaf-title">Perdalam Ilmu Agama</h2>

    <div class="ziswaf-grid">

        <!-- CARD 1 -->
        <div class="ziswaf-card">
            <div class="ziswaf-img"></div>
            <h3>Apa Pentingnya Pendidikan Setara untuk Anak Yatim? Yuk Cek!</h3>
            <div class="ziswaf-meta">25 Juli 2024 /// Tidak ada komentar</div>
            <div class="ziswaf-desc">
                Setiap anak berhak mendapatkan pendidikan yang layak, termasuk...
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="ziswaf-card">
            <div class="ziswaf-img"></div>
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="ziswaf-meta">14 Februari 2025 /// Tidak ada komentar</div>
            <div class="ziswaf-desc">
                Fidyah untuk anak yatim tidak diperbolehkan jika ia...
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="ziswaf-card">
            <div class="ziswaf-img"></div>
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="ziswaf-meta">14 Februari 2025 /// Tidak ada komentar</div>
            <div class="ziswaf-desc">
                Fidyah untuk anak yatim tidak diperbolehkan jika ia...
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="ziswaf-card">
            <div class="ziswaf-img"></div>
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="ziswaf-meta">14 Februari 2025 /// Tidak ada komentar</div>
            <div class="ziswaf-desc">
                Fidyah untuk anak yatim tidak diperbolehkan jika ia...
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="ziswaf-card">
            <div class="ziswaf-img"></div>
            <h3>Apa Pentingnya Pendidikan Setara untuk Anak Yatim? Yuk Cek!</h3>
            <div class="ziswaf-meta">25 Juli 2024 /// Tidak ada komentar</div>
            <div class="ziswaf-desc">
                Setiap anak berhak mendapatkan pendidikan yang layak, termasuk...
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="ziswaf-card">
            <div class="ziswaf-img"></div>
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="ziswaf-meta">14 Februari 2025 /// Tidak ada komentar</div>
            <div class="ziswaf-desc">
                Fidyah untuk anak yatim tidak diperbolehkan jika ia...
            </div>
        </div>

        <!-- CARD 7 -->
        <div class="ziswaf-card">
            <div class="ziswaf-img"></div>
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="ziswaf-meta">14 Februari 2025 /// Tidak ada komentar</div>
            <div class="ziswaf-desc">
                Fidyah untuk anak yatim tidak diperbolehkan jika ia...
            </div>
        </div>

        <!-- CARD 8 -->
        <div class="ziswaf-card">
            <div class="ziswaf-img"></div>
            <h3>Bolehkah Fidyah untuk Anak Yatim? Ini Penjelasan Lengkapnya!</h3>
            <div class="ziswaf-meta">14 Februari 2025 /// Tidak ada komentar</div>
            <div class="ziswaf-desc">
                Fidyah untuk anak yatim tidak diperbolehkan jika ia...
            </div>
        </div>

    </div>

</div>

</body>

<!-- HERO ZISWAF SECTION -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    .hero-ziswaf {
        width: 100%;
        padding: 80px 30px;
        background: linear-gradient(to bottom, #ffb703, #ea7317);
        display: flex;
        justify-content: center;
    }

    .hero-box {
        background: #f47f20;
        padding: 50px;
        border-radius: 18px;
        display: flex;
        align-items: center;
        gap: 30px;
        max-width: 1100px;
        width: 100%;
        color: white;
    }

    .hero-text {
        flex: 1;
    }

    .hero-text h2 {
        font-size: 34px;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 15px;
    }

    .hero-text p {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 25px;
        color: #f9f9f9;
    }

    .hero-btn {
        display: inline-block;
        background: #1d4ed8;
        padding: 12px 28px;
        border-radius: 8px;
        color: white;
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        transition: 0.2s;
    }

    .hero-btn:hover {
        opacity: 0.9;
        transform: translateY(-2px);
    }

    .hero-img {
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .hero-img img {
        width: 260px;
        object-fit: contain;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
        .hero-box {
            flex-direction: column;
            text-align: center;
        }
        .hero-text {
            text-align: center;
        }
    }
</style>

<section class="hero-ziswaf">
    <div class="hero-box">

        <!-- TEXT -->
        <div class="hero-text">
            <h2>Yuk, Bantu 5.000+ Anak Yatim Dapat Masa Depan Lebih Cerah!</h2>
            <p>
                Satu donasi kecil dari kamu, bisa jadi awal perubahan besar untuk mereka.  
                Jangan tunggu nanti. Lihat bagaimana sedikit yang kamu berikan, bisa berarti segalanya bagi anak-anak yatim.
            </p>
            <a href="#" class="hero-btn">Kirim Donasi Sekarang →</a>
        </div>

        <!-- IMAGE -->
        <div class="hero-img">
            <img src="https://i.ibb.co/0J9KkVC/kids.png" alt="anak yatim">
        </div>

    </div>
</section>

</body>
