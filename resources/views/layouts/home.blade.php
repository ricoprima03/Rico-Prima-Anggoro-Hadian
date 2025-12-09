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

<!-- ==== HEADER ==== -->
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

<!-- Banner Qurban -->
<div style="width: 100%; display: flex; justify-content: center; margin-top: 24px;">
	<img src="/qurban-banner.jpeg" alt="Qurban Banner" style="max-width: 1000px; width: 100%; border-radius: 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.08);">
</div>

<!-- Info Rendangmu -->
<div style="
    width: 100%; 
    display: flex; 
    flex-direction: column; 
    align-items: center; 
    justify-content: center; 
    margin-top: 32px; 
    background: #ffb347; 
    box-shadow: 0 2px 12px rgba(0,0,0,0.08); 
    padding: 40px 5vw 40px 5vw;
">

    <div style="
        display: flex; 
        align-items: center; 
        justify-content: center; 
        max-width: 1000px; 
        gap: 32px;
        flex-wrap: wrap;
        width: 100%;
    ">

        <!-- Gambar di kiri -->
        <img src="/hewan_qurban-removebg-preview.png" 
            alt="Info Rendangmu" 
            style="max-width: 400px; width: 100%; flex: 1 1 300px;">

        <!-- Teks di kanan -->
        <div style="max-width: 600px; width: 100%; flex: 1 1 300px; text-align: left;">
            <h2 style="
                font-size: 2rem; 
                font-weight: bold; 
                margin-bottom: 16px; 
                color: #222; 
                font-family: 'Plus Jakarta Sans', sans-serif;
            ">
                Apa itu Rendangmu?
            </h2>

            <p style="
                font-size: 1.1rem; 
                color: #222; 
                font-family: 'Plus Jakarta Sans', sans-serif; 
                line-height: 1.7; 
                margin-bottom: 0;
            ">
                Lazismu memfasilitasi sahabat untuk bisa berqurban hebat dengan mudah, pesan qurbannya via online, 
                kami uruskan dari mulai penyembelihan hingga pendistribusian qurbannya. Dengan Rendangmu, daging 
                qurban yang telah disembelih secara syariah kemudian diolah menjadi kornet yang tahan hingga 3 tahun 
                atau rendang dan kari yang tahan hingga 2 tahun. Pendistribusiannya bisa sampai pelosok dan menjadi 
                persediaan pangan untuk daerah bencana.
            </p>

            <a href="{{ url('/Pembayaran') }}" style="
                display: inline-block; 
                margin-top: 28px; 
                padding: 14px 36px; 
                background: #ff9900; 
                color: #fff; 
                font-size: 1.1rem; 
                font-weight: bold; 
                border: none; 
                border-radius: 8px; 
                box-shadow: 0 2px 8px rgba(0,0,0,0.08); 
                text-decoration: none; 
                font-family: 'Plus Jakarta Sans', sans-serif; 
                transition: background 0.2s;
            ">
                Donasi Sekarang
            </a>
        </div>

    </div>
</div>


