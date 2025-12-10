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

<!-- Struktur Organisasi -->
 <!-- IMPORT FONT -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .page-structure {
        font-family: 'Plus Jakarta Sans', sans-serif;
        text-align: center;
        margin-top: 48px;
    }

    /* Breadcrumb */
    .breadcrumb {
        font-size: 20px; /* lebih besar */
        color: #777;
        margin-bottom: 10px;
    }

    .breadcrumb span {
        margin: 0 8px;
        color: #777;
    }

    /* Title */
    .page-title {
        font-size: 25px; /* lebih besar */
        font-weight: 700;
        color: #f5831f;
        margin-bottom: 30px;
    }

    /* Button */
    .btn-structure {
        display: inline-block;
        background: #f5831f;
        color: #fff;
        padding: 14px 42px; /* lebih besar */
        border-radius: 10px; /* lebih membulat */
        font-size: 20px; /* lebih besar */
        font-weight: 600;
        text-decoration: none;
        transition: .2s ease;
    }

    .btn-structure:hover {
        opacity: .88;
    }
</style>

<div class="page-structure">

    <div class="breadcrumb">
        Beranda <span>></span> Tentang Kami <span>></span> Struktur Organisasi
    </div>

    <div class="page-title">Struktur Organisasi</div>

    <a href="#" class="btn-structure">Struktur Organisasi</a>

</div>

