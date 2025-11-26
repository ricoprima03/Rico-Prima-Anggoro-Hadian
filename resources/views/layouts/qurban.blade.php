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

<!-- Header Lazismu -->
<header style="background: #fff; border-bottom: 1px solid #eee; padding: 0; font-family: 'Plus Jakarta Sans', sans-serif;">
	<div style="display: flex; align-items: center; justify-content: space-between; max-width: 1200px; margin: 0 auto; height: 60px;">
		<!-- Logo -->
		<div style="display: flex; align-items: center;">
			<img src="/logo-lazismu.png" alt="Lazismu" style="height: 60px;">
		</div>
		<!-- Navigation -->
		<nav style="display: flex; align-items: center; gap: 18px; font-family: 'Plus Jakarta Sans', sans-serif;">
			<a href="#" style="color: #ff9900; text-decoration: none; font-size: 14px; font-weight: 500;">HOME</a>
			<a href="#" style="color: #ff9900; text-decoration: none; font-size: 14px; font-weight: 500;">TENTANG KAMI</a>
			<a href="#" style="color: #ff9900; text-decoration: none; font-size: 14px; font-weight: 500;">PROGRAM</a>
			<a href="#" style="color: #ff9900; text-decoration: none; font-size: 14px; font-weight: 500;">LAYANAN</a>
            <a href="{{ url('/qurban') }}" style="color: #ff9900; text-decoration: none; font-size: 14px; font-weight: 500;">BERITA</a>
			<a href="#" style="color: #ff9900; text-decoration: none; font-size: 14px; font-weight: 500;">BLOG</a>
			<!-- Tombol Oranye -->
			<button style="background: #ff9900; border: none; width: 40px; height: 40px; border-radius: 2px; margin-left: 10px; cursor: pointer;"></button>
		</nav>
	</div>
</header>

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

<!-- sedang Trending -->
 <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
 <style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        margin: 0;
        padding: 0;
    }

    /* SECTION BACKGROUND */
    .trending-section {
        background: linear-gradient(to right, #f6e7dd, #f0edcf);
        padding: 60px 40px;
        display: flex;
        flex-direction: column;
        align-items: center; /* <-- MEMBUAT SEMUA TENGAH */
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

    /* WRAPPER: CARD + BUTTON */
    .trending-content {
        width: 100%;
        max-width: 1100px; /* <-- MEMBATASI LEBAR, AGAR TIDAK MELEBAR KE KANAN */
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 40px;
    }

    /* LEFT CARDS */
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
        margin-right: 20px; /* <-- MENDEKATKAN BUTTON KE KIRI */
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


<!-- SECTION -->
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