<!-- Qurban Syariah -->
<div style="width: 100%; margin-top: 0;">
    <div style="
        background: #fff475; 
        border-radius: 0; 
        box-shadow: 0 2px 12px rgba(0,0,0,0.08); 
        padding: 40px 5vw 32px 5vw; 
        width: 100%; 
        display: flex; 
        align-items: center; 
        justify-content: center;
        gap: 32px;
        flex-wrap: wrap;
    ">
        
        <!-- Gambar di kiri -->
        <img src="/image_1.png" 
            alt="Qurban Syariah" 
            style="max-width: 400px; width: 100%; flex: 1 1 300px;">

        <!-- Teks di kanan -->
        <div style="max-width: 700px; width: 100%; flex: 1 1 300px;">
            <h2 style="
                font-size: 2rem; 
                font-weight: bold; 
                margin-bottom: 16px; 
                color: #222; 
                font-family: 'Plus Jakarta Sans', sans-serif;
            ">
                Qurban Sesuai Syariah dan Manfaatnya Lebih Luas
            </h2>

            <p style="
                font-size: 1.1rem; 
                color: #222; 
                font-family: 'Plus Jakarta Sans', sans-serif; 
                line-height: 1.7; 
                margin-bottom: 0;
            ">
                Rendangmu Luaskan manfaat Qurban Anda Dengan Rendangmu, daging qurban dioptimalisasi dengan diolah 
                menjadi kornet atau rendang sehingga pendistribusiannya lebih luas. Sehingga daging qurban tidak 
                hanya dirasakan oleh warga kota saja. Rendangmu distribusikan untuk masyarakat yang membutuhkan di 
                berbagai pelosok Indonesia, hingga ke wilayah rawan pangan maupun terkena bencana.
            </p>

            <a href="{{ url('/Pembayaran') }}" style="
                display: inline-block; 
                margin-top: 28px; 
                padding: 14px 36px; 
                background: #ff9900; 
                color: #fff; 
                font-size: 1.1rem; 
                font-weight: bold; 
                border: none; 
                border-radius: 8px; 
                box-shadow: 0 2px 8px rgba(0,0,0,0.08); 
                text-decoration: none; 
                font-family: 'Plus Jakarta Sans', sans-serif; 
                transition: background 0.2s;
            ">
                Donasi Sekarang
            </a>
        </div>

    </div>
</div>

<!-- Video -->
<div style="width: 100%; display: flex; justify-content: center; margin-top: 24px;">

    <a href="https://youtu.be/tCZNPkouUEo?si=HuPsF2oZxNXdYeRk" 
       target="_blank" 
       style="display: inline-block;">

        <img src="/teaser_video.png" 
             alt="teaser video rendangmu" 
             style="max-width: 1000px; width: 100%; border-radius: 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.08); cursor: pointer;">
    </a>

</div>

<!-- ==== SECTION: Bagaimana Rendangmu di Proses ==== -->
<style>
    .timeline-section {
        width: 100%;
        max-width: 1100px;
        margin: 0 auto;
        padding: 40px 20px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        text-align: center;
    }

    /* LOGO DI ATAS JUDUL */
    .timeline-logo {
        width: 50px;
        margin: 0 auto 15px auto;
        display: block;
    }

    .timeline-title {
        font-size: 2rem;
        font-weight: 700;
        color: #d88b19;
        margin-bottom: 40px;
    }

    .timeline-container {
        display: flex;
        width: 100%;
        position: relative;
        text-align: left;
    }

    /* === GARIS VERTIKAL SUDAH DIPASIN === */
    .timeline-line {
        width: 2px;
        background: #ff9900;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 167px; /* ← INI SUDAH DIPASIN AGAR GARIS PAS DI TENGAH TITIK */
        z-index: 1;
    }

    /* KIRI: NAMA STEP */
    .timeline-left {
        width: 180px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding-top: 20px;
    }

    .timeline-left .step {
        font-size: 1rem;
        margin-bottom: 70px;
        color: #555;
        position: relative;
        text-align: right;
        padding-right: 20px;
    }

    /* TITIK */
    .timeline-left .step::after {
        content: "";
        width: 12px;
        height: 12px;
        background: #ff9900;
        border-radius: 50%;
        position: absolute;
        right: -7px;
        top: 5px;
        z-index: 3;
    }

    /* KANAN: KARTU */
    .timeline-right {
        flex: 1;
        padding-left: 80px;
    }

    .timeline-card {
        background: #ffffff;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.1);
        margin-bottom: 40px;
        display: flex;
        align-items: center;
        gap: 20px;
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s ease;
    }

    .timeline-card.show {
        opacity: 1;
        transform: translateY(0);
    }

    .timeline-card img {
        width: 70px;
        height: 70px;
        object-fit: contain;
    }

    .timeline-card .text h3 {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 6px;
        color: #222;
    }

    .timeline-card .text p {
        font-size: 1rem;
        color: #444;
        margin: 0;
        line-height: 1.6;
    }

    /* RESPONSIVE */
    @media(max-width: 768px) {
        .timeline-container {
            flex-direction: column;
            text-align: center;
        }

        .timeline-left {
            width: 100%;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
        }

        .timeline-left .step {
            width: 100%;
            text-align: center;
            padding-right: 0;
        }

        .timeline-left .step::after {
            display: none;
        }

        .timeline-line {
            display: none;
        }

        .timeline-right {
            padding-left: 0;
        }

        .timeline-card {
            flex-direction: column;
        }
    }