<!-- Ketua Badan Pengurus Section -->
<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .pembina-wrapper {
        text-align: center;
        padding: 50px 20px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL ORANGE */
    .pembina-title {
        font-size: 34px;
        font-weight: 700;
        color: #F57C00;
        margin-bottom: 45px;
    }

    /* CARD TENGAH */
    .pembina-card {
        width: 330px;
        margin: 0 auto;
    }

    /* FOTO */
    .pembina-photo-box {
        width: 330px;
        height: 360px;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
    }

    .pembina-photo-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN ORANGE */
    .pembina-role {
        margin-top: 25px;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        color: #F57C00;
    }

    /* NAMA BESAR */
    .pembina-name {
        font-size: 22px;
        font-weight: 700;
        margin-top: 4px;
        color: #000;
    }

    /* DESKRIPSI */
    .pembina-desc {
        font-size: 16px;
        color: #555;
        margin-top: 6px;
    }
</style>


<div class="pembina-wrapper">

    <div class="pembina-title">Ketua Badan Pengurus</div>

    <div class="pembina-card">

        <div class="pembina-photo-box">
            <img src="parni-hadi.jpg" alt="Parni Hadi">
        </div>

        <div class="pembina-role">KETUA</div>

        <div class="pembina-name">Jefree Fahana. S.T.,Kom</div>

        <div class="pembina-desc">Ketua Badan Pengurus</div>

    </div>

</div>

<!-- Dewan Pengawas Syariah Secteion -->
 <!-- FONT PLUS JAKARTA SANS -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .pengurus-wrapper {
        padding: 50px 20px;
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL */
    .pengurus-title {
        font-size: 32px;
        font-weight: 700;
        color: #F57C00; /* ORANGE */
        margin-bottom: 50px;
    }

    /* GRID */
    .pengurus-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* CARD */
    .pengurus-card {
        text-align: center;
    }

    .pengurus-photo-box {
        width: 260px;
        height: 280px;
        margin: 0 auto;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
    }

    .pengurus-photo-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN */
    .pengurus-role {
        margin-top: 18px;
        font-size: 15px;
        font-weight: 700;
        color: #F57C00; /* ORANGE */
        text-transform: uppercase;
    }

    /* NAMA */
    .pengurus-name {
        margin-top: 6px;
        font-size: 20px;
        font-weight: 600;
        color: #000;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
        .pengurus-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .pengurus-grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }
</style>


<div class="pengurus-wrapper">

    <div class="pengurus-title">Dewan Pengawas Syariah</div>

    <div class="pengurus-grid">

        <!-- ANGGOTA 1 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="ahmad-juwaini.jpg" alt="Ali Yusuf S.Th.I.,M.Hum">
            </div>
            <div class="pengurus-role">KETUA</div>
            <div class="pengurus-name">Ali Yusuf S.Th.I.,M.Hum</div>
        </div>

        <!-- ANGGOTA 2 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="herdiansyah.jpg" alt="Atang Sholihin S.Pd.I.,M.S.I">
            </div>
            <div class="pengurus-role">ANGGOTA</div>
            <div class="pengurus-name">Atang Sholihin S.Pd.I.,M.S.I</div>
        </div>

        <!-- ANGGOTA 3 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Rifqi Muhammad S.E.,M.H.,M.Sc.,SAS.,P.h.D.jpg" alt="Rifqi Muhammad S.E.,M.H.,M.Sc.,SAS.,P.h.D">
            </div>
            <div class="pengurus-role">ANGGOTA</div>
            <div class="pengurus-name">Rifqi Muhammad S.E.,M.H.,M.Sc.,SAS.,Ph.D</div>
        </div>

        <!-- AMGGOTA 4 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Prof. Rizal Yaya. S.E.,M.Sc.,Ph.D.,CA.,Akt.jpg" alt="Prof. Rizal Yaya. S.E.,M.Sc.,Ph.D.,CA.,Akt">
            </div>
            <div class="pengurus-role">ANGGOTA</div>
            <div class="pengurus-name">Prof. Rizal Yaya. S.E.,M.Sc.,Ph.D.,CA.,Akt</div>
        </div>

    </div>
</div>

<!-- Sekretaris Badan Pengurus Section --> 
 <!-- FONT PLUS JAKARTA SANS -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .sekretaris-wrapper {
        padding: 50px 20px;
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL */
    .sekretaris-title {
        font-size: 32px;
        font-weight: 700;
        color: #F57C00; /* ORANGE */
        margin-bottom: 50px;
    }

    /* GRID */
    .sekretaris-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 50px;
        max-width: 900px;
        margin: 0 auto;
    }

    /* CARD */
    .sekretaris-card {
        text-align: center;
    }

    .sekretaris-photo {
        width: 260px;
        height: 280px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 12px;
        background: #fff;
    }

    .sekretaris-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN */
    .sekretaris-role {
        margin-top: 18px;
        font-size: 16px;
        font-weight: 700;
        color: #F57C00; /* ORANGE */
        text-transform: uppercase;
    }

    /* NAMA */
    .sekretaris-name {
        margin-top: 6px;
        font-size: 20px;
        font-weight: 600;
        color: #000;
    }

    /* RESPONSIVE */
    @media(max-width: 700px) {
        .sekretaris-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<div class="sekretaris-wrapper">

    <div class="sekretaris-title">Sekretaris Badan Pengurus</div>

    <div class="sekretaris-grid">

        <!-- SEKRETARIS -->
        <div class="sekretaris-card">
            <div class="sekretaris-photo">
                <img src="Eka Yuhendri. S.H.I.,M.H.jpg" alt="Eka Yuhendri. S.H.I.,M.H">
            </div>
            <div class="sekretaris-role">SEKRETARIS</div>
            <div class="sekretaris-name">Eka Yuhendri. S.H.I.,M.H.</div>
        </div>

        <!-- WAKIL SEKRETARIS -->
        <div class="sekretaris-card">
            <div class="sekretaris-photo">
                <img src="Alfis Khoirul Khisoll.S.Kom.I.,M.SI.jpg" alt="Alfis Khoirul Khisoll.S.Kom.I.,M.SI">
            </div>
            <div class="sekretaris-role">WAKIL SEKRETARIS</div>
            <div class="sekretaris-name">Alfis Khoirul Khisoll.S.Kom.I.,M.SI</div>
        </div>

    </div>

</div>

<!--   Wakil Ketua Bidang Penghimpunan & Kerjaasana Section --> 
<!-- FONT PLUS JAKARTA SANS -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .pengurus-wrapper {
        padding: 50px 20px;
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL */
    .pengurus-title {
        font-size: 32px;
        font-weight: 700;
        color: #F57C00; /* ORANGE */
        margin-bottom: 50px;
    }

    /* GRID */
    .pengurus-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* CARD */
    .pengurus-card {
        text-align: center;
    }

    .pengurus-photo-box {
        width: 260px;
        height: 280px;
        margin: 0 auto;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
    }

    .pengurus-photo-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN */
    .pengurus-role {
        margin-top: 18px;
        font-size: 15px;
        font-weight: 700;
        color: #F57C00; /* ORANGE */
        text-transform: uppercase;
    }

    /* NAMA */
    .pengurus-name {
        margin-top: 6px;
        font-size: 20px;
        font-weight: 600;
        color: #000;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
        .pengurus-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .pengurus-grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }
</style>


<div class="pengurus-wrapper">

    <div class="pengurus-title">Wakil Ketua Bidang Himpunan & Kerjasama</div>

    <div class="pengurus-grid">

        <!-- ANGGOTA 1 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Purnomo.S.T,M.M.jpg" alt="Purnomo.S.T,M.M">
            </div>
            <div class="pengurus-role">WAKIL KETUA</div>
            <div class="pengurus-name">Purnomo.S.T,M.M</div>
        </div>

        <!-- ANGGOTA 2 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Anis Rofiah.S.Th.I.,S.Pd.,M.S.I.jpg" alt="Anis Rofiah.S.Th.I.,S.Pd.,M.S.I">
            </div>
            <div class="pengurus-role">ANGGOTA</div>
            <div class="pengurus-name">Anis Rofiah.S.Th.I.,S.Pd.,M.S.I</div>
        </div>

        <!-- ANGGOTA 3 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Luqman Satriya Siambodo.S.T..jpg" alt="Luqman Satriya Siambodo.S.T.">
            </div>
            <div class="pengurus-role">ANGGOTA</div>
            <div class="pengurus-name">Luqman Satriya Siambodo.S.T.</div>
        </div>

        <!-- AMGGOTA 4 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Wahyu Tri Nur Ahmad Firdaus.S.E..jpg" alt="Wahyu Tri Nur Ahmad Firdaus.S.E.">
            </div>
            <div class="pengurus-role">ANGGOTA</div>
            <div class="pengurus-name">Wahyu Tri Nur Ahmad Firdaus.S.E.</div>
        </div>

    </div>
</div>


<!--   Wakil Ketua Bidang Audit dan Kehutanan Section -->
<!-- FONT PLUS JAKARTA SANS -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .dewan-wrapper {
        padding: 30px 20px; /* lebih rapat */
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL */
    .dewan-title {
        font-size: 30px;
        font-weight: 700;
        color: #F57C00;
        margin-bottom: 30px; /* jarak lebih kecil */
    }

    /* GRID */
    .dewan-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px; /* sebelumnya 40px → dipersempit */
        max-width: 1000px;
        margin: 0 auto;
    }

    .dewan-card {
        text-align: center;
    }

    .dewan-photo {
        width: 240px;  /* sedikit lebih kecil */
        height: 260px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 12px;
    }

    .dewan-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN */
    .dewan-role {
        margin-top: 14px; /* sebelumnya 18 → dipersempit */
        font-size: 15px;
        font-weight: 700;
        color: #F57C00;
        text-transform: uppercase;
    }

    /* NAMA */
    .dewan-name {
        margin-top: 4px; /* lebih rapat */
        font-size: 18px;
        font-weight: 600;
        color: #000;
    }

    @media(max-width: 900px) {
        .dewan-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media(max-width: 600px) {
        .dewan-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<div class="dewan-wrapper">

    <div class="dewan-title">Wakil Ketua Bidang Audit Kehutanan</div>

    <div class="dewan-grid">

        <div class="dewan-card">
            <div class="dewan-photo">
                <img src=">Misbahul Anwar.M.SI.jpg" alt=">Misbahul Anwar.M.SI.">
            </div>
            <div class="dewan-role">WAKIL KETUA</div>
            <div class="dewan-name">Misbahul Anwar.M.SI.</div>
        </div>

        <div class="dewan-card">
            <div class="dewan-photo">
                <img src="Sutrisno Wibowo S.E.,M.M.jpg" alt=">Sutrisno Wibowo S.E.,M.M"> 
            </div>
            <div class="dewan-role">ANGGOTA</div>
            <div class="dewan-name">Sutrisno Wibowo S.E.,M.M</div>
        </div>

        <div class="dewan-card">
            <div class="dewan-photo">
                <img src="Hafiez Sofyani. M.Sc.jpg"  alt=">Hafiez Sofyani. M.Sc">
            </div>
            <div class="dewan-role">ANGGOTA</div>
            <div class="dewan-name">Hafiez Sofyani. M.Sc</div>
        </div>

    </div>

</div>

<!--   Wakil Ketua Bidang Kelembagaan & Sumber Daya Amil Section --> 
<!-- FONT PLUS JAKARTA SANS -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .pengurus-wrapper {
        padding: 50px 20px;
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL */
    .pengurus-title {
        font-size: 32px;
        font-weight: 700;
        color: #F57C00; /* ORANGE */
        margin-bottom: 50px;
    }

    /* GRID */
    .pengurus-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* CARD */
    .pengurus-card {
        text-align: center;
    }

    .pengurus-photo-box {
        width: 260px;
        height: 280px;
        margin: 0 auto;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
    }

    .pengurus-photo-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN */
    .pengurus-role {
        margin-top: 18px;
        font-size: 15px;
        font-weight: 700;
        color: #F57C00; /* ORANGE */
        text-transform: uppercase;
    }

    /* NAMA */
    .pengurus-name {
        margin-top: 6px;
        font-size: 20px;
        font-weight: 600;
        color: #000;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
        .pengurus-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .pengurus-grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }
</style>


<div class="pengurus-wrapper">

    <div class="pengurus-title">Wakil Ketua Bidang Kelembagaan & Sumber Daya Amil</div>

    <div class="pengurus-grid">

        <!-- ANGGOTA 1 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Dwi Sentosa Pambudi.S.H.I.,M.S.I.jpg" alt="Dwi Sentosa Pambudi.S.H.I.,M.S.I">
            </div>
            <div class="pengurus-role">WAKIL KETUA</div>
            <div class="pengurus-name">Dwi Sentosa Pambudi.S.H.I.,M.S.I</div>
        </div>

        <!-- ANGGOTA 2 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Dr.Muhammad Anis.M.A.jpg" alt="Dr.Muhammad Anis.M.A">
            </div>
            <div class="pengurus-role">ANGGOTA</div>
            <div class="pengurus-name">Dr.Muhammad Anis.M.A</div>
        </div>

        <!-- ANGGOTA 3 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Mohammad Dwi Iskandar.S.Ag.,M.S.I..jpg" alt="Mohammad Dwi Iskandar.S.Ag.,M.S.I.">
            </div>
            <div class="pengurus-role">ANGGOTA</div>
            <div class="pengurus-name">Mohammad Dwi Iskandar.S.Ag.,M.S.I.</div>
        </div>

        <!-- AMGGOTA 4 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Rohimah.S.Pd.jpg" alt="Rohimah.S.Pd">
            </div>
            <div class="pengurus-role">ANGGOTA</div>
            <div class="pengurus-name">Rohimah.S.Pd</div>
        </div>

    </div>
</div>

<!--  Wakil Ketua Bidang Berdayagunaan & Pendistribusian Section -->
<!-- FONT PLUS JAKARTA SANS -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .pengurus-wrapper {
        padding: 50px 20px;
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL */
    .pengurus-title {
        font-size: 32px;
        font-weight: 700;
        color: #F57C00; /* ORANGE */
        margin-bottom: 50px;
    }

    /* GRID */
    .pengurus-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* CARD */
    .pengurus-card {
        text-align: center;
    }

    .pengurus-photo-box {
        width: 260px;
        height: 280px;
        margin: 0 auto;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
    }

    .pengurus-photo-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN */
    .pengurus-role {
        margin-top: 18px;
        font-size: 15px;
        font-weight: 700;
        color: #F57C00; /* ORANGE */
        text-transform: uppercase;
    }

    /* NAMA */
    .pengurus-name {
        margin-top: 6px;
        font-size: 20px;
        font-weight: 600;
        color: #000;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
        .pengurus-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .pengurus-grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }
</style>


<div class="pengurus-wrapper">

    <div class="pengurus-title">Wakil Ketua Bidang Berdayagunaan & Pendistribusian</div>

    <div class="pengurus-grid">

        <!-- ANGGOTA 1 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Maryono.S.Pd.,M.T.jpg" alt="Maryono.S.Pd.,M.T">
            </div>
            <div class="pengurus-role">WAKIL KETUA</div>
            <div class="pengurus-name">Maryono.S.Pd.,M.T</div>
        </div>

        <!-- ANGGOTA 2 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Arifudin Nurrahman.jpg" alt="Arifudin Nurrahman">
            </div>
            <div class="pengurus-role">ANGGOTA</div>
            <div class="pengurus-name">Arifudin Nurrahman</div>
        </div>

        <!-- ANGGOTA 3 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src=">Muh Saeful Effendi.M.Pd.B.I.jpg" alt=">Muh Saeful Effendi.M.Pd.B.I">
            </div>
            <div class="pengurus-role">ANGGOTA</div>
            <div class="pengurus-name">Muh Saeful Effendi.M.Pd.B.I</div>
        </div>

        <!-- AMGGOTA 4 -->
        <div class="pengurus-card">
            <div class="pengurus-photo-box">
                <img src="Adhitiya Rechamdy Cristian.S.E.,M.M.jpg" alt="Adhitiya Rechamdy Cristian.S.E.,M.M">
            </div>
            <div class="pengurus-role">ANGGOTA</div>
            <div class="pengurus-name">Adhitiya Rechamdy Cristian.S.E.,M.M</div>
        </div>

    </div>
</div>

<!-- Wakil Ketua Transforimasi Digital & Monitoring Evaluasi Section -->
<!-- FONT PLUS JAKARTA SANS -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .dewan-wrapper {
        padding: 30px 20px; /* lebih rapat */
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL */
    .dewan-title {
        font-size: 30px;
        font-weight: 700;
        color: #F57C00;
        margin-bottom: 30px; /* jarak lebih kecil */
    }

    /* GRID */
    .dewan-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px; /* sebelumnya 40px → dipersempit */
        max-width: 1000px;
        margin: 0 auto;
    }

    .dewan-card {
        text-align: center;
    }

    .dewan-photo {
        width: 240px;  /* sedikit lebih kecil */
        height: 260px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 12px;
    }

    .dewan-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN */
    .dewan-role {
        margin-top: 14px; /* sebelumnya 18 → dipersempit */
        font-size: 15px;
        font-weight: 700;
        color: #F57C00;
        text-transform: uppercase;
    }

    /* NAMA */
    .dewan-name {
        margin-top: 4px; /* lebih rapat */
        font-size: 18px;
        font-weight: 600;
        color: #000;
    }

    @media(max-width: 900px) {
        .dewan-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media(max-width: 600px) {
        .dewan-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<div class="dewan-wrapper">

    <div class="dewan-title">Wakil Ketua Transforimasi Digital & Monitoring Evaluasi</div>

    <div class="dewan-grid">

        <div class="dewan-card">
            <div class="dewan-photo">
                <img src="Budi Santoso.S.Pal.,M.K.M..jpg" alt="Budi Santoso.S.Pal.,M.K.M">
            </div>
            <div class="dewan-role">WAKIL KETUA</div>
            <div class="dewan-name">Budi Santoso.S.Pal.,M.K.M.</div>
        </div>

        <div class="dewan-card">
            <div class="dewan-photo">
                <img src="Herman Yuliyansyah.S.T.,M.Eng.Ph.D.jpg" alt="Herman Yuliyansyah.S.T.,M.Eng.Ph.D.">>
            </div>
            <div class="dewan-role">ANGGOTA</div>
            <div class="dewan-name">Herman Yuliyansyah.S.T.,M.Eng.Ph.D.</div>
        </div>

        <div class="dewan-card">
            <div class="dewan-photo">
                <img src="Yudistra Rahmawati.S.T..jpg" alt="Yudistra Rahmawati.S.T.">
            </div>
            <div class="dewan-role">ANGGOTA</div>
            <div class="dewan-name">Yudistra Rahmawati.S.T.</div>
        </div>

    </div>

</div>

<!-- Manager Regional Section -->
<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .pembina-wrapper {
        text-align: center;
        padding: 50px 20px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL ORANGE */
    .pembina-title {
        font-size: 34px;
        font-weight: 700;
        color: #F57C00;
        margin-bottom: 45px;
    }

    /* CARD TENGAH */
    .pembina-card {
        width: 330px;
        margin: 0 auto;
    }

    /* FOTO */
    .pembina-photo-box {
        width: 330px;
        height: 360px;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
    }

    .pembina-photo-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN ORANGE */
    .pembina-role {
        margin-top: 25px;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        color: #F57C00;
    }

    /* NAMA BESAR */
    .pembina-name {
        font-size: 22px;
        font-weight: 700;
        margin-top: 4px;
        color: #000;
    }

    /* DESKRIPSI */
    .pembina-desc {
        font-size: 16px;
        color: #555;
        margin-top: 6px;
    }
</style>


<div class="pembina-wrapper">

    <div class="pembina-title">Manager Regional</div>

    <div class="pembina-card">

        <div class="pembina-photo-box">
            <img src="parni-hadi.jpg" alt="Parni Hadi">
        </div>

        <div class="pembina-role">Manager Regional</div>

        <div class="pembina-name">Marzuki</div>

    </div>

</div>

<!-- Manager Bidang Fudrasing & Kerjasama Section --> 
 <!-- FONT PLUS JAKARTA SANS -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .sekretaris-wrapper {
        padding: 50px 20px;
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL */
    .sekretaris-title {
        font-size: 32px;
        font-weight: 700;
        color: #F57C00; /* ORANGE */
        margin-bottom: 50px;
    }

    /* GRID */
    .sekretaris-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 50px;
        max-width: 900px;
        margin: 0 auto;
    }

    /* CARD */
    .sekretaris-card {
        text-align: center;
    }

    .sekretaris-photo {
        width: 260px;
        height: 280px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 12px;
        background: #fff;
    }

    .sekretaris-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN */
    .sekretaris-role {
        margin-top: 18px;
        font-size: 16px;
        font-weight: 700;
        color: #F57C00; /* ORANGE */
        text-transform: uppercase;
    }

    /* NAMA */
    .sekretaris-name {
        margin-top: 6px;
        font-size: 20px;
        font-weight: 600;
        color: #000;
    }

    /* RESPONSIVE */
    @media(max-width: 700px) {
        .sekretaris-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<div class="sekretaris-wrapper">

    <div class="sekretaris-title">Manager Bidang Fundrasing</div>

    <div class="sekretaris-grid">

        <!-- SEKRETARIS -->
        <div class="sekretaris-card">
            <div class="sekretaris-photo">
                <img src="sekretaris.jpg" alt="Sekretaris">
            </div>
            <div class="sekretaris-role">Staff Fundrasing Conporate & Retail</div>
            <div class="sekretaris-name">Ikap Bin Kholib</div>
        </div>

        <!-- WAKIL SEKRETARIS -->
        <div class="sekretaris-card">
            <div class="sekretaris-photo">
                <img src="wakil-sekretaris.jpg" alt="Wakil Sekretaris">
            </div>
            <div class="sekretaris-role">Staff Digital Fundrasing</div>
            <div class="sekretaris-name">Waznin Alief Almuzakky</div>
        </div>

    </div>

</div>

<!-- Manager Bidang Keuangan dan Administrasi Section -->
<!-- FONT PLUS JAKARTA SANS -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .dewan-wrapper {
        padding: 30px 20px; /* lebih rapat */
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL */
    .dewan-title {
        font-size: 30px;
        font-weight: 700;
        color: #F57C00;
        margin-bottom: 30px; /* jarak lebih kecil */
    }

    /* GRID */
    .dewan-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px; /* sebelumnya 40px → dipersempit */
        max-width: 1000px;
        margin: 0 auto;
    }

    .dewan-card {
        text-align: center;
    }

    .dewan-photo {
        width: 240px;  /* sedikit lebih kecil */
        height: 260px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 12px;
    }

    .dewan-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN */
    .dewan-role {
        margin-top: 14px; /* sebelumnya 18 → dipersempit */
        font-size: 15px;
        font-weight: 700;
        color: #F57C00;
        text-transform: uppercase;
    }

    /* NAMA */
    .dewan-name {
        margin-top: 4px; /* lebih rapat */
        font-size: 18px;
        font-weight: 600;
        color: #000;
    }

    @media(max-width: 900px) {
        .dewan-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media(max-width: 600px) {
        .dewan-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<div class="dewan-wrapper">

    <div class="dewan-title">Manager Keuangan & Administrasi</div>

    <div class="dewan-grid">

        <div class="dewan-card">
            <div class="dewan-photo">
                <img src="ketua.jpg">
            </div>
            <div class="dewan-role">Staff Keuangan</div>
            <div class="dewan-name">Arifah Nur Hidayati</div>
        </div>

        <div class="dewan-card">
            <div class="dewan-photo">
                <img src="anggota1.jpg">
            </div>
            <div class="dewan-role">Staff Keuangan</div>
            <div class="dewan-name">Musdalifah</div>
        </div>

        <div class="dewan-card">
            <div class="dewan-photo">
                <img src="anggota2.jpg">
            </div>
            <div class="dewan-role">Staff Administrasi</div>
            <div class="dewan-name">Adinda Dewi Lestari</div>
        </div>

    </div>

</div>

<!-- Manager Bidang Berdayagunaan & Pendistribusian -->
<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .pembina-wrapper {
        text-align: center;
        padding: 50px 20px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL ORANGE */
    .pembina-title {
        font-size: 34px;
        font-weight: 700;
        color: #F57C00;
        margin-bottom: 45px;
    }

    /* CARD TENGAH */
    .pembina-card {
        width: 330px;
        margin: 0 auto;
    }

    /* FOTO */
    .pembina-photo-box {
        width: 330px;
        height: 360px;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
    }

    .pembina-photo-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN ORANGE */
    .pembina-role {
        margin-top: 25px;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        color: #F57C00;
    }

    /* NAMA BESAR */
    .pembina-name {
        font-size: 22px;
        font-weight: 700;
        margin-top: 4px;
        color: #000;
    }

    /* DESKRIPSI */
    .pembina-desc {
        font-size: 16px;
        color: #555;
        margin-top: 6px;
    }
</style>


<div class="pembina-wrapper">

    <div class="pembina-title">Manager Bidang Berdayagunaan & Pendistribusian</div>

    <div class="pembina-card">

        <div class="pembina-photo-box">
            <img src="parni-hadi.jpg" alt="Parni Hadi">
        </div>

        <div class="pembina-role">Staff Bidang Berdayagunaan & Pendistribusian</div>

        <div class="pembina-name">Akram Putra Pratama</div>


    </div>

</div>

<!-- Staff Biro Umum & Kerumahtanggan -->
<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .pembina-wrapper {
        text-align: center;
        padding: 50px 20px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* JUDUL ORANGE */
    .pembina-title {
        font-size: 34px;
        font-weight: 700;
        color: #F57C00;
        margin-bottom: 45px;
    }

    /* CARD TENGAH */
    .pembina-card {
        width: 330px;
        margin: 0 auto;
    }

    /* FOTO */
    .pembina-photo-box {
        width: 330px;
        height: 360px;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
    }

    .pembina-photo-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* JABATAN ORANGE */
    .pembina-role {
        margin-top: 25px;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        color: #F57C00;
    }

    /* NAMA BESAR */
    .pembina-name {
        font-size: 22px;
        font-weight: 700;
        margin-top: 4px;
        color: #000;
    }

    /* DESKRIPSI */
    .pembina-desc {
        font-size: 16px;
        color: #555;
        margin-top: 6px;
    }
</style>


<div class="pembina-wrapper">

    <div class="pembina-title">Staff Biro Umum & Kerumahtanggan</div>

    <div class="pembina-card">

        <div class="pembina-photo-box">
            <img src="parni-hadi.jpg" alt="Parni Hadi">
        </div>

        <div class="pembina-role">Staff Biro Umum & Kerumahtanggan</div>

        <div class="pembina-name">Agus Saroyo</div>

    </div>

</div>

<!-- Footer -->
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