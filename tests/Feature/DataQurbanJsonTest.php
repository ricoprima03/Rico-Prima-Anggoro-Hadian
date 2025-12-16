<?php
use PHPUnit\Framework\TestCase;

class DataQurbanJsonTest extends TestCase
{
    public function testJsonIsValidAndReadable()
    {
        $file = __DIR__ . '/../../data-qurban.json';
        $this->assertFileExists($file, 'File data-qurban.json tidak ditemukan.');

        $json = file_get_contents($file);
        $this->assertNotFalse($json, 'Gagal membaca file data-qurban.json.');

        $data = json_decode($json, true);
        $this->assertNotNull($data, 'Format JSON tidak valid.');
        $this->assertIsArray($data, 'Data JSON tidak berupa array.');
        $this->assertNotEmpty($data, 'Data JSON kosong.');

        // Cek struktur data
        foreach ($data as $peserta) {
            $this->assertArrayHasKey('ID', $peserta);
            $this->assertArrayHasKey('nama', $peserta);
            $this->assertArrayHasKey('email', $peserta);
            $this->assertArrayHasKey('jenis_qurban', $peserta);
            $this->assertArrayHasKey('jumlah_hewan', $peserta);
            $this->assertArrayHasKey('alamat', $peserta);
            $this->assertArrayHasKey('status_pembayaran', $peserta);
        }
    }
}
