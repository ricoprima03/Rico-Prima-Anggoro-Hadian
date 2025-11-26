@extends('layouts.app')

@section('content')
<div class="bg-white">
  <!-- Header -->
  <header class="w-full bg-[#FFFBFB] shadow-md fixed top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <img src="/images/lazismu-logo.png" alt="Lazismu Logo" class="w-12 h-12" />
        <nav class="hidden md:flex space-x-8 text-gray-700 text-lg">
          <a href="#" class="hover:text-orange-600">Tentang Kami</a>
          <a href="#" class="hover:text-orange-600">Program</a>
          <a href="#" class="hover:text-orange-600">Layanan</a>
          <a href="#" class="hover:text-orange-600">Tata Kelola</a>
          <a href="#" class="hover:text-orange-600">Kolaborasi</a>
          <a href="#" class="hover:text-orange-600">Berita</a>
        </nav>
      </div>
      <button class="bg-orange-500 text-white px-5 py-2 rounded-lg hover:bg-orange-600">Qurban Online</button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="pt-32 bg-white text-center">
    <div class="max-w-5xl mx-auto">
      <h1 class="text-4xl font-bold text-gray-800 leading-snug">Qurban <span class="text-orange-600 italic">Saling</span> Menguatkan</h1>
      <p class="text-sm text-gray-600 mt-2">Sesuai Syariah | Terjangkau | Berdampak Luas</p>
      <div class="mt-6">
        <img src="/images/banner-qurban.jpg" class="rounded-lg shadow-lg w-full" alt="Qurban Banner" />
      </div>
    </div>
  </section>

  <!-- Tentang Rendangmu -->
  <section class="bg-orange-100 py-16">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <img src="/images/sapi-qurban.jpg" alt="Sapi Qurban" class="rounded-xl shadow-md" />
      <div>
        <h2 class="text-3xl font-bold mb-4">Apa itu Rendangmu?</h2>
        <p class="text-gray-700 leading-relaxed mb-6">
          Lazismu memfasilitasi sahabat untuk bisa berqurban hebat dengan mudah. Pesan qurbannya via online, kami uruskan dari mulai penyembelihan hingga pendistribusian qurbannya.
          Dengan <strong>Rendangmu</strong>, daging qurban diolah menjadi kornet dan rendang yang tahan lama dan bermanfaat untuk daerah bencana dan pelosok negeri.
        </p>
        <a href="#" class="bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600 font-semibold">Donasi Sekarang</a>
      </div>
    </div>
  </section>

  <!-- Qurban Sesuai Syariah -->
  <section class="bg-gray-100 py-16 text-center">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold mb-4">Qurban Sesuai Syariah dan Manfaatnya Lebih Luas</h2>
      <p class="text-gray-700 leading-relaxed mb-8">
        Dengan Rendangmu, daging qurban diolah menjadi rendang dan kornet, memperluas jangkauan manfaat qurban hingga pelosok Indonesia.
      </p>
      <a href="#" class="bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600 font-semibold">Donasi Sekarang</a>
    </div>
  </section>

  <!-- Proses Rendangmu -->
  <section class="bg-white py-20">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-orange-600 mb-12">Bagaimana Rendangmu di Proses</h2>
      <div class="grid md:grid-cols-4 gap-8 text-center">
        <div class="bg-orange-500 text-white rounded-xl shadow-lg p-6">
          <h3 class="text-xl font-semibold mb-2">1. Pilihan Daging Terbaik</h3>
          <p>Daging berkualitas dipilih sesuai standar syariah.</p>
        </div>
        <div class="bg-orange-500 text-white rounded-xl shadow-lg p-6">
          <h3 class="text-xl font-semibold mb-2">2. Proses Penyembelihan</h3>
          <p>Proses penyembelihan sesuai syariat dan higienis.</p>
        </div>
        <div class="bg-orange-500 text-white rounded-xl shadow-lg p-6">
          <h3 class="text-xl font-semibold mb-2">3. Produksi Kornet & Rendang</h3>
          <p>Daging diolah menjadi produk siap saji tahan lama.</p>
        </div>
        <div class="bg-orange-500 text-white rounded-xl shadow-lg p-6">
          <h3 class="text-xl font-semibold mb-2">4. Distribusi Luas</h3>
          <p>Didistribusikan ke masyarakat yang membutuhkan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Distribution -->
  <section class="bg-gray-100 py-16 text-center">
    <h2 class="text-2xl font-bold text-gray-800 mb-8">Penyaluran Rendangmu Tahun 2024</h2>
    <img src="/images/map-indonesia.png" alt="Map Indonesia" class="mx-auto w-3/4" />
  </section>

  <!-- Pilihan Hewan -->
  <section class="bg-orange-100 py-20 text-center">
    <h2 class="text-2xl text-gray-800 font-bold mb-10">Pilih Hewan Qurban Anda, dan Berdayakan Desa dengan Berqurban</h2>
    <div class="flex flex-wrap justify-center gap-10">
      <div class="bg-orange-400 rounded-xl shadow-md p-6 w-72">
        <img src="/images/kambing.png" alt="Kambing" class="w-full rounded-lg mb-4" />
        <h3 class="font-bold text-lg">Rendangmu Kambing</h3>
        <p>Rp 2.900.000<br>– Kornet 30 Kaleng<br>– Rendang 25 Kaleng</p>
        <button class="mt-4 bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700">Tunaikan Langsung</button>
      </div>
      <div class="bg-orange-400 rounded-xl shadow-md p-6 w-72">
        <img src="/images/sapi17.png" alt="Sapi 1/7" class="w-full rounded-lg mb-4" />
        <h3 class="font-bold text-lg">Rendangmu Sapi 1/7</h3>
        <p>Rp 3.000.000<br>– Kornet 50 Kaleng<br>– Rendang 35 Kaleng</p>
        <button class="mt-4 bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700">Tunaikan Langsung</button>
      </div>
      <div class="bg-orange-400 rounded-xl shadow-md p-6 w-72">
        <img src="/images/sapi.png" alt="Sapi" class="w-full rounded-lg mb-4" />
        <h3 class="font-bold text-lg">Rendangmu Sapi</h3>
        <p>Rp 19.450.000<br>– Kornet 350 Kaleng<br>– Rendang 250 Kaleng</p>
        <button class="mt-4 bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700">Tunaikan Langsung</button>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-200 py-10 text-center text-gray-600">
    <p class="italic">“Ya Allah terimalah qurban kami, limpahkan barokahMu untuk keluarga kami dan jadikan amal jariyah di surga.”</p>
    <div class="flex justify-center mt-6 space-x-6">
      <div class="bg-orange-500 text-white p-4 rounded-lg">Anonim - Rendangmu Kambing</div>
      <div class="bg-orange-500 text-white p-4 rounded-lg">Anonim - Rendangmu Sapi 1/7</div>
    </div>
    <img src="/images/lazismu-logo.png" alt="Lazismu" class="mx-auto mt-8 w-20" />
  </footer>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="bg-white">
  <!-- Header -->
  <header class="w-full bg-[#FFFBFB] shadow-md fixed top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <img src="/images/lazismu-logo.png" alt="Lazismu Logo" class="w-12 h-12" />
        <nav class="hidden md:flex space-x-8 text-gray-700 text-lg">
          <a href="#" class="hover:text-orange-600">Tentang Kami</a>
          <a href="#" class="hover:text-orange-600">Program</a>
          <a href="#" class="hover:text-orange-600">Layanan</a>
          <a href="#" class="hover:text-orange-600">Tata Kelola</a>
          <a href="#" class="hover:text-orange-600">Kolaborasi</a>
          <a href="#" class="hover:text-orange-600">Berita</a>
        </nav>
      </div>
      <button class="bg-orange-500 text-white px-5 py-2 rounded-lg hover:bg-orange-600">Qurban Online</button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="pt-32 bg-white text-center">
    <div class="max-w-5xl mx-auto">
      <h1 class="text-4xl font-bold text-gray-800 leading-snug">Qurban <span class="text-orange-600 italic">Saling</span> Menguatkan</h1>
      <p class="text-sm text-gray-600 mt-2">Sesuai Syariah | Terjangkau | Berdampak Luas</p>
      <div class="mt-6">
        <img src="/images/banner-qurban.jpg" class="rounded-lg shadow-lg w-full" alt="Qurban Banner" />
      </div>
    </div>
  </section>

  <!-- Tentang Rendangmu -->
  <section class="bg-orange-100 py-16">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <img src="/images/sapi-qurban.jpg" alt="Sapi Qurban" class="rounded-xl shadow-md" />
      <div>
        <h2 class="text-3xl font-bold mb-4">Apa itu Rendangmu?</h2>
        <p class="text-gray-700 leading-relaxed mb-6">
          Lazismu memfasilitasi sahabat untuk bisa berqurban hebat dengan mudah. Pesan qurbannya via online, kami uruskan dari mulai penyembelihan hingga pendistribusian qurbannya.
          Dengan <strong>Rendangmu</strong>, daging qurban diolah menjadi kornet dan rendang yang tahan lama dan bermanfaat untuk daerah bencana dan pelosok negeri.
        </p>
        <a href="#" class="bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600 font-semibold">Donasi Sekarang</a>
      </div>
    </div>
  </section>

  <!-- Qurban Sesuai Syariah -->
  <section class="bg-gray-100 py-16 text-center">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold mb-4">Qurban Sesuai Syariah dan Manfaatnya Lebih Luas</h2>
      <p class="text-gray-700 leading-relaxed mb-8">
        Dengan Rendangmu, daging qurban diolah menjadi rendang dan kornet, memperluas jangkauan manfaat qurban hingga pelosok Indonesia.
      </p>
      <a href="#" class="bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600 font-semibold">Donasi Sekarang</a>
    </div>
  </section>

  <!-- Proses Rendangmu -->
  <section class="bg-white py-20">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-orange-600 mb-12">Bagaimana Rendangmu di Proses</h2>
      <div class="grid md:grid-cols-4 gap-8 text-center">
        <div class="bg-orange-500 text-white rounded-xl shadow-lg p-6">
          <h3 class="text-xl font-semibold mb-2">1. Pilihan Daging Terbaik</h3>
          <p>Daging berkualitas dipilih sesuai standar syariah.</p>
        </div>
        <div class="bg-orange-500 text-white rounded-xl shadow-lg p-6">
          <h3 class="text-xl font-semibold mb-2">2. Proses Penyembelihan</h3>
          <p>Proses penyembelihan sesuai syariat dan higienis.</p>
        </div>
        <div class="bg-orange-500 text-white rounded-xl shadow-lg p-6">
          <h3 class="text-xl font-semibold mb-2">3. Produksi Kornet & Rendang</h3>
          <p>Daging diolah menjadi produk siap saji tahan lama.</p>
        </div>
        <div class="bg-orange-500 text-white rounded-xl shadow-lg p-6">
          <h3 class="text-xl font-semibold mb-2">4. Distribusi Luas</h3>
          <p>Didistribusikan ke masyarakat yang membutuhkan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Distribution -->
  <section class="bg-gray-100 py-16 text-center">
    <h2 class="text-2xl font-bold text-gray-800 mb-8">Penyaluran Rendangmu Tahun 2024</h2>
    <img src="/images/map-indonesia.png" alt="Map Indonesia" class="mx-auto w-3/4" />
  </section>

  <!-- Pilihan Hewan -->
  <section class="bg-orange-100 py-20 text-center">
    <h2 class="text-2xl text-gray-800 font-bold mb-10">Pilih Hewan Qurban Anda, dan Berdayakan Desa dengan Berqurban</h2>
    <div class="flex flex-wrap justify-center gap-10">
      <div class="bg-orange-400 rounded-xl shadow-md p-6 w-72">
        <img src="/images/kambing.png" alt="Kambing" class="w-full rounded-lg mb-4" />
        <h3 class="font-bold text-lg">Rendangmu Kambing</h3>
        <p>Rp 2.900.000<br>– Kornet 30 Kaleng<br>– Rendang 25 Kaleng</p>
        <button class="mt-4 bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700">Tunaikan Langsung</button>
      </div>
      <div class="bg-orange-400 rounded-xl shadow-md p-6 w-72">
        <img src="/images/sapi17.png" alt="Sapi 1/7" class="w-full rounded-lg mb-4" />
        <h3 class="font-bold text-lg">Rendangmu Sapi 1/7</h3>
        <p>Rp 3.000.000<br>– Kornet 50 Kaleng<br>– Rendang 35 Kaleng</p>
        <button class="mt-4 bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700">Tunaikan Langsung</button>
      </div>
      <div class="bg-orange-400 rounded-xl shadow-md p-6 w-72">
        <img src="/images/sapi.png" alt="Sapi" class="w-full rounded-lg mb-4" />
        <h3 class="font-bold text-lg">Rendangmu Sapi</h3>
        <p>Rp 19.450.000<br>– Kornet 350 Kaleng<br>– Rendang 250 Kaleng</p>
        <button class="mt-4 bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700">Tunaikan Langsung</button>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-200 py-10 text-center text-gray-600">
    <p class="italic">“Ya Allah terimalah qurban kami, limpahkan barokahMu untuk keluarga kami dan jadikan amal jariyah di surga.”</p>
    <div class="flex justify-center mt-6 space-x-6">
      <div class="bg-orange-500 text-white p-4 rounded-lg">Anonim - Rendangmu Kambing</div>
      <div class="bg-orange-500 text-white p-4 rounded-lg">Anonim - Rendangmu Sapi 1/7</div>
    </div>
    <img src="/images/lazismu-logo.png" alt="Lazismu" class="mx-auto mt-8 w-20" />
  </footer>
</div>
@endsection
