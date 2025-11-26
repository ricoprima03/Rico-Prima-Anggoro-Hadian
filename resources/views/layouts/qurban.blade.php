<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SuperQurban | Lazismu</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body class="font-sans bg-gray-50 text-gray-800">

<!-- Navbar -->
<nav class="bg-white shadow fixed w-full z-50 border-b border-orange-200">
  <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <img src="https://cdn-icons-png.flaticon.com/512/2099/2099058.png" class="w-8 h-8" alt="logo">
      <a href="/" class="text-xl font-bold text-orange-600">KitaBersama</a>
    </div>

    <!-- Menu -->
    <div class="hidden md:flex space-x-6">
      <a href="/" class="hover:text-orange-600 transition">Beranda</a>
      <a href="/qurban" class="text-orange-600 font-semibold">Qurban</a>
      <a href="#" class="hover:text-orange-600 transition">Zakat</a>
      <a href="#" class="hover:text-orange-600 transition">Kebaikan</a>
      <a href="#" class="hover:text-orange-600 transition">Tentang Kami</a>
    </div>

    <!-- Aksi -->
    <div class="flex items-center space-x-4">
      <a href="#" class="text-orange-600 hover:underline font-medium">Masuk</a>
      <a href="#" class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 font-semibold shadow-sm">Daftar</a>
    </div>
  </div>
