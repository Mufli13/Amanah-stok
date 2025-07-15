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
        $data = [
            'title' => 'Barang Keluar',
            'barang_keluar' => $this->barangKeluarModel->findAll()
        ];

        return view('barang_keluar_view', $data);
    }

    // Form Tambah
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Barang Keluar'
        ];

        return view('barang_keluar/tambah', $data);
    }

    // Simpan data baru
    public function simpan()
    {
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

    // Form Edit
    public function edit($id_keluar)
    {
        $data = [
            'title' => 'Edit Barang Keluar',
            'barang' => $this->barangKeluarModel->find($id_keluar)
        ];

        return view('barang_keluar/edit', $data);
    }

    // Proses update data
    public function update($id_keluar)
    {
        $this->barangKeluarModel->update($id_keluar, [
            'tanggal' => $this->request->getPost('tanggal'),
            'barang' => $this->request->getPost('barang'),
            'ukuran' => $this->request->getPost('ukuran'),
            'jumlah' => $this->request->getPost('jumlah'),
            'penerima' => $this->request->getPost('penerima'),
            'keterangan' => $this->request->getPost('keterangan'),
        ]);

        return redirect()->to('/barangkeluar')->with('success', 'Data berhasil diupdate!');
    }

    // Hapus data
    public function hapus($id_keluar)
    {
        $this->barangKeluarModel->delete($id_keluar);
        return redirect()->to('/barangkeluar')->with('success', 'Data berhasil dihapus!');
    }
}