</style>

<div class="timeline-section">

    <img src="logo_emblem.png" alt="Logo Rendangmu" class="timeline-logo">

    <h2 class="timeline-title">Bagaimana Rendangmu di Proses?</h2>

    <div class="timeline-container">

        <div class="timeline-line"></div>

        <div class="timeline-left">
            <div class="step">Narahubung</div>
            <div class="step">Rekapitulasi</div>
            <div class="step">Pengadaan</div>
            <div class="step">Pemotongan</div>
            <div class="step">Pengalengan</div>
            <div class="step">Distribusi</div>
            <div class="step">Siap Santap</div>
        </div>

        <div class="timeline-right">

            <div class="timeline-card">
                <img src="/callcanter.png" alt="">
                <div class="text">
                    <h3>Call Center</h3>
                    <p>Hubungi narahubung melalui 0851-6170-2078</p>
                </div>
            </div>

            <div class="timeline-card">
                <img src="/rekap.png" alt="">
                <div class="text">
                    <h3>Rekapitulasi</h3>
                    <p>Narahubung akan mencatat jumlah qurban yang akan ditunaikan.</p>
                </div>
            </div>

            <div class="timeline-card">
                <img src="/icon_sapi.png" alt="">
                <div class="text">
                    <h3>Pengadaan Hewan Qurban</h3>
                    <p>Pesanan qurban yang masuk akan dibelanjakan sapi terbaik, yang telah dinyatakan sehat oleh PDHI Korwil Jawa Timur.</p>
                </div>
            </div>

            <div class="timeline-card">
                <img src="/daging.png" alt="">
                <div class="text">
                    <h3>Pemotongan Melalui RPH</h3>
                    <p>Sapi disembelih melalui rumah potong yang telah ditentukan sehingga daging terjaga dengan Aman, Sehat, Utuh dan Halal (ASUH).</p>
                </div>
            </div>

            <div class="timeline-card">
                <img src="/gudang.png" alt="">
                <div class="text">
                    <h3>Pengalengan</h3>
                    <p>Daging kemudian dibawa ke pabrik untuk dijadikan rendang dalam kemasan kaleng. Proses pengalangan memakan waktu Kurang lebih 2 bulan.</p>
                </div>
            </div>

            <div class="timeline-card">
                <img src="/truk.png" alt="">
                <div class="text">
                    <h3>Distribusi</h3>
                    <p>Daging siap didistribusikan kepada sohibul qurban.</p>
                </div>
            </div>

            <div class="timeline-card">
                <img src="/kaleng.png" alt="">
                <div class="text">
                    <h3>Siap Santap</h3>
                    <p>Produk Rendangmu telah diterima siap untuk dinikmati.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    const cards = document.querySelectorAll(".timeline-card");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, { threshold: 0.2 });

    cards.forEach(card => observer.observe(card));
</script>



