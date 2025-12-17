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

    /* Untuk meratakan semua kotak */
    .form-field {
        width: 100%;
        box-sizing: border-box;
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

    /* Page Wrapper */
    .page-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 16px;
    }

    /* Spacer untuk header */
    .top-space {
        height: 90px;
    }

    /* Form Header */
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

    /* Select Box */
    .select-box {
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

    /* Dropdown menu */
    .dropdown-item:hover {
        background: #f5f5f5;
    }

    /* Counter */
    .counter {
        display: flex;
        align-items: center;
        margin-top: 6px;
        gap: 10px;
    }

    .counter input {
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

    .input-box {
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
        <div>
            <img src="/logo-lazismu.png" alt="Lazismu" style="height:100px;">
        </div>

        <nav style="display:flex; gap:22px; align-items:center;">
            <a href="#">HOME</a>
            <a href="{{ url('/struktur-organisasi') }}">TENTANG KAMI</a>
            <a href="#">PROGRAM</a>
            <a href="#">LAYANAN</a>
            <a href="{{ url('/qurban') }}">BERITA</a>
            <a href="#">BLOG</a>

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

<div class="top-space"></div>

<!-- PAGE WRAPPER -->
<div class="page-wrapper">


    <form id="formQurban">
        <div class="form-header">
            <i>&larr;</i>
            Lengkapi Data Berikut
        </div>

        <!-- Pilih Varian -->
        <label>Pilih Varian</label>
        <div class="select-box form-field" onclick="toggleDropdown()">
            <span id="selectedVarian">Pilih varian qurban</span>
            <i>&#9662;</i>
        </div>
        <div id="dropdownVarian" style="display:none; border:1px solid #ddd; border-radius:8px; margin-top:4px; overflow:hidden;">
            <div onclick="chooseVarian('Rendangmu Sapi', 21000000)" class="dropdown-item" style="padding:12px; cursor:pointer; border-bottom:1px solid #eee;">Rendangmu Sapi</div>
            <div onclick="chooseVarian('Rendangmu Sapi 1/7', 3000000)" class="dropdown-item" style="padding:12px; cursor:pointer;">Rendangmu Sapi 1/7</div>
        </div>

        <!-- Jumlah Hewan -->
        <label style="margin-top:18px;">Jumlah Hewan</label>
        <div class="counter form-field">
            <input id="jumlahHewan" type="number" value="1" min="1" class="form-field" onchange="updateTotalHarga()" oninput="updateTotalHarga()">
        </div>

        <!-- Nama -->
        <label style="margin-top:18px;">Qurban Atas Nama</label>
        <input id="namaQurban" class="input-box form-field" placeholder="Contoh : Iqbal Muhammad Farisi" required>
        <div class="error">Dapat di isi hingga nama</div>

        <!-- Email -->
        <label style="margin-top:18px;">Email</label>
        <input id="emailQurban" class="input-box form-field" placeholder="Email" type="email" required>

        <!-- Alamat -->
        <label style="margin-top:18px;">Alamat</label>
        <input id="alamatQurban" class="input-box form-field" placeholder="Alamat lengkap" required>



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

        <!-- Tombol Simpan Data dihapus, aksi simpan dipindah ke tombol Selanjutnya di bawah -->
    </form>

</div>

<!-- FOOTER -->
<div class="footer">
    <div class="price" id="totalHargaBox">
        Total<br>Rp,-
    </div>

    <div class="btn-cart">
        Tambah ke 🛒 <span>0</span>
    </div>

    <button type="button" class="btn-next" id="btnSelanjutnya">Selanjutnya</button>
</div>



<!-- SCRIPT DROPDOWN & FORM -->
<script>
let hargaVarian = 0;

function toggleDropdown() {
    let dd = document.getElementById("dropdownVarian");
    dd.style.display = dd.style.display === "none" ? "block" : "none";
}

function chooseVarian(name, harga) {
    document.getElementById("selectedVarian").innerText = name;
    document.getElementById("dropdownVarian").style.display = "none";
    hargaVarian = harga;
    updateTotalHarga();
}

function updateTotalHarga() {
    const jumlah = parseInt(document.getElementById('jumlahHewan').value) || 1;
    let total = hargaVarian * jumlah;
    let totalBox = document.getElementById('totalHargaBox');
    if (hargaVarian > 0) {
        totalBox.innerHTML = 'Total<br>Rp ' + total.toLocaleString('id-ID');
    } else {
        totalBox.innerHTML = 'Total<br>Rp -';
    }
}

document.getElementById('btnSelanjutnya').onclick = async function() {
    const nama = document.getElementById('namaQurban').value;
    const email = document.getElementById('emailQurban').value;
    const jenis_qurban = document.getElementById('selectedVarian').innerText;
    const jumlah_hewan = document.getElementById('jumlahHewan').value;
    const alamat = document.getElementById('alamatQurban').value;
    const harga = hargaVarian;
    if (jenis_qurban === 'Pilih varian qurban') {
        alert('Pilih varian qurban terlebih dahulu!');
        return;
    }
    if (!nama || !email || !alamat) {
        alert('Mohon lengkapi semua data!');
        return;
    }
    const res = await fetch('/api/qurban', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
        body: JSON.stringify({
            nama, email, jenis_qurban, jumlah_hewan, alamat, harga
        })
    });
    const data = await res.json();
    if (data.success) {
        alert('Data berhasil disimpan!');
        window.location.href = '/invoice';
    } else {
        alert('Gagal menyimpan data!');
    }
};
</script>

</body>
</html>
