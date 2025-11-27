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

<!-- Konten Halaman Pembayaran -->