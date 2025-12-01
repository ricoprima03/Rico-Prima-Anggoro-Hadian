<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Form Qurban</title>

<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    body {
        margin: 0;
        font-family: "Plus Jakarta Sans", sans-serif;
        background: #ffffff;
        color: #333;
    }

    /* Header Fixed */
    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: #fff;
        border-bottom: 1px solid #eee;
        z-index: 9999;
    }

    header .header-container {
        max-width: 1200px;
        margin: 0 auto;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 16px;
    }

    header nav a {
        color: #ff9900;
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
    }

    /* Page Wrapper — agar sejajar dengan header */
    .page-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 16px;
    }

    /* Spacer untuk header */
    .top-space {
        height: 90px;
    }

    /* Header Form */
    .form-header {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 16px 0;
        font-size: 18px;
        font-weight: 600;
    }

    /* Label */
    label {
        font-size: 14px;
        font-weight: 600;
    }

    /* Select */
    .select-box {
        width: 100%;
        padding: 14px;
        margin-top: 6px;
        border: 1px solid #ddd;
        border-radius: 8px;
        display: flex;
        justify-content: space-between;
        color: #777;
        background: white;
        cursor: pointer;
    }

    /* Counter */
    .counter {
        display: flex;
        align-items: center;
        margin-top: 6px;
        gap: 10px;
    }

    .counter input {
        width: 80px;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ddd;
        text-align: center;
        font-size: 16px;
    }

    .counter button {
        width: 42px;
        height: 42px;
        border-radius: 8px;
        border: 1px solid #ddd;
        background: white;
        font-size: 22px;
        cursor: pointer;
    }

    /* Input Box */
    .input-box {
        width: 100%;
        padding: 14px;
        border-radius: 8px;
        border: 1px solid #ddd;
        margin-top: 6px;
        font-size: 15px;
    }

    .error {
        font-size: 12px;
        color: red;
        margin-top: 4px;
    }

    /* Radio */
    .radio-group {
        margin-top: 10px;
    }

    .radio-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 14px;
        border: 1px solid #ddd;
        border-radius: 8px;
        margin-bottom: 10px;
        cursor: pointer;
    }

    .radio-item input {
        width: 18px;
        height: 18px;
        accent-color: orange;
    }

    /* Alert */
    .alert {
        margin-top: 14px;
        padding: 14px;
        background: #eaffea;
        border: 1px solid #c8f5c8;
        border-radius: 10px;
        display: flex;
        gap: 12px;
        color: #1c7c1c;
    }

    /* Footer Fixed */
    .footer {
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        max-width: 1200px;
        background: white;
        padding: 12px 16px;
        border-top: 1px solid #eee;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .footer .price {
        font-size: 16px;
        font-weight: 600;
    }

    .btn-cart {
        background: #f2f2f2;
        padding: 12px 20px;
        border-radius: 10px;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .btn-next {
        background: orange;
        padding: 12px 24px;
        border-radius: 10px;
        font-weight: 600;
        color: white;
        border: none;
    }
</style>

</head>
<body>

<!-- HEADER -->
<header>
    <div class="header-container">

        <!-- Logo -->
        <div>
            <img src="/logo-lazismu.png" alt="Lazismu" style="height:100px;">
        </div>

        <!-- Navigation -->
        <nav style="display:flex; gap:22px; align-items:center;">
            <a href="#">HOME</a>
            <a href="{{ url('/struktur-organisasi') }}">TENTANG KAMI</a>
            <a href="#">PROGRAM</a>
            <a href="#">LAYANAN</a>
            <a href="{{ url('/qurban') }}">BERITA</a>
            <a href="#">BLOG</a>

            <!-- Search -->
            <button style="
                background:#ff9900;
                border:none;
                width:42px;
                height:42px;
                border-radius:2px;
                cursor:pointer;
            ">
                <img src="/search-icon.png-removebg-preview.png" alt="Search" style="width:22px;">
            </button>
        </nav>

    </div>
</header>

<!-- Spacer -->
<div class="top-space"></div>

<!-- PAGE WRAPPER -->
<div class="page-wrapper">

    <!-- Form Header -->
    <div class="form-header">
        <i>&larr;</i>
        Lengkapi Data Berikut
    </div>

    <!-- CONTENT -->
    <div>

        <!-- Pilih Varian -->
        <label>Pilih Varian</label>
        <div class="select-box">
            Pilih varian qurban
            <i>⌄</i>
        </div>

        <!-- Jumlah Hewan -->
        <label style="margin-top:18px;">Jumlah Hewan</label>
        <div class="counter">
            <input type="number" value="1">
            <button>-</button>
            <button>+</button>
        </div>

        <!-- Nama Qurban -->
        <label style="margin-top:18px;">Qurban Atas Nama</label>
        <input class="input-box" placeholder="Contoh : Iqbal Muhammad Farisi">
        <div class="error">Dapat di isi hingga nama</div>

        <!-- Hak -->
        <label style="margin-top:18px;">Hak Pequrban</label>
        <div class="radio-group">
            <label class="radio-item">
                <input type="radio" name="hak" checked>
                Sedekahkan Hak saya
            </label>

            <label class="radio-item">
                <input type="radio" name="hak">
                Kirimkan Hak saya
            </label>
        </div>

        <!-- Alert -->
        <div class="alert">
            <i>👤</i>
            <div>
                <b>Anda Pequrban Istimewa!</b>
                16% Pequrban Rendangmu Sebelumnya Telah Mendonasikan Hak Qurbannya – dan Kali Ini, Anda Salah Satunya!
            </div>
        </div>

    </div>

</div>

<!-- FOOTER -->
<div class="footer">
    <div class="price">
        Total<br>Rp,-
    </div>

    <div class="btn-cart">
        Tambah ke <i>🛒</i> <span>0</span>
    </div>

    <a href="{{ url('/invoice') }}" class="btn-next" style="display:inline-block;text-align:center;">Selanjutnya</a>
</div>

</body>
</html>
