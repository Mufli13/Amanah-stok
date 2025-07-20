<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DaftarBarangModel;

class DaftarBarangController extends BaseController
{
    protected $daftarBarangModel;

    public function __construct()
    {
        $this->daftarBarangModel = new DaftarBarangModel();
    }

    // Halaman utama
    public function index()
    { // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        $data = [
            'title' => 'Daftar Barang',
            'daftar_barang' => $this->daftarBarangModel->findAll()
        ];

        return view('barang_view', $data);
    }

    // Form Tambah
    public function tambah()
    { // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        $data = [
            'title' => 'Tambah Daftar Barang'
        ];

        return view('form_daftar_barang', $data);
    }

    // Simpan data baru
    public function simpan()
    { // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        if (!$this->validate([
            'tanggal' => 'required',
            'nama_barang' => 'required',
            'merk' => 'required'
        ])) {
            return redirect()->back()->withInput();
        }

        $this->daftarBarangModel->save([
            'tanggal' => $this->request->getPost('tanggal'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jenis' => $this->request->getPost('jenis'),
            'merk' => $this->request->getPost('merk'),
            'ukuran' => $this->request->getPost('ukuran'),
            'stock' => $this->request->getPost('stock'),
            'satuan' => $this->request->getPost('satuan'),
            'lokasi' => $this->request->getPost('lokasi'),
        ]);

        return redirect()->to('/daftarbarang')->with('success', 'Data berhasil ditambahkan!');
    }

    // Hapus data
    public function hapus($id)
    { // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        $this->daftarBarangModel->delete($id);
        return redirect()->to('/daftar-barang')->with('success', 'Data berhasil dihapus!');
    }
}
