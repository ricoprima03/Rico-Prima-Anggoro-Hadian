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
<style>
    body {
        margin: 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* HEADER */
    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: #fff;
        border-bottom: 1px solid #eee;
        z-index: 9999;
    }

    .header-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo img {
        height: 100px;
    }

    /* NAV MENU */
    nav {
        display: flex;
        align-items: center;
        gap: 25px;
    }

    nav a {
        color: #ff9900;
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
    }

    /* SEARCH BUTTON */
    .search-btn {
        width: 42px;
        height: 42px;
        background: #ff9900;
        border: none;
        border-radius: 2px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search-btn img {
        width: 22px;
        height: 22px;
    }

    /* POPUP SEARCH */
    .search-popup {
        position: fixed;
        top: 100px;
        right: 20px;
        background: white;
        border: 1px solid #ff9900;
        border-radius: 6px;
        padding: 15px;
        width: 250px;
        display: none;
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        z-index: 99999;
    }

    .search-popup input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
    }

    /* MOBILE BURGER MENU */
    .burger {
        width: 35px;
        height: 25px;
        display: none;
        cursor: pointer;
        flex-direction: column;
        justify-content: space-between;
    }

    .burger span {
        height: 4px;
        background: #ff9900;
        border-radius: 2px;
    }

    /* MENU MOBILE DROPDOWN */
    .mobile-menu {
        display: none;
        flex-direction: column;
        background: white;
        padding: 20px;
        border-top: 1px solid #eee;
    }

    .mobile-menu a {
        padding: 10px 0;
        font-size: 16px;
    }

    /* RESPONSIVE RULES */
    @media (max-width: 900px) {
        nav {
            display: none;
        }

        .burger {
            display: flex;
        }

        .mobile-menu.show {
            display: flex;
        }
    }
</style>
</head>
<body>

<!-- HEADER -->
<header>
    <div class="header-container">

        <!-- LOGO -->
        <div class="logo">
            <img src="/logo-lazismu.png" alt="Lazismu">
        </div>

        <!-- NAVIGATION -->
        <nav>
            <a href="#">HOME</a>
            <a href="{{ url('/struktur-organisasi') }}">TENTANG KAMI</a>
            <a href="#">PROGRAM</a>
            <a href="#">LAYANAN</a>
            <a href="{{ url('/qurban') }}">BERITA</a>
            <a href="#">BLOG</a>

            <button class="search-btn" id="open-search">
                <img src="/search-icon.png-removebg-preview.png" alt="Search">
            </button>
        </nav>

        <!-- BURGER MENU -->
        <div class="burger" id="burger-menu">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div class="mobile-menu" id="mobile-nav">
        <a href="#">HOME</a>
        <a href="{{ url('/struktur-organisasi') }}">TENTANG KAMI</a>
        <a href="#">PROGRAM</a>
        <a href="#">LAYANAN</a>
        <a href="{{ url('/qurban') }}">BERITA</a>
        <a href="#">BLOG</a>

        <button class="search-btn" id="open-search-mobile" style="margin-top: 10px;">
            <img src="/search-icon.png-removebg-preview.png" alt="Search">
        </button>
    </div>
</header>

<div style="height: 110px;"></div>

<!-- SEARCH POPUP -->
<div class="search-popup" id="search-popup">
    <input type="text" placeholder="Cari sesuatu...">
</div>

<script>
    const searchBtn = document.getElementById("open-search");
    const searchBtnMobile = document.getElementById("open-search-mobile");
    const searchPopup = document.getElementById("search-popup");

    const burger = document.getElementById("burger-menu");
    const mobileMenu = document.getElementById("mobile-nav");

    // SEARCH POPUP OPEN
    function openSearch() {
        searchPopup.style.display = "block";
    }

    searchBtn?.addEventListener("click", openSearch);
    searchBtnMobile?.addEventListener("click", openSearch);

    // CLICK OUTSIDE TO CLOSE SEARCH
    document.addEventListener("click", function(e) {
        if (!searchPopup.contains(e.target) && !searchBtn.contains(e.target) && !searchBtnMobile.contains(e.target)) {
            searchPopup.style.display = "none";
        }
    });

    // BURGER MENU TOGGLE
    burger.addEventListener("click", () => {
        mobileMenu.classList.toggle("show");
    });

    // CLOSE MENU WHEN CLICK OUTSIDE
    document.addEventListener("click", function(e) {
        if (!burger.contains(e.target) && !mobileMenu.contains(e.target)) {
            mobileMenu.classList.remove("show");
        }
    });
</script>