<!-- ==== SECTION: Mengapa Harus Qurban di Rendangmu ==== -->
<style>
    .benefit-section {
        width: 100%;
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* LOGO DI ATAS JUDUL */
    .benefit-logo {
        width: 50px;
        margin: 0 auto 15px auto;
        display: block;
    }

    .benefit-title {
        font-size: 2rem;
        font-weight: 700;
        color: #000;
        margin-bottom: 40px;
    }

    .benefit-container {
        display: flex;
        justify-content: space-between;
        gap: 30px;
        flex-wrap: wrap;
    }

    .benefit-item {
        width: 180px;
        text-align: center;
        opacity: 0;
        transform: translateY(30px);
        transition: all 1.2s ease;
    }

    .benefit-item.show {
        opacity: 1;
        transform: translateY(0);
    }

    .benefit-item:nth-child(1).show { transition-delay: 0.2s; }
    .benefit-item:nth-child(2).show { transition-delay: 0.4s; }
    .benefit-item:nth-child(3).show { transition-delay: 0.6s; }
    .benefit-item:nth-child(4).show { transition-delay: 0.8s; }
    .benefit-item:nth-child(5).show { transition-delay: 1s; }

    .benefit-icon {
        width: 80px;
        height: 80px;
        background: #ff9900;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto 16px auto;
    }

    .benefit-icon img {
        width: 45px;
        height: 45px;
        object-fit: contain;
    }

    .benefit-title-small {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 6px;
    }

    .benefit-desc {
        font-size: 0.95rem;
        color: #444;
        line-height: 1.4;
    }

    @media(max-width: 768px) {
        .benefit-container {
            justify-content: center;
        }
        .benefit-item {
            width: 45%;
        }
    }

    @media(max-width: 480px) {
        .benefit-item {
            width: 100%;
        }
    }
</style>

<div class="benefit-section">

    <!-- LOGO / FOTO DI ATAS JUDUL -->
    <img src="logo_emblem.png" alt="logo_emblem" class="benefit-logo">

    <h2 class="benefit-title">Mengapa Harus Qurban di Rendangmu?</h2>

    <div class="benefit-container">

        <div class="benefit-item">
            <div class="benefit-icon">
                <img src="/jabat_tangan.png" alt="">
            </div>
            <div class="benefit-title-small">AMANAH</div>
            <div class="benefit-desc">
                Shohibul qurban akan menerima dokumentasi saat penyembelihan dan penyaluran
            </div>
        </div>

        <div class="benefit-item">
            <div class="benefit-icon">
                <img src="/c7c456cf-2566-4c34-8707-ff4910c1e63a-removebg-preview.png" alt="">
            </div>
            <div class="benefit-title-small">PROFESIONAL</div>
            <div class="benefit-desc">
                Ditangani vendor berkompeten dan bersertifikat
            </div>
        </div>

        <div class="benefit-item">
            <div class="benefit-icon">
                <img src="/7b8982e8-78db-4afb-9870-72b0f2777493-removebg-preview.png" alt="">
            </div>
            <div class="benefit-title-small">HIGIENIS</div>
            <div class="benefit-desc">
                Perijinan RendangMU teregistrasi melalui BPOM RI
            </div>
        </div>

        <div class="benefit-item">
            <div class="benefit-icon">
                <img src="/a3838f4f-7e27-4d2f-bc7d-e63464aff584-removebg-preview.png" alt="">
            </div>
            <div class="benefit-title-small">TEPAT SASARAN</div>
            <div class="benefit-desc">
                Pendistribusian merata ke beberapa sektor termasuk wilayah tertinggal, terdepan, terluar
            </div>
        </div>

        <div class="benefit-item">
            <div class="benefit-icon">
                <img src="/0d1163ec-5ff5-4efa-b0a3-2efa7de425a9-removebg-preview.png" alt="">
            </div>
            <div class="benefit-title-small">MANFAAT BERKELANJUTAN</div>
            <div class="benefit-desc">
                Selama 5 tahun turut berpartisipasi dalam program kemanusian
            </div>
        </div>

    </div>
</div>


<!-- ==== SCROLL REVEAL SCRIPT ==== -->
<script>
    const items = document.querySelectorAll('.benefit-item');

    const showOnScroll = () => {
        items.forEach(item => {
            const rect = item.getBoundingClientRect();
            if (rect.top < window.innerHeight - 80) {
                item.classList.add('show');
            }
        });
    };

    // Run saat scroll
    window.addEventListener('scroll', showOnScroll);

    // Run saat halaman pertama kali tampil (jika elemen sudah terlihat)
    showOnScroll();
</script>

<!-- ==== SECTION: Penyaluran Rendangmu ==== -->
<style>
    .distribution-section {
        width: 100%;
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
        padding: 40px 20px;
        background: #ffffff;
        position: relative;
    }

    .distribution-title {
        font-size: 2rem;
        font-weight: 700;
        color: #000;
        margin-bottom: 6px;
    }

    .distribution-subtitle {
        font-size: 1rem;
        color: #555;
        margin-bottom: 30px;
    }

    /* Background map */
    .map-wrapper {
        width: 100%;
        max-width: 1100px;
        margin: 0 auto;
        position: relative;
    }

    .map-wrapper img {
        width: 100%;
        opacity: 0.3;
    }

    /* Container angka */
    .stats-container {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        max-width: 850px;
        display: flex;
        justify-content: space-between;
        padding: 0 20px;
    }

    .stat-item {
        text-align: center;
        color: #000;

        /* ANIMASI (awal) */
        opacity: 0;
        transform: translateY(25px);
        transition: all 1.3s ease;
    }

    /* Saat muncul */
    .stat-item.show {
        opacity: 1;
        transform: translateY(0);
    }

    /* Delay antar item */
    .stat-item:nth-child(1).show { transition-delay: 0.2s; }
    .stat-item:nth-child(2).show { transition-delay: 0.4s; }
    .stat-item:nth-child(3).show { transition-delay: 0.6s; }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .stat-label {
        font-size: 1rem;
        color: #333;
    }

    /* RESPONSIVE */
    @media(max-width: 768px) {
        .stats-container {
            flex-direction: column;
            gap: 16px;
            position: static;
            transform: none;
            margin-top: -20px;
        }

        .map-wrapper img {
            opacity: 0.15;
        }

        .stat-number {
            font-size: 1.8rem;
        }
    }
</style>

<div class="distribution-section">

    <h2 class="distribution-title">Penyaluran Rendangmu</h2>
    <p class="distribution-subtitle">Penyaluran Rendangmu tahun 2024</p>

    <div class="map-wrapper">
        <img src="/background-peta-indonesia-abu-silver-putih_852799-39.jpg" alt="Peta Indonesia">

        <div class="stats-container">

            <div class="stat-item">
                <div class="stat-number">16</div>
                <div class="stat-label">Wilayah</div>
            </div>

            <div class="stat-item">
                <div class="stat-number">207.235</div>
                <div class="stat-label">Paket Rendangmu</div>
            </div>

            <div class="stat-item">
                <div class="stat-number">103.618</div>
                <div class="stat-label">Penerima Manfaat</div>
            </div>

        </div>
    </div>

</div>

<script>
    const stats = document.querySelectorAll(".stat-item");

    const observerStats = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, { threshold: 0.3 });

    stats.forEach(stat => observerStats.observe(stat));
