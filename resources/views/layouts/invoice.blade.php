<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Detail Transaksi</title>

<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body {
        margin: 0;
        background: #f4f4f4;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* WRAPPER UTAMA – AGAR SEMUA TENGAH */
    .trx-wrapper {
        max-width: 480px;
        margin: 0 auto;
        padding: 16px;
    }

    /* HEADER BACK */
    .trx-header {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 15px;
        font-weight: 600;
        padding-bottom: 10px;
    }

    /* BOX INFO UTAMA */
    .trx-status {
        background: #ff8a00;
        color: #fff;
        border-radius: 12px;
        padding: 18px 20px;
        margin-bottom: 18px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    }

    .trx-status h3 {
        margin: 0;
        font-size: 18px;
        font-weight: 700;
    }

    .trx-status small {
        opacity: .9;
        font-size: 14px;
    }

    /* CARD PUTIH */
    .trx-card {
        background: #fff;
        border-radius: 14px;
        padding: 20px;
        margin-bottom: 14px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }

    .trx-card .title {
        font-weight: 700;
        font-size: 15px;
        margin-bottom: 10px;
    }

    .trx-row {
        display: flex;
        flex-direction: column;
        margin-bottom: 12px;
    }

    .trx-row label {
        font-size: 13px;
        color: #444;
        margin-bottom: 2px;
    }

    .trx-row span {
        font-weight: 600;
        font-size: 15px;
        color: #222;
    }

    /* GAMBAR QR */
    .qr-box img {
        width: 100%;
        border-radius: 12px;
        margin-top: 10px;
    }

    /* GARIS PEMBATAS */
    .divider {
        width: 100%;
        height: 1px;
        background: #ddd;
        margin: 16px 0;
    }

</style>
</head>
<body>

<div class="trx-wrapper">

    <!-- Back -->
    <div class="trx-header">
        <img src="/icon-back.png" width="22">
        <span>Detail Transaksi</span>
    </div>

    <!-- Status -->
    <div class="trx-status">
        <h3>Penbayaran Berhasil</h3>
        <small>Batas waktu pembayaran 12 Januari 2025</small>
    </div>

    <!-- Card Rincian -->
    <div class="trx-card">
        <div class="title">Rincian Pembayaran</div>

        <div class="trx-row">
            <label>Nama Program</label>
            <span>Rendangmu Sapi</span>
        </div>

        <div class="trx-row">
            <label>Nomor Invoice</label>
            <span>#INV203982038</span>
        </div>

        <div class="trx-row">
            <label>Metode Pembayaran</label>
            <span>BCA Virtual Account</span>
        </div>

        <div class="divider"></div>

        <div class="trx-row">
            <label>Total Donasi</label>
            <span>Rp 21.000.000</span>
        </div>

        <div class="trx-row">
            <label>Kode Unik</label>
            <span>133</span>
        </div>

        <div class="trx-row">
            <label>Total Pembayaran</label>
            <span style="color:#ff8a00; font-size:18px; font-weight:700;">Rp 21.000.000</span>
        </div>
    </div>

</div>

</body>
</html>