<!-- ====== SECTION REKENING ====== -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .rekening-section {
        font-family: 'Plus Jakarta Sans', sans-serif;
        width: 100%;
        padding: 40px 20px;
        text-align: center;
    }

    .rekening-section h2 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 25px;
        color: #333;
    }

    .rekening-wrapper {
        max-width: 750px;
        margin: 0 auto 40px;
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .rekening-card {
        background: #fff url('https://i.ibb.co/fS1PR2s/bg-pattern.png') no-repeat right center / 35%;
        border-radius: 10px;
        padding: 25px 28px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 18px;
        border: 1px solid #efefef;
    }

    .rekening-card:last-child {
        margin-bottom: 0;
    }

    .rekening-info p {
        text-align: left;
        margin: 3px 0;
        color: #333;
    }

    .rekening-info .nama {
        font-size: 13px;
        opacity: 0.7;
    }

    .rekening-info .nomor {
        font-size: 19px;
        font-weight: 700;
    }

    .rekening-logo img {
        width: 130px;
        object-fit: contain;
    }

    /* RESPONSIVE */
    @media (max-width: 600px) {
        .rekening-card {
            flex-direction: column;
            gap: 10px;
            text-align: center;
        }
        .rekening-info p {
            text-align: center;
        }
    }
</style>


<!-- === REKENING INFAK & SEDEKAH === -->
<section class="rekening-section">

    <h2>Nomor Rekening Infak dan Sedekah</h2>

    <div class="rekening-wrapper">

        <!-- MUAMALAT -->
        <div class="rekening-card">
            <div class="rekening-info">
                <p class="nama">a.n lazismu DIY</p>
                <p class="nomor">53 2000 8000</p>
            </div>
            <div class="rekening-logo">
                <img src="muamalat.png" alt="Muamalat">
            </div>
        </div>

        <!-- BPD -->
        <div class="rekening-card">
            <div class="rekening-info">
                <p class="nama">a.n lazismu DIY</p>
                <p class="nomor">801 211 017964</p>
            </div>
            <div class="rekening-logo">
                <img src="BPD_Syariah.png" alt="BPD DIY">
            </div>
        </div>

        <!-- BCA SYARIAH -->
        <div class="rekening-card">
            <div class="rekening-info">
                <p class="nama">a.n lazismu DIY</p>
                <p class="nomor">04 6818 1912</p>
            </div>
            <div class="rekening-logo">
                <img src="Bca.png" alt="BCA Syariah">
            </div>
        </div>

    </div>


    <!-- === REKENING ZAKAT === -->
    <h2>Nomor Rekening Zakat</h2>

    <div class="rekening-wrapper">

        <div class="rekening-card">
            <div class="rekening-info">
                <p class="nama">a.n lazismu DIY</p>
                <p class="nomor">801 211 017965</p>
            </div>
            <div class="rekening-logo">
                <img src="BPD_Syariah.png" alt="BPD Syariah">
            </div>
        </div>

    </div>

</section>

<!-- ====== SECTION QRIS ====== -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .qris-section {
        font-family: 'Plus Jakarta Sans', sans-serif;
        width: 100%;
        padding: 40px 20px 60px;
        text-align: center;
    }

    .qris-section img.qris-title {
        width: 250px;
        margin-bottom: 25px;
        opacity: 0.9;
    }

    .qris-wrapper {
        max-width: 750px;
        margin: 0 auto;
        background: #fff;
        padding: 25px;
        border-radius: 14px;
        box-shadow: 0 4px 16px rgba(0,0,0,0.12);
        margin-bottom: 28px;
    }

    .qris-card {
        background: #fff url('https://i.ibb.co/fS1PR2s/bg-pattern.png') no-repeat right center / 38%;
        border-radius: 10px;
        padding: 28px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 1px solid #efefef;
        margin-bottom: 18px;
    }

    .qris-card:last-child {
        margin-bottom: 0;
    }

    .qris-card img.qr {
        width: 150px;
        border-radius: 8px;
    }

    .qris-card img.bank-logo {
        width: 130px;
        object-fit: contain;
    }

    /* RESPONSIVE */
    @media (max-width: 650px) {
        .qris-card {
            flex-direction: column;
            text-align: center;
            gap: 20px;
        }
        .qris-card img.bank-logo {
            width: 100px;
        }
    }
</style>

<section class="qris-section">

    <!-- QRIS TITLE -->
    <img class="qris-title" src="logo_qris.png" alt="QRIS Logo">

    <!-- CARD WRAPPER -->
    <div class="qris-wrapper">

        <!-- QR BPD DIY -->
        <div class="qris-card">
            <img class="qr" src="qris_bpd.png" alt="QRIS BPD DIY">
            <img class="bank-logo" src="BPD_Syariah.png" alt="Bank BPD DIY Syariah">
        </div>

        <!-- QR BCA SYARIAH -->
        <div class="qris-card">
            <img class="qr" src="qris_bca.png" alt="QRIS BCA Syariah">
            <img class="bank-logo" src="Bca.png" alt="BCA Syariah Logo">
        </div>

    </div>

</section>

<!-- ==== FOOTER NEW DESIGN ==== -->
<style>
    .footer {
        width: 100%;
        background: linear-gradient(180deg, #f59e3b 0%, #ea7b0c 100%);
        padding: 80px 60px 35px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: #fff;
    }

    .footer-container {
        max-width: 1250px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.3fr 1fr 1fr;
        gap: 60px;
        align-items: start;
    }

    .footer h3 {
        font-weight: 800;
        font-size: 22px;
        margin-bottom: 18px;
    }

    .footer p,
    .footer a {
        font-size: 15px;
        line-height: 1.7;
        color: #fff;
        text-decoration: none;
        opacity: 0.95;
    }

    .footer a:hover {
        opacity: 1;
        font-weight: 600;
    }

    /* ---- SOCIAL ---- */
    .footer-social {
        display: flex;
        flex-direction: column;
        gap: 14px;
        margin-bottom: 25px;
    }

    .social-item {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .social-item img {
        width: 28px;
        height: 28px;
        object-fit: contain;
        filter: brightness(0) invert(1);
    }

    /* ---- WARNING BOX ---- */
    .footer-warning {
        background: rgba(0, 0, 0, 0.75);
        padding: 22px 26px;
        border-radius: 14px;
        font-size: 14px;
        line-height: 1.6;
        margin-top: 18px;
    }

    /* ---- COPYRIGHT ---- */
    .footer-bottom {
        text-align: center;
        font-size: 14px;
        padding-top: 35px;
        opacity: 0.9;
    }

    /* ---- RESPONSIVE ---- */
    @media (max-width: 900px) {
        .footer {
            padding: 60px 30px 30px;
        }

        .footer-container {
            grid-template-columns: 1fr;
            gap: 45px;
        }
    }
</style>

<footer class="footer">

    <div class="footer-container">

        <!-- KOLOM 1 -->
        <div>
            <h3>Lazismu Daerah Istimewa Yogyakarta</h3>
            <p>
                LAZISMU adalah lembaga amil zakat nasional dengan SK Menteri Agama RI No. 90 Tahun 2022,
                berkhidmat dalam pemberdayaan masyarakat melalui pendayagunaan zakat, infak, dan dana
                kedermawanan lainnya.
            </p>

            <h3 style="margin-top:28px;">Kantor</h3>
            <p>
                Jl. Gedongkuning No.152, RT.41, Rejowinangun, Kec. Kotagede,<br>
                Kota Yogyakarta, Daerah Istimewa Yogyakarta
            </p>
        </div>

        <!-- KOLOM 2 -->
        <div>
            <h3>Tentang Kami</h3>
            <p><a href="#">Latar Belakang</a></p>
            <p><a href="#">Visi & Misi</a></p>
            <p><a href="#">Struktur Pengelola</a></p>
            <p><a href="#">Kebijakan Strategis</a></p>
            <p><a href="#">Laporan</a></p>
            <p><a href="#">Mitra</a></p>
            <p><a href="#">Daftar Rekening</a></p>
            <p><a href="#">Donasi Online</a></p>
        </div>

        <!-- KOLOM 3 -->
        <div>

            <div class="footer-social">

                <div class="social-item">
                    <img src="ig.png">
                    <p>lazismudiy</p>
                </div>

                <div class="social-item">
                    <img src="ig.png">
                    <p>jalanekabaikan.id</p>
                </div>

                <div class="social-item">
                    <img src="wa.png">
                    <p>+62 895–3635–20118</p>
                </div>

                <div class="social-item">
                    <img src="fb.png">
                    <p>Lazismu DIY</p>
                </div>

                <div class="social-item">
                    <img src="x_twiter.png">
                    <p>Lazismu DIY</p>
                </div>

            </div>

            <div class="footer-warning">
                Dana yang didonasikan melalui Lazismu Peduli bukan bersumber dan bukan untuk tujuan pencucian uang
                (money laundering), termasuk terorisme maupun tindak kejahatan lainnya.
            </div>

        </div>

    </div>

    <div class="footer-bottom">
        © 2023 Lazismu D.I. Yogyakarta — All Rights Reserved.
    </div>

</footer>