</nav>


  <!-- HERO -->
  <section class="relative bg-cover bg-center h-[80vh]" style="background-image:url('https://images.unsplash.com/photo-1598965675041-f98aebd6b154?auto=format&fit=crop&w=1500&q=80');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white px-6">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">SuperQurban Lazismu</h1>
      <p class="text-lg md:text-xl mb-6 max-w-2xl">Transformasi qurban menjadi ketahanan pangan yang berkelanjutan. Berqurban sekali, manfaatnya sepanjang tahun!</p>
      <a href="#form-qurban" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-xl font-semibold">Ikut Qurban Sekarang</a>
    </div>
  </section>

  <!-- APA ITU SUPERQURBAN -->
  <section class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-6 text-gray-800">Apa Itu SuperQurban?</h2>
      <p class="text-gray-600 text-lg leading-relaxed mb-8">
        SuperQurban adalah inovasi qurban modern yang mengolah daging qurban menjadi kornet dan rendang kaleng tahan lama. 
        Produk ini disalurkan ke wilayah terdampak bencana, daerah rawan pangan, dan masyarakat pelosok.
      </p>
      <img src="https://images.unsplash.com/photo-1628341901071-5f97a8a3dcb3?auto=format&fit=crop&w=1200&q=80" alt="SuperQurban" class="rounded-2xl shadow-lg mx-auto">
    </div>
  </section>

  <!-- TAHAPAN PROSES -->
  <section class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Tahapan Proses SuperQurban</h2>
      <div class="grid md:grid-cols-4 gap-8 text-center">
        <div class="bg-white p-6 rounded-xl shadow">
          <i data-lucide="check-square" class="w-10 h-10 text-orange-500 mx-auto mb-4"></i>
          <h3 class="font-bold text-lg mb-2">1. Pemilihan Hewan</h3>
          <p class="text-gray-600">Hewan dipilih sesuai syariat dan standar kesehatan.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
          <i data-lucide="knife" class="w-10 h-10 text-orange-500 mx-auto mb-4"></i>
          <h3 class="font-bold text-lg mb-2">2. Penyembelihan</h3>
          <p class="text-gray-600">Dilakukan sesuai syariat oleh mitra tepercaya.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
          <i data-lucide="package" class="w-10 h-10 text-orange-500 mx-auto mb-4"></i>
          <h3 class="font-bold text-lg mb-2">3. Pengalengan</h3>
          <p class="text-gray-600">Daging diolah menjadi kornet & rendang tahan lama.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
          <i data-lucide="truck" class="w-10 h-10 text-orange-500 mx-auto mb-4"></i>
          <h3 class="font-bold text-lg mb-2">4. Distribusi</h3>
          <p class="text-gray-600">Disalurkan ke pelosok & wilayah terdampak bencana.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ALASAN MEMILIH SUPERQURBAN -->
  <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
      <img src="https://images.unsplash.com/photo-1638202993928-1c47f72689bb?auto=format&fit=crop&w=1000&q=80" class="rounded-2xl shadow-lg" alt="Keunggulan SuperQurban">
      <div>
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Mengapa SuperQurban?</h2>
        <ul class="space-y-4 text-gray-700">
          <li class="flex items-start"><i data-lucide="check-circle" class="w-6 h-6 text-orange-500 mr-3 mt-1"></i>Manfaat jangka panjang – produk awet hingga 3 tahun.</li>
          <li class="flex items-start"><i data-lucide="check-circle" class="w-6 h-6 text-orange-500 mr-3 mt-1"></i>Distribusi merata ke daerah rawan pangan & bencana.</li>
          <li class="flex items-start"><i data-lucide="check-circle" class="w-6 h-6 text-orange-500 mr-3 mt-1"></i>Proses higienis dan bersertifikat halal.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- STATISTIK -->
  <section class="py-16 bg-orange-500 text-white text-center">
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">
      <div>
        <h3 class="text-4xl font-bold">+250.000</h3>
        <p>Paket SuperQurban Tersalurkan</p>
      </div>
      <div>
        <h3 class="text-4xl font-bold">+200</h3>
        <p>Wilayah Penerima Manfaat</p>
      </div>
      <div>
        <h3 class="text-4xl font-bold">+25 Tahun</h3>
        <p>Pengalaman dalam Penyaluran Qurban</p>
      </div>
    </div>
  </section>

  <!-- PILIHAN PAKET QURBAN -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-12 text-gray-800">Pilihan Paket Qurban</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl shadow-lg p-6">
          <img src="https://images.unsplash.com/photo-1624631328180-3a1ec353f64b?auto=format&fit=crop&w=600&q=80" class="rounded-lg mb-4">
          <h3 class="font-bold text-lg mb-2">Kambing SuperQurban</h3>
          <p class="text-orange-500 font-semibold mb-4">Rp 2.500.000</p>
          <a href="#form-qurban" class="bg-orange-500 text-white px-5 py-2 rounded-lg hover:bg-orange-600">Pilih Paket</a>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6">
          <img src="https://images.unsplash.com/photo-1603030927493-fd63b5fa5e24?auto=format&fit=crop&w=600&q=80" class="rounded-lg mb-4">
          <h3 class="font-bold text-lg mb-2">Sapi Kolektif</h3>
          <p class="text-orange-500 font-semibold mb-4">Rp 17.500.000 / 7 orang</p>
          <a href="#form-qurban" class="bg-orange-500 text-white px-5 py-2 rounded-lg hover:bg-orange-600">Pilih Paket</a>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6">
          <img src="https://images.unsplash.com/photo-1603030927493-fd63b5fa5e24?auto=format&fit=crop&w=600&q=80" class="rounded-lg mb-4">
          <h3 class="font-bold text-lg mb-2">Sapi Premium</h3>
          <p class="text-orange-500 font-semibold mb-4">Rp 25.000.000</p>
          <a href="#form-qurban" class="bg-orange-500 text-white px-5 py-2 rounded-lg hover:bg-orange-600">Pilih Paket</a>
        </div>
      </div>
    </div>
  </section>

  <!-- FORM PEMILIHAN QURBAN -->
  <section id="form-qurban" class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-6 bg-gray-50 shadow-lg rounded-xl p-8">
      <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Formulir Pemilihan Qurban</h2>

      <form id="qurbanForm" class="space-y-6">
        <div>
          <label for="jenisHewan" class="block font-semibold text-gray-700 mb-2">Pilih Jenis Hewan</label>
          <select id="jenisHewan" class="w-full border-gray-300 rounded-lg p-3 focus:ring-orange-500 focus:border-orange-500">
            <option value="">-- Pilih Hewan --</option>
            <option value="kambing" data-harga="2500000">Kambing - Rp 2.500.000</option>
            <option value="sapi" data-harga="17500000">Sapi Kolektif - Rp 17.500.000 / 7 orang</option>
            <option value="sapi-premium" data-harga="25000000">Sapi Premium - Rp 25.000.000</option>
          </select>
        </div>

        <div id="jumlahOrangWrapper" class="hidden">
          <label for="jumlahOrang" class="block font-semibold text-gray-700 mb-2">Jumlah Orang (max 7)</label>
          <input type="number" id="jumlahOrang" min="1" max="7" value="1" class="w-full border-gray-300 rounded-lg p-3 focus:ring-orange-500 focus:border-orange-500">
        </div>

        <div>
          <label class="block font-semibold text-gray-700 mb-2">Total Harga</label>
          <div id="totalHarga" class="text-2xl font-bold text-orange-600">Rp 0</div>
        </div>

        <div class="text-center">
          <button type="submit" disabled id="btnQurban" class="bg-gray-400 text-white px-6 py-3 rounded-lg font-semibold cursor-not-allowed transition">Ikut Qurban Sekarang</button>
        </div>
      </form>
    </div>
  </section>

   <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-10">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-8">
      <div>
        <h3 class="text-lg font-semibold mb-3 text-white">KitaBersama</h3>
        <p>Platform donasi digital terpercaya untuk membantu sesama dengan mudah dan aman.</p>
      </div>
      <div>
        <h3 class="text-lg font-semibold mb-3 text-white">Navigasi</h3>
        <ul>
          <li><a href="/" class="hover:text-white">Beranda</a></li>
          <li><a href="/qurban" class="hover:text-white">Qurban</a></li>
          <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
        </ul>
      </div>
      <div>
        <h3 class="text-lg font-semibold mb-3 text-white">Kontak</h3>
        <p>Email: support@kitabersama.org</p>
        <p>Telp: +62 812-3456-7890</p>
      </div>
      <div>
        <h3 class="text-lg font-semibold mb-3 text-white">Ikuti Kami</h3>
        <div class="flex space-x-4">
          <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" class="w-6 h-6" alt="Facebook"></a>
          <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" class="w-6 h-6" alt="Instagram"></a>
          <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" class="w-6 h-6" alt="Twitter"></a>
        </div>
      </div>
    </div>
    <div class="text-center mt-10 text-gray-500 text-sm">
      &copy; 2025 KitaBersama. Semua Hak Dilindungi.
    </div>
  </footer>

  <script>
    lucide.createIcons();
    const jenisHewan = document.getElementById('jenisHewan');
    const jumlahOrangWrapper = document.getElementById('jumlahOrangWrapper');
    const jumlahOrang = document.getElementById('jumlahOrang');
    const totalHarga = document.getElementById('totalHarga');
    const btnQurban = document.getElementById('btnQurban');
    let harga = 0;
    function formatRupiah(angka){return 'Rp '+angka.toLocaleString('id-ID');}
    jenisHewan.addEventListener('change',function(){
      const selectedOption=jenisHewan.options[jenisHewan.selectedIndex];
      harga=Number(selectedOption.getAttribute('data-harga'))||0;
      if(jenisHewan.value==='sapi'){jumlahOrangWrapper.classList.remove('hidden');}
      else{jumlahOrangWrapper.classList.add('hidden');}
      updateTotal();checkForm();
    });
    jumlahOrang.addEventListener('input',function(){
      if(Number(jumlahOrang.value)<1)jumlahOrang.value=1;
      if(Number(jumlahOrang.value)>7)jumlahOrang.value=7;
      updateTotal();
    });
    function updateTotal(){
      let total=harga;
      if(jenisHewan.value==='sapi'){total=harga/7*Number(jumlahOrang.value);}
      totalHarga.textContent=formatRupiah(total);
    }
    function checkForm(){
      if(jenisHewan.value!==""){
        btnQurban.disabled=false;
        btnQurban.classList.remove('bg-gray-400','cursor-not-allowed');
        btnQurban.classList.add('bg-orange-500','hover:bg-orange-600');
      }else{
        btnQurban.disabled=true;
        btnQurban.classList.add('bg-gray-400','cursor-not-allowed');
        btnQurban.classList.remove('bg-orange-500','hover:bg-orange-600');
      }
    }
    document.getElementById('qurbanForm').addEventListener('submit',function(e){
      e.preventDefault();alert("Terima kasih! Qurban Anda berhasil didaftarkan 🎉");
    });
  </script>
</body>
</html>
