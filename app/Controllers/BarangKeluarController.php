<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangKeluarModel;

class BarangKeluarController extends BaseController
{
    protected $barangKeluarModel;

    public function __construct()
    {
        $this->barangKeluarModel = new BarangKeluarModel();
    }

    // Halaman utama
    public function index()
    {
        // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        $data = [
            'title' => 'Barang Keluar',
            'barang_keluar' => $this->barangKeluarModel->findAll()
        ];

        return view('barang_keluar_view', $data);
    }

    // Form Tambah
    public function tambah()
    {  // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        $data = [
            'title' => 'Tambah Barang Keluar'
        ];

        return view('form_barang_keluar', $data);
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

        $this->barangKeluarModel->save([
            'tanggal' => $this->request->getPost('tanggal'),
            'barang' => $this->request->getPost('barang'),
            'ukuran' => $this->request->getPost('ukuran'),
            'jumlah' => $this->request->getPost('jumlah'),
            'penerima' => $this->request->getPost('penerima'),
            'keterangan' => $this->request->getPost('keterangan'),
        ]);

        return redirect()->to('/barangkeluar')->with('success', 'Data berhasil ditambahkan!');
    }

    // Hapus data
    public function hapus($id)
    { // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        $this->barangKeluarModel->delete($id);
        return redirect()->to('/barangkeluar')->with('success', 'Data berhasil dihapus!');
    }
}
