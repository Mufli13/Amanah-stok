<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangMasukModel;

class BarangMasukController extends BaseController
{
    protected $barangMasukModel;

    public function __construct()
    {
        $this->barangMasukModel = new BarangMasukModel();
    }

    // Halaman utama
    public function index()
    { // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        $data = [
            'title' => 'Barang Masuk',
            'barang_masuk' => $this->barangMasukModel->findAll()
        ];

        return view('barang_masuk_view', $data);
    }

    // Form Tambah
    public function tambah()
    { // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        $data = [
            'title' => 'Tambah Barang Masuk'
        ];

        return view('form_barang_masuk', $data);
    }

    // Simpan data baru
    public function simpan()
    { // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        if (!$this->validate([
            'tanggal' => 'required',
            'barang' => 'required',
            'jumlah' => 'required|integer'
        ])) {
            return redirect()->back()->withInput();
        }

        $this->barangMasukModel->save([
            'tanggal' => $this->request->getPost('tanggal'),
            'barang' => $this->request->getPost('barang'),
            'ukuran' => $this->request->getPost('ukuran'),
            'jumlah' => $this->request->getPost('jumlah'),
            'penerima' => $this->request->getPost('penerima'),
            'keterangan' => $this->request->getPost('keterangan'),
        ]);

        return redirect()->to('/barang-masuk')->with('success', 'Data berhasil ditambahkan!');
    }

    // Hapus data
    public function hapus($id)
    { // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        $this->barangMasukModel->delete($id);
        return redirect()->to('/barangmasuk')->with('success', 'Data berhasil dihapus!');
    }
}
