<?php
// Membaca file data-qurban.json dan menampilkan isinya

// Path ke file JSON
$file = __DIR__ . '/../../data-qurban.json';

// Membaca file
$json = file_get_contents($file);

// Mengubah JSON menjadi array PHP
$data = json_decode($json, true);

if ($data === null) {
    echo "Gagal membaca atau format JSON tidak valid.";
    exit;
}

// Menampilkan data
foreach ($data as $peserta) {
    echo "ID: " . $peserta['ID'] . "\n";
    echo "Nama: " . $peserta['nama'] . "\n";
    echo "Email: " . $peserta['email'] . "\n";
    echo "Jenis Qurban: " . $peserta['jenis_qurban'] . "\n";
    echo "Jumlah Hewan: " . $peserta['jumlah_hewan'] . "\n";
    echo "Alamat: " . $peserta['alamat'] . "\n";
    echo "Status Pembayaran: " . $peserta['status_pembayaran'] . "\n";
    echo "--------------------------\n";
}