</script>


<!-- ==== SECTION: Pilih Rendangmu ==== -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        margin: 0;
        padding: 0;
        background: #ffffff;
    }

    .orange-section {
        background: #f8f8f8ff; /* DIGANTI PUTIH */
        text-align: center;
        padding: 60px 20px;
    }

    /* LOGO DI ATAS JUDUL */
    .logo-top {
        width: 50px;
        margin-bottom: 10px;
    }

    .orange-section h1 {
        font-size: 32px;
        font-weight: 800;
        color: #222;
        margin-bottom: 10px;
    }

    .orange-section p {
        font-size: 18px;
        color: #555;
        margin-top: 0;
    }

    /* WRAPPER CARD */
    .card-wrapper {
        margin-top: 40px;
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
    }

    /* CARD STYLE */
    .card {
        width: 320px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0px 8px 18px rgba(0,0,0,0.12);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        cursor: pointer;

        /* ANIMASI */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* ZOOM SAAT HOVER */
    .card:hover {
        transform: scale(1.06);
        box-shadow: 0px 14px 25px rgba(0,0,0,0.20);
    }

    .card img {
        width: 100%;
        display: block;
    }

    .card-body {
        padding: 20px;
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-body h3 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #222;
    }

    .card-body p {
        margin: 0;
        font-size: 15px;
        line-height: 1.5;
        color: #333;
    }

    .btn-donasi {
        margin-top: 20px;
        padding: 14px 0;
        background: #f9a825;
        color: white;
        font-size: 16px;
        font-weight: 700;
        border-radius: 8px;
        text-decoration: none;
        display: block;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    .btn-donasi:hover {
        background: #ffb300;
    }
</style>


<!-- SECTION PUTIH -->
<div class="orange-section">

    <!-- LOGO DI ATAS TULISAN -->
    <img src="logo_emblem.png" alt="Logo" class="logo-top">

    <h1>Pilih RendangMu Anda Sekarang</h1>
    <p>Pilih hewan qurban Anda, dan Berdayakan Desa dengan Berqurban</p>

    <div class="card-wrapper">

        <!-- CARD KAMBING -->
        <div class="card">
            <img src="/Rendangmu.png" alt="Kambing">
            <div class="card-body">
                <h3>Rendangmu Sapi</h3>
                <p>Rp. 21.000.000,-<br>
                    - Hak Kemasan 420 Kaleng <br>
                    - Hak Shohibul Qurban 140 Kaleng
                </p>
                <a href="{{ url('/tunaikansekarangkambing') }}" class="btn-donasi">Tunaikan Langsung</a>
            </div>
        </div>

        <!-- CARD SAPI -->
        <div class="card">
            <img src="/Rendangmu_1.png" alt="Rendangmu Sapi">
            <div class="card-body">
                <h3>Rendangmu Sapi 1/7</h3>
                <p>Rp. 3.000.000,-<br>
                    - Hak Kemasan 60 Kaleng <br>
                    - Hak Shohibul Qurban 20 Kaleng
                </p>
                <a href="{{ url('/tunaikanSekarangSapi') }}" class="btn-donasi">Tunaikan Langsung</a>
            </div>
        </div>

    </div>
</div>


<!-- ==== SECTION: Testimoni Pequrban ==== -->
<style>
    .testimoni-section {
        position: relative;
        background: url('Rectangle_33.png') center/cover no-repeat;
        padding: 60px 20px;
        text-align: center;
        overflow: hidden;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .testimoni-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.3); /* overlay 30% */
        z-index: 1;
    }

    /* Ensure logo & title are above overlay */
    .testimoni-logo,
    .testimoni-section h1,
    .gallery-wrapper {
        position: relative;
        z-index: 2;
    }

    /* Logo style */
    .testimoni-logo img {
        width: 50px;      /* kamu bisa ganti ukurannya */
        margin-bottom: 15px;
        filter: drop-shadow(0 2px 6px rgba(0,0,0,0.4));
    }

    .testimoni-section h1 {
        font-size: 32px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 10px;
        text-shadow: 0 2px 6px rgba(0,0,0,0.4);
    }

    .gallery-wrapper {
        margin-top: 40px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .gallery-item {
        background: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0px 6px 16px rgba(0,0,0,0.12);
    }

    .gallery-item img {
        width: 100%;
        display: block;
        object-fit: cover;
    }

    @media(max-width: 700px) {
        .gallery-wrapper {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- SECTION -->
<div class="testimoni-section">

    <!-- LOGO DI ATAS JUDUL -->
    <div class="testimoni-logo">
        <img src="/logo_emblem.png" alt="Logo Testimoni">
    </div>

    <h1>TESTIMONI PEQURBAN 2024</h1>

    <div class="gallery-wrapper">
        <div class="gallery-item">
            <img src="36bca86d-5d65-4462-ac39-e30e44a183db.jpg" alt="Foto Kegiatan 1">
        </div>
        <div class="gallery-item">
            <img src="6e6041d4-94ba-456b-9993-c8c0246083c4.jpg" alt="Foto Kegiatan 2">
        </div>
        <div class="gallery-item">
            <img src="357d057b-7479-41cb-965f-fd99f3a6e0f7.jpg" alt="Foto Kegiatan 3">
        </div>
        <div class="gallery-item">
            <img src="352b8064-1c18-4d2e-a660-8148dfb262d1.jpg" alt="Foto Kegiatan 4">
        </div>
    </div>
</div>

<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

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