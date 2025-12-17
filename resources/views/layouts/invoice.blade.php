<!DOCTYPE html>
<html lang="id">
<head>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Status Pembayaran</title>

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
        <img src="/pngtree-vector-back-icon-png-image_4190818-removebg-preview.png" width="22">
        <span>Status Pembayaran</span>
    </div>

    <!-- Status -->
    <div class="trx-status">
        <h3>Menunggu Pembayaran</h3>
        <small id="batasWaktu">Batas waktu pembayaran</small>
    </div>

    <!-- Card Rincian -->
    <div class="trx-card">
        <div class="title">Rincian Pembayaran</div>

        <div class="trx-row">
            <label>Nama Program</label>
            <span id="namaProgram">-</span>
        </div>

        <div class="trx-row">
            <label>Nomor Invoice</label>
            <span id="nomorInvoice">-</span>
        </div>

        <div class="trx-row">
            <label>Metode Pembayaran</label>
            <span>QRIS</span>
        </div>

        <div class="divider"></div>

        <div class="trx-row">
            <label>Total Donasi</label>
            <span id="totalDonasi">-</span>
        </div>

        <div class="trx-row">
            <label>Kode Unik</label>
            <span>133</span>
        </div>

        <div class="trx-row">
            <label>Total Pembayaran</label>
            <span id="totalPembayaran" style="color:#ff8a00; font-size:18px; font-weight:700;">-</span>
        </div>
    </div>

    <!-- Card QR -->
    <div class="trx-card">
        <div class="title">Scan QRIS</div>
        <div class="qr-box">
            <img src="/qris_bca.png" alt="QRIS">
        </div>
    </div>
    <a href="{{ url('/Pembayaranberhasil') }}" class="btn-next" style="display:inline-block;text-align:center;">Selanjutnya</a>

</div>

</body>
<script>
// Batas waktu pembayaran: besok (hari ini + 1)
const bulanIndo = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
let now = new Date();
let besok = new Date(now.getTime() + 24*60*60*1000);
let tgl = besok.getDate();
let bln = bulanIndo[besok.getMonth()];
let thn = besok.getFullYear();
document.getElementById('batasWaktu').innerText = `Batas waktu pembayaran ${tgl} ${bln} ${thn}`;
</script>
<script>
// Ambil data dari sessionStorage (diset di pembayaranqurban.blade.php setelah submit)
const dataQurban = JSON.parse(sessionStorage.getItem('dataQurban'));
if (dataQurban) {
    document.getElementById('namaProgram').innerText = dataQurban.jenis_qurban || '-';
    // Nomor invoice: contoh dinamis, bisa pakai id atau timestamp
    // Ambil nomor invoice dari session agar konsisten
    let nomor_invoice = sessionStorage.getItem('nomor_invoice') || dataQurban.nomor_invoice || ('#INV' + Date.now());
    document.getElementById('nomorInvoice').innerText = nomor_invoice;
    // Total donasi = harga * jumlah_hewan
    let total = (parseInt(dataQurban.harga) || 0) * (parseInt(dataQurban.jumlah_hewan) || 1);
    document.getElementById('totalDonasi').innerText = 'Rp ' + total.toLocaleString('id-ID');
    // Kode unik (random 3 digit, simpan di session agar konsisten)
    let kodeUnik = sessionStorage.getItem('kodeUnik');
    if (!kodeUnik) {
        kodeUnik = Math.floor(100 + Math.random() * 900);
        sessionStorage.setItem('kodeUnik', kodeUnik);
    } else {
        kodeUnik = parseInt(kodeUnik);
    }
    // Tampilkan kode unik
    document.querySelectorAll('.trx-row').forEach(function(row) {
        if (row.querySelector('label') && row.querySelector('label').innerText.includes('Kode Unik')) {
            row.querySelector('span').innerText = kodeUnik;
        }
    });
    // Total pembayaran = total donasi + kode unik
    document.getElementById('totalPembayaran').innerText = 'Rp ' + (total + kodeUnik).toLocaleString('id-ID');
}
</script>
</html>
